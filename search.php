
<?php
require_once 'load.php';

if(isset($_POST['submit-search'])){
    $searchResults = searchProducts();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Page</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>Search Results</h1>
<?php while ($row = $searchResults->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="movie-item">
            <img src="images/<?php echo $row['product_img']; ?>" alt="<?php echo $row['product_name']; ?>" />
            <h2><?php echo $row['product_name']; ?></h2>

            <a class="readMore" href="details.php?id=<?php echo $row['product_id']; ?>">Read More</a>
        </div>
    <?php endwhile;?>
    
</body>
</html>