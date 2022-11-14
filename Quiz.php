<?php

$ans1 = $_POST["q1"];
$ans2 = $_POST["q2"];
$ans3 = $_POST["q3"];
$ans4 = $_POST["q4"];
$ans5 = $_POST["q5"];

$cor1 = "Phog";
$cor2 = "Armando Bascot";
$cor3 = "1952";
$cor4 = "Chet Holmgren";
$cor5 = "20 seasons";

$score = 0;


echo "Question 1: Beware of the - what?<br>";
echo " Your answer: " .$ans1."<br>";
echo " Correct answer: " .$cor1. "<br><br>";

if($ans1 == $cor1){

  $score = $score + 20;

}

echo "Question 2: Who is NOT a player for the KU Basketball Team?<br>";
echo " Your answer: " .$ans2."<br>";
echo " Correct answer: " .$cor2. "<br><br>";

if($ans2 == $cor2){

  $score = $score + 20;

}

echo "Question 3: In what year did KU win their first National Championship?<br>";
echo " Your answer: " .$ans3."<br>";
echo " Correct answer: " .$cor3. "<br><br>";

if($ans3 == $cor3){

  $score = $score + 20;

}

echo "Question 4: Which NBA player did NOT play for KU?<br>";
echo " Your answer: " .$ans4."<br>";
echo " Correct answer: " .$cor4. "<br><br>";

if($ans4 == $cor4){

  $score = $score + 20;

}

echo "Question 5: How long has Bill Self coached the Jayhawks basketball team?<br>";
echo " Your answer: " .$ans5."<br>";
echo " Correct answer: " .$cor5. "<br><br>";

if($ans5 == $cor5){

  $score = $score + 20;

}


echo "Your score is ".$score."%";



?>
