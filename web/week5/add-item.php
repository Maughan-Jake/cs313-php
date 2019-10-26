<?php include('add-item-to-db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JakesList - Add Item</title>
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

    <h1>Add New Item to Jakeslist</h1>

    <form action="add-item-to-db.php" method="post"> 
        <!-- Name -->
            <label for="itemName"> Item Name:
            <input type="text" name="itemName" id="itemName" placeholder="e.g 2012 Honda Accord" required>
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

            <input type="submit" value="Add item to JakesList" name="add-item">
    </form>


</body>
</html>

<?php 
                // $stmt = $db->prepare('select * from category');
                // $stmt->execute();
                // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                // foreach ($rows as $row)
                // {
                //     echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>'; 
                // }

                