<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JakesList - Add Item</title>
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
            <label for="itemName">
            <input type="text" name="itemName" id="itemName">
            </label>
        <!-- Description -->
            <label for="description">
            <input type="textarea" name="description" id="description">
            </label>
        <!-- Price -->
            <label for="price">
            <<input type="number" name="price" id="price" step="0.01">
            </label>
        <!-- Customer_id -->
            <!-- Link to user session -->
            <!-- <label for="">
            <input type="text" name="" id="">
            </label> -->
        <!-- Category_id -->
            <label for="category">
            <input type="number" min="1" max="3" name="category" id="category">
            </label>
    </form>


</body>
</html>