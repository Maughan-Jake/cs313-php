<?php

$name = filter_input(INPUT_POST, 'itemName', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT);
$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);

if (
    empty($name) || empty($description) || empty($price) || empty($category)
) {
    $message = '<p>Please fill all empty form fields</p>';
    include 'index.php';
    exit;
}

require "db-connect.php";
$db = dbConnect();

$sql = 'INSERT INTO inventory (name, description, price, customer_id, category_id) 
        VALUES(:name, :description, :price, 1, :categoryID)';
    $stmt = $db->prepare($sql);
    
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
	$stmt->bindValue(':description', $description, PDO::PARAM_STR);
	$stmt->bindValue(':price', $price, PDO::PARAM_STR);
    $stmt->bindValue(':categoryID', $category, PDO::PARAM_STR);
    
    $stmt->execute();

    // Close the database interaction
    $stmt->closeCursor();

    $message = '<p>Product Successfully added!</p>';
    header('location: index.php');
    exit;
        
?>