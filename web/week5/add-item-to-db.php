<?php

$name = filter_input(INPUT_POST, 'itemName', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'description', FILTER_SANATIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANATIZE_NUMBER_FLOAT);
$category = filter_input(INPUT_POST, 'category', FILTER_SANATIZE_STRING);

if (
    empty($name) || empty($description) || empty($price) || empty($category)
) {
    $message = '<p>Please fill all empty form fields</p>';
    include 'index.php';
    exit;
}

require "db-connect.php";
$db = dbConnect();

$sql = 'INSERT INTO inventory (name, description, price, category_id) 
          VALUES(:name, :description, :price, :categoryID)';
    $stmt = $db->prepare($query);
    
    $stmt->bindValue(':name', $name. PDO::PARAM_STR);
	$stmt->bindValue(':description', $description, PDO::PARAM_STR);
	$stmt->bindValue(':price', $price, PDO::PARAM_STR);
    $stmt->bindValue(':categoryID', $category, PDO::PARAM_STR);
    
    $stmt->execute();

    $rowsChanged = $stmt->rowCount();
        // Close the database interaction
        $stmt->closeCursor();
        // Return the indication of success (rows changed)
        return $rowsChanged;

        if ($productOutcome === 1) {
            $message = '<p>Product Successfully added!</p>';
            include 'index.php';
            exit;
        } else {
            $message = '<p>Sorry, failed to add product. Please try again</p>';
            include 'index.php';
            exit;
        }
?>