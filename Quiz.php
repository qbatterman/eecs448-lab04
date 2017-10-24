<?php

$quest1 = $_POST["quest1"];
$quest2 = $_POST["quest2"];
$quest3 = $_POST["quest3"];
$quest4 = $_POST["quest4"];
$quest5 = $_POST["quest5"];
$correct = 1;

echo "Question 1: What is 5+5?<br>";
echo("You answered: " . $quest1 . "<br>");
echo("Correct Answer: 10<br><br>");
if ($quest1 == "10")
{
  $correct++;
}


echo "Question 2: Is red a better color than black?<br>";
echo("You answered: " . $quest2 . "<br>");
echo("Correct Answer: Yes (Technically, black is not a color)<br><br>");
if ($quest2 == "Yes")
{
  $correct++;
}


echo "Question 3: What is your favorite color? <br>";
echo("You answered: " . $quest3 . "<br>");
echo("Thats a great color!<br><br>");


echo "Question 4: How fast does the fast car go?<br>";
echo("You answered: " . $quest4 . "<br>");
if ($quest4 == "fast")
{
  $correct++;
  echo("Correct Answer: fast<br><br>");
}
else
{
  echo("Correct Answer: fast, capitalization matters<br><br>");
}

echo "Question 5: How fast does the Fast car go?<br> ";
echo("You answered: " . $quest5 . "<br>");
if ($quest5 == "Fast")
{
  $correct++;
  echo("Correct Answer: Fast<br><br>");
}
else
{
  echo("Correct Answer: Fast, Capitalization matters<br><br>");
}

$percent = $correct/5 * 100;
echo("<br>You answered " .$correct . "/5 correctly, or " . $percent . "%!");

?>
