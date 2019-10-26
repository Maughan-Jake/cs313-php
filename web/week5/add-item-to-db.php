<?php

$name= $_POST['itemName'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['id'];

require "db-connect.php";
$db = dbConnect();

$query = 'INSERT INTO inventory(name, description, price, category_id) VALUES(:name, :description, :price, :categoryID)';
    $statement = $db->prepare($query);
    
    $statement->bindValue(':name', $name);
	$statement->bindValue(':description', $description);
	$statement->bindValue(':price', $price);
    $statement->bindValue(':categoryID', $category);
    
    $statement->execute();

    header("Location:showUserItems.php");
    die();

?>