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
    <link rel="stylesheet" media="screen" href="main.css" type="html/css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="find-items.php">Search</a></li>
                <li><a href="add-item.php">Create</a></li>
            </ul>
        </nav>
        </header>  

    <h1>Item Details</h1>

    <?php
        $stmt = $db->prepare('select * from inventory WHERE id=:id');
        $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); //another function that get only 1

        foreach ($rows as $row)
        {
            echo '<p>';
            echo '<b>' . $row['name'] . ' ' . $row['description'] . ':' . $row['price'] . '</b>';
            echo ' - "' . $row['content'] . '"';
            echo '</p>';
        }
    ?>
</body>
</html>