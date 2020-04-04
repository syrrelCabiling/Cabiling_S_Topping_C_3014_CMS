<?php 
require_once '../load.php';
confirm_logged_in();

$tbl_categories = 'tbl_categories';
$categories = getAll($tbl_categories);


if (isset($_POST['submit'])){
    $createproduct = array(
        'product_img'   => $_FILES['product_img'],
        'product_name'   => $_POST['product_name'],
        'product_price'   => $_POST['product_price'],
        'product_colour'   => $_POST['product_colour'],
        'product_desc'    => $_POST['product_desc'],
        'category'   => $_POST['catDefaultList'],
    );

    $result = createProduct($createproduct);
    $message = $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Product</title>
</head>
<body>
    <h2>Add a Product to the Inventory</h2>
    <!-- make a dropdown for simplicity -->
    <?php echo !empty($message)? $message: ''; ?>
    
    <form action="admin_createProduct.php" method="post" enctype="multipart/form-data">
        
    <label>Product Category:</label>
        <select name="catDefaultList">
            <option>Select</option>
            <?php while ($row = $categories->fetch(PDO::FETCH_ASSOC)): ?>
                <option value="<?php echo $row['category_id']?>"><?php echo $row['category'];?></option>
            <?php endwhile;?>
            
        </select><br><br>

        <label for="">Upload Image</label><br>
        <input type="file" name="product_img" id="image"><br><br>

        <label>Product Name:</label>
        <input type="text" name="product_name" value=""><br><br>

        <label>Product Price</label>
        <input type="text" name="product_price" value="" placeholder="$$$"><br><br>
        
        <label>Enter Colour:</label>
        <input type="text" name="product_colour" value=""><br><br>

        <label>Product Description:</label>
        <textarea type="text" name="product_desc" value=""></textarea><br><br>
        
        <button name="submit">Create Product</button>
    </form>
</body>
</html>