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
  <title>JakesList - Search</title>
  <link rel="stylesheet" media="screen" href="main.css" type="text/css">
</head>
<body>
  <header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="add-item.php">Create</a></li>
        </ul>
    </nav>
  </header> 

  <h1>Search JakesList</h1>

  <form>
    <label for="name">Item:
       <input type="text" name="name" id="name">
    </label>
    <br/>
    
    <input type="submit" value="Search" name="search" id="search">
  </form>

  <?php
  // Search Scriptures from a Book
  $stmt = $db->prepare('select * from inventory WHERE name=:name');
  $stmt->bindValue(':name', $_GET['name'], PDO::PARAM_STR);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach ($rows as $row)
  {
    echo '<p>';
    echo '<a href="item-details.php?id=' . $row['id'] . '">';
    echo '<b>' . $row['name'] . ' ' . $row['description'] . ':' . $row['price'] . '</b>';
    echo '</a>';
    echo '</p>';
  }

  ?>

</body>
</html>
