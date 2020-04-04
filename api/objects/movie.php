<?php
class Movie
{

    private $conn;

    // Fetching tables from db
    public $tbl_categories               = 'tbl_categories';
    public $tbl_products               = 'tbl_products';

    public $tbl_products_categories = 'tbl_products_categories';


    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getProducts()
    {
        //TODO:write the SQL query that returns all movies from the tbl_movies table
        // $query = 'SELECT * FROM '.$this->movies_table;


        //TODO:write the SQL query that returns all products with its category
        $query = 'SELECT m.*, GROUP_CONCAT(g.category) as category FROM ' . $this->tbl_products . ' m';
        $query .= ' LEFT JOIN ' . $this->tbl_products_categories . ' link ON link.product_id = m.product_id';
        $query .= ' LEFT JOIN ' . $this->tbl_categories . ' g ON link.category_id = g.category_id ';
        $query .= ' GROUP BY m.product_id';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    public function getProductsByFilter($eachCategory){
        $query = 'SELECT m.*, GROUP_CONCAT(g.category) as category FROM ' . $this->tbl_products . ' m';
        $query .= ' LEFT JOIN ' . $this->tbl_products_categories . ' link ON link.product_id = m.product_id';
        $query .= ' LEFT JOIN ' . $this->tbl_categories . ' g ON link.category_id = g.category_id ';
        $query .= ' GROUP BY m.product_id';
        $query .= ' HAVING category LIKE "%'.$eachCategory.'%"';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    public function getProductByID($id)
    {
        $query = 'SELECT m.*, GROUP_CONCAT(g.category) as category FROM ' . $this->tbl_products . ' m';
        $query .= ' LEFT JOIN ' . $this->tbl_products_categories . ' link ON link.product_id = m.product_id';
        $query .= ' LEFT JOIN ' . $this->tbl_categories . ' g ON link.category_id = g.category_id ';
        $query .= ' WHERE m.product_id=' . $id;
        $query .= ' GROUP BY m.product_id';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    // public function getPrices()
    // {
    //     //TODO:write the SQL query that returns all movies from the tbl_movies table
    //     // $query = 'SELECT * FROM '.$this->movies_table;


    //     //TODO:write the SQL query that returns all products with its category
    //     $query = 'SELECT m.*, GROUP_CONCAT(g.price) as price FROM ' . $this->tbl_prices . ' m';
    //     $query .= ' LEFT JOIN ' . $this->tbl_products_prices . ' link ON link.product_id = m.product_id';
    //     $query .= ' LEFT JOIN ' . $this->tbl_prices . ' g ON link.price_id = g.category_id ';
    //     $query .= ' GROUP BY m.product_id';

    //     // prepare query statement
    //     $stmt = $this->conn->prepare($query);

    //     // execute query
    //     $stmt->execute();

    //     return $stmt;
    // }
}
