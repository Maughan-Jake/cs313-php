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
    <title>JakesList - update Item</title>
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
        <!-- Name -->
            <label for="name"> Item Name:
            <input type="text" name="name" id="itemName" <?php echo "value='$rows[name]'";?> required>
            </label>
            <br>
        <!-- Description -->
            <label for="description"> Description:
            <input type="text" name="description" id="description" placeholder="e.g Perfect for a college student. Gently used. etc..." required>
            </label>
            <br>
        <!-- Price -->
            <label for="price"> Price:
            <input type="number" name="price" id="price" step="0.01" placeholder="e.g 6800.99" required>
            </label>
            <br>
            <label for="category"> Category
                <select name="category" id="category">
                    <option value="1" name="1" id="1">Motorcycles</option>
                    <option value="2" name="2" id="2">Automobiles</option>
                    <option value="3" name="3" id="3">Bicycles</option>
                </select>
            </label>

            <input type="submit" name="action" value="Update">
            <input type="hidden" name="invId" value="<?php $_GET['id'] ?>">
    </form>
</body>
</html>