<?php
require_once 'load.php'; //the complete path is inside LOAD


// $movie_table = 'tbl_movies';
// $getMovies = getAll($movie_table);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tbl = 'tbl_products';
    $col = 'product_id';
    $getSingleProduct = getSingleProduct($tbl, $col, $id);
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

    <?php if (!is_string($getSingleProduct)): ?>
    <?php while ($row = $getSingleProduct->fetch(PDO::FETCH_ASSOC)): ?>
    <img src="images/<?php echo $row['product_img']; ?>" alt="<?php echo $row['product_name']; ?>">

    <h2>Product: <?php echo $row['product_name']; ?></h2>
    <h4>Price: <?php echo $row['product_price']; ?></h4>
    <h4>Available Colour: <?php echo $row['product_colour']; ?></h4>
    <p>Product Description: <?php echo $row['product_desc']; ?></p>
    <a href="index.php">Return</a>

    <?php endwhile;?>
    <?php endif;?>

    <?php include 'templates/footer.php';?>

</body>
</html>