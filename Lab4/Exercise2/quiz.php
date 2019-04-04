<?php

$numCorrect = 0;
$q = array($_POST["q1"], $_POST["q2"], $_POST["q3"],$_POST["q4"], $_POST["q5"]);
$ans = array("England","Bathing","Clowns","336","Simpsons");

echo "Question 1: In what place was Christmas once illegal?<br> You answered: $q[0] <br> Correct answer: $ans[0]<br><br>";
echo "Question 2: In California, it is illegal to eat oranges while doing what?<br> You answered: $q[1] <br> Correct answer: $ans[1]<br><br>";
echo "Question 3: Coulrophobia means fear of what?<br> You answered: $q[2] <br> Correct answer: $ans[2]<br><br>";
echo "Question 4: How many dimples are there on a regular golf ball?<br> You answered: $q[3] <br> Correct answer: $ans[3]<br><br>";
echo "Question 5: Which of the following is the longest running American animated TV show?<br> You answered: $q[4] <br> Correct answer: $ans[4]<br><br>";
for($i= 0; $i < 5; $i++){
    if($q[$i] == $ans[$i]){
        $numCorrect++;
    }
}
$percentage = ($numCorrect/5)*100;
echo "You got $numCorrect out 5 questions correct<br> That is a $percentage%";

?>
