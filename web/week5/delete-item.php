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
    <title>JakesList - Delete Item</title>
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

    <h1>Update Item in Jakeslist</h1>

    <form action="update.php" method="post"> 
        <h2 class="del-text">Are you sure you want to delete this item?</h2>

            <input type="submit" name="action" value="Delete">
            <input type="hidden" name="id" value="<?php echo ($_GET['id']) ?>">
    </form>
</body>
</html>