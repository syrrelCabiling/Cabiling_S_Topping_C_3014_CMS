<?php
class Movie
{

    private $conn;

    // Note: update table names, column names in here
    public $products_table               = 'tbl_products';
    public $category_table               = 'tbl_category';
    public $products_category_linking_table = 'tbl_products_category';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getProducts()
    {
        //TODO:write the SQL query that returns all movies from the tbl_movies table
        // $query = 'SELECT * FROM '.$this->movies_table;


        //TODO:write the SQL query that returns all movies with its genre
        $query = 'SELECT m.*, GROUP_CONCAT(g.category_name) as category_name FROM ' . $this->products_table . ' m';
        $query .= ' LEFT JOIN ' . $this->products_category_linking_table . ' link ON link.product_id = m.product_id';
        $query .= ' LEFT JOIN ' . $this->category_table . ' g ON link.category_id = g.category_id ';
        $query .= ' GROUP BY m.product_id';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    public function getProductsByCategory($category){
        $query = 'SELECT m.*, GROUP_CONCAT(g.category_name) as category_name FROM ' . $this->products_table . ' m';
        $query .= ' LEFT JOIN ' . $this->products_category_linking_table . ' link ON link.product_id = m.product_id';
        $query .= ' LEFT JOIN ' . $this->category_table . ' g ON link.category_id = g.category_id ';
        $query .= ' GROUP BY m.product_id';
        $query .= ' HAVING category_name LIKE "%'.$category.'%"';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    public function getProductsByID($id)
    {
        $query = 'SELECT m.*, GROUP_CONCAT(g.category_name) as category_name FROM ' . $this->category_table . ' m';
        $query .= ' LEFT JOIN ' . $this->products_category_linking_table . ' link ON link.product_id = m.product_id';
        $query .= ' LEFT JOIN ' . $this->category_table . ' g ON link.cateory_id = g.category_id ';
        $query .= ' WHERE m.product_id=' . $id;
        $query .= ' GROUP BY m.product_id';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
