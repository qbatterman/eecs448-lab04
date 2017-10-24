<?php

$shipping = $_POST["shipping"];
$guitar = $_POST["item0"];
$picks = $_POST["item1"];
$jacket = $_POST["item2"];
$user = $_POST["username"];
$pass = $_POST["password"];

echo "Welcome " .$user ."! You logged in with the password: " . $pass . "<br><br>";
$price = 0;

if ($shipping == "3")
{
  $price += 5;
  echo "3 day shipping:        $5<br>";
}
else if ($shipping == "1")
{
$price += 50;
  echo "overnight shipping:    $50<br>";
}
else
  echo "7 day shipping:        $0<br>";


if($guitar == "a")
{
  $price += 25;
  echo "Air Guitar:            $25<br>";
}

if($picks == "b")
{
  $price += 50;
  echo "Air Pick:              $50<br>";
}


if($jacket == "c")
{
  $price += 250;
  echo "Leather Jacket:        $250<br>";
}


echo  ("Total:                 $". $price);

?>
