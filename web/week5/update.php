<?php
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }

    require "db-connect.php";
    $db = dbConnect();

    switch ($action) {
        case 'Update':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $category = filter_input(INPUT_POST, 'category');
        $invId = filter_input(INPUT_POST, 'invId', FILTER_SANITIZE_NUMBER_INT);

        updateItem($invId, $name, $description, $price, $category);
        break;
    }

    function updateItem ($id, $name, $description, $price, $category_id) {
        $sql = 'UPDATE inventory 
        SET(name = :name, description = :description, price = :price, category_id = :category_id) 
        WHERE id = :id';
        
        $stmt = $db->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        $stmt->bindValue(':price', $price, PDO::PARAM_STR);
        $stmt->bindValue(':category_id', $category_id, PDO::PARAM_STR);
        
        $stmt->execute();

        // Close the database interaction
        $stmt->closeCursor();

        $message = '<p>Product Successfully updated!</p>';
        header('location: index.php');
        exit;
    }

    function deleteProduct($id) {
        $db = dbConnect();
        $sql = 'DELETE FROM inventory WHERE invId = :invId';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();

        $message = '<p>Product Successfully Deleted!</p>';
        header('location: index.php');
        exit;
    }
    ?>

    <?php 
        $stmt = $db->prepare('SELECT name, description, price, category_id
                            FROM inventory
                            WHERE id = id');
        $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            echo $_GET['id'];
            echo $rows['name'];
            echo $rows['id'];
            echo $rows['category_id'];
        }
    ?>