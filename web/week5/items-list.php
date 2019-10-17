<?php

require "db-connect.php";
$db = dbConnect();

?>

<h1>Scripture Resources</h1>

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

<form>
Book: <input type="text" name="name">
<br/>
<input type="submit" value="Search">
</form>
