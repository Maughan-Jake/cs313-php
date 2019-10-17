<?php

require "db-connect.php";
$db = dbConnect();

?>

<h1>item Details</h1>

<?php

// Select ONE scripture with id=?
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