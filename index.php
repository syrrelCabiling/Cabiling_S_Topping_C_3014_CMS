<?php
require_once 'load.php';

if (isset($_GET['filterNav'])) {

    //these are referenced back inside read.php under the function. 
    $args = array( 
        'tbl' => 'tbl_products',
        'tbl2' => 'tbl_categories',
        'tbl3' => 'tbl_products_categories',
        'col' => 'product_id',
        'col2' => 'category_id',
        'col3' => 'category',
        'filter' => $_GET['filter'],
    );
    $getProductsByFilter = getProductsByFilter($args);
} else {
    $tbl_products = 'tbl_products';
    $getProductsByFilter = getAll($tbl_products);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>SportCheck: For Her</title>
   
</head>
<body>
<?php include 'templates/header.php';?>
    <?php while($row = $getProductsByFilter->fetch(PDO::FETCH_ASSOC)):?>
      
        <div class="product-item">
            <img class="prod_img" src="images/<?php echo $row['product_img']; ?>" alt="<?php echo $row['product_name'];?>"/>
            <h2><?php echo $row['product_name'];?>  </h2>
            <h2><?php echo $row['product_price'];?>  </h2>
            <a href="details.php?id=<?php echo $row['product_id']; ?>">Read More</a>
        </div>
    
    <?php endwhile?>
    <?php include 'templates/footer.php';?>
</body>
</html>