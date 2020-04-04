<?php

require_once 'load.php'; //the complete path is inside LOAD

if(isset($_GET['filterNav'])){
    //filter
    $args = array(
        'tbl'=>'tbl_user',
        'filter'=>$_GET['filter']
    );
    $getMovies = getProductByFilter($args); 
}else{
    $tbl_products = 'tbl_products';
    $getProducts = getAll($tbl_products);  
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
    <?php while($row = $getProducts->fetch(PDO::FETCH_ASSOC)):?>
        <div class="product-item">
            <img src="images/<?php echo $row['product_img']; ?>" alt="<?php echo $row['product_name'];?>"/>
            <h2><?php echo $row['movies_title'];?>  </h2>
            <h4>Movie Released: <?php echo $row['movies_year'];?></h4>
            <a href="details.php?id=<?php echo $row['movies_id'];?>">Read More...</a>
        </div>
    
    <?php endwhile?>
    <?php include 'templates/footer.php';?>
</body>
</html>