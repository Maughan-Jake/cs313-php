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

    <div>
        <?php
            $stmt = $db->prepare('select * from inventory WHERE id=:id');
            $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($rows as $row)
            {
                echo '<h3>' . $row['name'] . '</h3>';
                echo '<p class="description">' . $row['description'] . '</p>';
                echo '<p class="price-box">' . $row['price']  . '</p>';
                // join the tables so I can also echo the seller name and email as contact info
            }
        ?>
    </div>
</body>
</html>