<?php 
    require_once '../load.php';
    confirm_logged_in();

    $category_table = 'tbl_categories';
    $categories = getAll($category_table);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $getProduct = editSingleProduct($id);

        if(is_string($getProduct)){
            $message = $getProduct;
        }
    
        if(isset($_POST['submit'])){
        $pname = trim($_POST['product_name']);
        $image = trim($_FILES['product_img']);
        $description = trim($_POST['product_desc']);
        $category  = trim($_POST['genList']);
        $message = editProduct($id, $pname, $image, $description, $category);
        }
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
    <form action="admin_editProductForm.php?id=<?php echo $id ?>" method="POST">
    <?php while ($info = $getProduct->fetch(PDO::FETCH_ASSOC)): ?>
            <label>Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $info['product_name'];?>"><br><br>

            <label for="">Product Image:</label><br>
    <input type="file" id="upload" class="custom-file-input" name="image" value="">
    <label class="custom-file-label" for="image"><?php echo $info['product_img']; ?></label><br><br>

            <label>Product Description:</label>
            <input type="text" name="product_desc" value="<?php echo $info['product_desc'];?>"><br><br>

            <label>Product Category:</label><br>
            <select name="genList">
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
