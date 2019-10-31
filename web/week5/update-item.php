<?php
require "db-connect.php";
$db = dbConnect();

$stmt = $db->prepare('SELECT id, name, description, price, category_id
FROM inventory
WHERE id = id');
$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo $rows['id'];

// $sql = 'INSERT INTO inventory (name, description, price, customer_id, category_id) 
//         VALUES(:name, :description, :price, 1, :categoryID)';
//     $stmt = $db->prepare($sql);
    
//     $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// 	$stmt->bindValue(':description', $description, PDO::PARAM_STR);
// 	$stmt->bindValue(':price', $price, PDO::PARAM_STR);
//     $stmt->bindValue(':categoryID', $category, PDO::PARAM_STR);
    
//     $stmt->execute();

//     // Close the database interaction
//     $stmt->closeCursor();

//     $message = '<p>Product Successfully added!</p>';
//     header('location: index.php');
//     exit;
        
?>