<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$num = 0;

echo "Question 1: 2+2 \n";
echo "You answered: " . $q1;
echo "\nCorrect Answer: 4 \n\n";
echo "<br>";
echo "Question 2: 10+5 \n";
echo "You answered: " . $q2;
echo "\nCorrect Answer: 15 \n\n";
echo "<br>";
echo "Question 3: 3*2 \n";
echo "You answered: " . $q3;
echo "\nCorrect Answer: 6 \n\n";
echo "<br>";
echo "Question 4: 4^2 \n";
echo "You answered: " . $q4;
echo "\nCorrect Answer: 16 \n\n";
echo "<br>";
echo "Question 5: sqrt(25) \n";
echo "You answered: " . $q5;
echo "\nCorrect Answer: 5 \n\n";

if($q1 == 4){
  $num++;
}
if($q2 == 15){
  $num++;
}
if($q3 == 6){
  $num++;
}
if($q4 == 16){
  $num++;
}
if($q5 == 5){
  $num++;
}

echo "<br>";
echo "Total Correct: " . $num;
echo "<br>";
echo "Score: " . $num*100/5 . "%";
?>
