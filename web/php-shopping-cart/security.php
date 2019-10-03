<?php
    // define variables and set to empty values
$inputAddress = $inputCity = $inputState = $inputZip = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $inputAddress = test_input($_POST["inputAddress"]);
  $inputCity = test_input($_POST["inputCity"]);
  $inputState = test_input($_POST["inputState"]);
  $inputZip = test_input($_POST["inputZip"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$inputAddressErr = $inputCityErr = $inputStateErr = $inputZipErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["inputAddress"])) {
    $inputAddressErr = "Address is required";
  } else {
    $inputAddress = test_input($_POST["inputAddress"]);
  }

  if (empty($_POST["inputCity"])) {
    $inputCityErr = "City is required";
  } else {
    $inputCity = test_input($_POST["inputCity"]);
  }

  if (empty($_POST["inputState"])) {
    $inputStateErr = "State is required";
  } else {
    $inputState = test_input($_POST["inputState"]);
  }

  if (empty($_POST["inputZip"])) {
    $inputZipErr = "Zip code is required";
  } else {
    $inputZip = test_input($_POST["inputZip"]);
  }
}
?>