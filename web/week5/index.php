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
    <title>JakesList</title>
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

    <h1>Jakes List</h1>

    <div id="col-1">
        <h2>Motorcycles</h2>
        <ul>
            <?php
            $statement = $db->prepare("SELECT id, name, price FROM inventory WHERE category_id=1");
            $statement->execute();
            // Go through each result
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $name = $row['name'];
                $price = $row['price'];
                echo "<li>";
                echo '<a href="item-details.php?id=' . $row['id'] . '">';
                echo "<strong>$name</strong> - \"$$price\"</a></li>";
            }
            ?>
        </ul>

    </div>

    <div id="col-2">
        <h2>Automobiles</h2>
        <ul>
        <!-- Insert php for items from each category here -->
        <?php
            $statement = $db->prepare("SELECT id, name, price FROM inventory WHERE category_id=2");
            $statement->execute();
            // Go through each result
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $name = $row['name'];
                $price = $row['price'];
                echo "<li>";
                echo '<a href="item-details.php?id=' . $row['id'] . '">';
                echo "<strong>$name</strong> - \"$$price\"</a></li>";
            }
            ?>
        </ul>
    </div>

    <div id="col-3">
        <h2>Bikes</h2>
        <ul>
        <!-- Insert php for items from each category here -->
        <?php
            $statement = $db->prepare("SELECT id, name, price FROM inventory WHERE category_id=3");
            $statement->execute();
            // Go through each result
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $name = $row['name'];
                $price = $row['price'];
                echo "<li>";
                echo '<a href="item-details.php?id=' . $row['id'] . '">';
                echo "<strong>$name</strong> - \"$$price\"</a></li>";
            }
            ?>
        </ul>

    </div>

</body>
</html>