<?php

require "db-connect.php";
$db = dbConnect();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JakesList - Item Description</title>
    <link rel="stylesheet" media="screen" href="main.css" type="text/css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="find-items.php">Search</a></li>
                <li><a href="add-item.php">Create</a></li>
            </ul>
        </nav>
        </header>  

    <h1>Details</h1>

    <div id="item-description">
        <?php
            $stmt = $db->prepare('select inventory.id, inventory.name, inventory.description, inventory.price, customer.first_name,
            customer.last_name, customer.email
            FROM inventory
            INNER JOIN customer ON customer_id = customer.id 
            WHERE inventory.id=:id');
            $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($rows as $row)
            {
                echo '<h3 class="title">' . $row['name'] . '</h3>';
                echo '<div id="description-text">';
                echo '<p class="description">' . $row['description'] . '</p>';
                echo '<p class="description"> Posted by: ' . $row['first_name'] . ' ' . $row['last_name'] . '<br> <p class="description">Email: ' . $row['email'] . ' for more details and pictures</p>';
                echo '</div>';
                echo '<p class="price-box">' . $row['price']  . '</p>';
                echo '<a class="update-button ub1" href="update-item.php?id=' . $row['id'] . '">Update Item</a>';
                echo '<a class="update-button ub2" href="delete-item.php?id=' . $row['id'] . '">Delete Item</a>';
            }

        ?>
    </div>
</body>
</html>