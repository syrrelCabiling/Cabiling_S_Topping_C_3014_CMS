<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../../config/database.php';
include_once '../objects/movie.php';

// instantiate database and movie object
//$database = new Database(); OLD
$db       = Database::getInstance()->getConnection();

// initialize object
$product = new product($db);

// THis is where users can search for a product
if (isset($_GET['id'])) {
    $stmt = $product->getProductByID($_GET['id']);
} else if(isset($_GET['category'])){
    $stmt = $product->getProductsByFilter($_GET['category']);
}else {
    $stmt = $product->getProducts();
}

$num = $stmt->rowCount();

//availability
if ($num > 0) {

    //products
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $getSingleProduct = $row;
        $results[]    = $single_product;
    }

    //TODO:chat about JSON_PRETTY_PRINT vs not
    echo json_encode($results, JSON_PRETTY_PRINT);
} else {
    echo json_encode(
        array(
            "message" => "Sorry, that's not available.",
        )
    );
}
