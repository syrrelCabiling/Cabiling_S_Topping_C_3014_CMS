<?php


function createProduct($createproduct)
{

    try {
        //Connect DB
        $pdo = Database::getInstance()->getConnection();

        //Validate the uploaded file
        $product_img   = $createproduct['product_img'];
        $upload_file    = pathinfo($product_img['name']);
        $accepted_types = array('gif', 'jpg', 'jpe', 'png', 'jpeg', 'webp');
        if (!in_array($upload_file['extension'], $accepted_types)) {
            throw new Exception('Wrong file type!');
        }

        // 3. Move the uploaded file around (move the file from tmp path to the /images folder)
        $image_path = '../images/';


        // Randomlize/hash the file name before moving it over to make its appropriate
        $generated_name     = md5($upload_file['filename'].time());
        $generated_filename = $generated_name.'.'.$upload_file['extension'];
        $targetpath         = $image_path.$generated_filename;

        if (!move_uploaded_file($product_img['tmp_name'], $targetpath)) {
            throw new Exception('Failed to move uploaded file, check permission!');
        }


        // 4. Insert into DB (tbl_products as well as tbl_products_categories)
        $insert_product_query = 'INSERT INTO tbl_products(product_name,product_img,product_desc,product_colour,product_price) VALUES(:product_name,:product_img,:product_desc,:product_colour,:product_price)';
        $insert_product        = $pdo->prepare($insert_product_query);
        $insert_product_result = $insert_product->execute(
            array(
                ':product_name'     => $createproduct['product_name'],
                ':product_img'     => $generated_filename,
                ':product_desc'      => $createproduct['product_desc'],
                ':product_colour'      => $createproduct['product_colour'],
                ':product_price'      => $createproduct['product_price'],

            )
        );

        $last_uploaded_id = $pdo->lastInsertId();
        if ($insert_product_result && !empty($last_uploaded_id)) {
            $update_category_query = 'INSERT INTO tbl_products_categories(product_id, category_id) VALUES(:product_id, :category_id)';
            $update_category       = $pdo->prepare($update_category_query);
            $update_category_result = $update_category->execute(
                array(
                    ':product_id' => $last_uploaded_id,
                    ':category_id'  => $createproduct['category'],
                )
            );
        }
 
        //5. If all of above works, redirect user to index.php
        redirect_to('index.php');
    } catch (Exception $e) {
        // Otherwise, return some error message
        $error = $e->getMessage();
        return $error;
    }
}


function getAllProducts(){
    $pdo = Database::getInstance()->getConnection();

    $get_product_query = 'SELECT * FROM tbl_products';
    $products = $pdo->query($get_product_query);

    if($products){
        return $products;
    }else{
        return false;
    }
}


function editProducts($products)
{

    try {
        $pdo = Database::getInstance()->getConnection();

        $update_product_query = 'UPDATE tbl_products SET name = :name, description = :description, image = :image WHERE product_ID = :id';

        $update_set = $pdo->prepare($update_product_query);
        $update_product_result = $update_set->execute(
        array(
            ':id' => $product['id'],
            ':name' => $product['product_name'],
            ':description' => $product['product_desc'],
            ':image' => $product['product_img'],
        )
        );

        $this_product_id = $product['id'];

        if ($update_product_result && !empty($this_product_id)) {
            $update_category_query = 'UPDATE tbl_products_categories SET category_ID = :category_id WHERE product_ID = :product_id';
            $update_category = $pdo->prepare($update_category_query);

            $update_category_result = $update_category->execute(
                array(
                    ':product_id' => $this_product_id,
                    ':category_id' => $product['category'],
                )
            );
        }

        redirect_to('index.php');

    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;
    }

}




function deleteProduct($id){
    $pdo = Database::getInstance()->getConnection();
    $delete_product_query = 'DELETE FROM tbl_products WHERE product_id = :id';
    $delete_product_set = $pdo->prepare($delete_product_query);
    $delete_product_result = $delete_product_set->execute(
        array(
            ':id'=>$id
        )
    );

    //If everything went through, redirect to admin_deleteuser.php
    //Otherwise, return false
    if($delete_product_result && $delete_product_set->rowCount() > 0){
        redirect_to('admin_deleteproduct.php');
    }else{
        return false;
    }
}
