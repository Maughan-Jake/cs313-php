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
        <?php 
            $stmt = $db->prepare('SELECT name, description, price, category_id
                                FROM inventory
                                WHERE id = id');
            $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
            $stmt->execute();
            // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // echo $_GET['id'];
            // echo $rows['name'];
            // echo $rows['id'];
            // echo $rows['category_id'];
            ?>
        <!-- Name -->
            <label for="itemName"> Item Name:
            <input type="text" name="itemName" id="itemName" <?php echo "value='$rows[name]'";?> required>
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

            <input type="submit" value="Update item in JakesList" name="update-item">
    </form>
</body>
</html>

                
<?php
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