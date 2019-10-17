<?php

require_once 'db-connect.php';

dbConnect();

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
  //<b>John 3:16</b> - "For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life."
  echo '<p>';
  echo '<a href="scripture-details.php?id=' . $row['id'] . '">';
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