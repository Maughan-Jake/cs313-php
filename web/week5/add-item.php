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

    <form action="">
        <!-- Name -->
            <label for="itemName"> Item Name:
            <input type="text" name="itemName" id="itemName" placeholder="e.g 2012 Honda Accord">
            </label>
            <br>
        <!-- Description -->
            <label for="description"> Description:
            <input type="textarea" name="description" id="description" placeholder="e.g Perfect for a colege student. Gently used. etc...">
            </label>
            <br>
        <!-- Price -->
            <label for="price"> Price:
            <input type="number" name="price" id="price" step="0.01" placeholder="6800.99">
            </label>
            <br>
        <!-- Customer_id -->
            <!-- Link to user session -->
            <!-- <label for="">
            <input type="text" name="" id="">
            </label> -->
        <!-- Category_id -->
            <label for="category"> Category
            <select name="category" id="category">
            <?php 
                $stmt = $db->prepare('select * from category');
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                foreach ($rows as $row)
                {
                    echo '<option value="' . $row['id'] . '">.' . $row['name'] . '</option>'; 
                }
            ?>

                <!-- <select name="category" id="category">
                    <option value="1">Motorcycles</option>
                    <option value="2">Automobiles</option>
                    <option value="3">Bicycles</option>
                </select> -->
            </label>

            <input type="submit" value="Add item to JakesList" name="add-item">
    </form>


</body>
</html>