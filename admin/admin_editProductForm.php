<?php 
    require_once '../load.php';
    confirm_logged_in();

    $tbl_categories = 'tbl_categories';
    $categories = getAll($tbl_categories);


        $id = $_GET['id'];
        $getProduct = editSingleProduct($id);

        if(is_string($getProduct)){
            $message = $getProduct;
        }
    
        if (isset($_POST['submit'])){
     
                $product_img   = trim($_FILES['product_img']);
                $product_name   = trim($_POST['product_name']);
                $product_desc    = trim($_POST['product_desc']);
                $category   = trim($_POST['catDefaultList']);
            
        
            $result = editProducts($id, $product_img, $product_name, $product_desc, $category);
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
    <?php while ($info = $getProduct->fetch(PDO::FETCH_ASSOC)): ?>
            <label>Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $info['product_name'];?>"><br><br>

            <label for="">Product Image:</label><br>
            <input type="file" id="upload" class="custom-file-input" name="product_img" value="">
            <label class="custom-file-label" for="product_img"><?php echo $info['product_img']; ?></label><br><br>

            <label>Product Description:</label>
            <input type="text" name="product_desc" value="<?php echo $info['product_desc'];?>"><br><br>

            <label>Product Category:</label><br>
            <select name="catDefaultList">
            <option>Select Category..</option>
            <?php while ($row = $categories->fetch(PDO::FETCH_ASSOC)): ?>
                <option value="<?php echo $row['category_id']?>"><?php echo $row['category'];?></option>
                <?php endwhile;?>
            </select>

          
        <?php endwhile;?>
      <button type="submit" name="submit">Edit Product</button>
    </form>
</body>
</html>
