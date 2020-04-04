<?php 
    require_once '../load.php';
    confirm_logged_in();

    $id = $_GET['id'];
    $product = editSingleProduct($id);
    
    if(is_string($product)){
        $message = $product;
    }

    if(isset($_POST['submit'])){
        $pname = trim($_POST['product_name']);
        $description = trim($_POST['description']);
        //$img = $_FILES['product_img'];
        
        $message = editProduct($id, $pname, $description);
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
    <form action="admin_editpform.php" method="post">
        <?php while($info = $product->fetch(PDO::FETCH_ASSOC)): ?>
            <label>Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $info['product_name'];?>"><br><br>

            <label>Product Description:</label>
            <input type="text" name="description" value="<?php echo $info['product_description'];?>"><br><br>

         

        <?php endwhile;?>
      <button type="submit" name="submit">Edit Product</button>
    </form>
</body>
</html>
