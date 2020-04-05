<?php 
    require_once '../load.php';
    confirm_logged_in();

    $tbl_categories = 'tbl_categories';
    $categories = getAll($tbl_categories);


    //$id = $_SESSION['user_id'];
    $id = $_GET['id'];
    $product = editSingleProduct($id);

    if(is_string($product)){
        $message = $product;
    }

    if(isset($_POST['submit'])){
        $product_name = trim($_POST['product_name']);
        $product_price = trim($_POST['product_price']);
        $product_img = $_FILES['product_img'];
        $product_desc = trim($_POST['product_desc']);
        // $category = trim($_POST['category']);

        $result = editProducts($id, $product_name, $product_price, $product_img, $product_desc);
        $message = $result;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <?php echo !empty($message)? $message : '';?>
    <form action="admin_editProductForm.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
    <?php while ($info = $product->fetch(PDO::FETCH_ASSOC)): ?>
            <label>Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $info['product_name'];?>"><br><br>

            <label>Product Price:</label>
            <input type="text" name="product_price" value="<?php echo $info['product_price'];?>"><br><br>

            <label for="">Product Image:</label><br>
            <input type="file" id="upload" class="custom-file-input" name="product_img" value="">
            <label class="custom-file-label" for="product_img"><?php echo $info['product_img']; ?></label><br><br>

            <label>Product Description:</label>
            <input type="text" name="product_desc" value="<?php echo $info['product_desc'];?>"><br><br>

          
        <?php endwhile;?>
      <button type="submit" name="submit">Edit Product</button>
    </form>
</body>
</html>
