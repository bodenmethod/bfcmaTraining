<!--
1. Create a php file called exerciseone.php in your working-files folder

2. Read the following sentense and create about 6 variables (3 strings / 3 int values)

    A user named Kelvin Hart came to Dubai to perform on 4th April 2016. He is like 5 inches tall and I guess he is 30 years old. His show was restricted. users between the ages of 18 - 49 only could attend. users below the 17 were told to wait for their parents outside and users above 50 were asked to wait in the car.   
    
3. Create an associative array of three values for the sentense in question 2 and echo th results
    
    
4. Write one statement for the sentence in question 2 using your variables in question 2, your statement should include the following if, else and elseif 


     
5. echo out the second value in your associative array from question 3 
     



Nb. If you were able to run it without any error. You have successfully understood php basics
-->



<?php

//session_start();

/*
//variables with strings and int
$fullname = "Kelvin Hart";
$country = "Dubai";
$perfdate = "April 4th";
$height = "5 inches tall";
$age = 30;
$minage = 18;
$maxage = 49;

//associative array
$users = array("performer" => "$fullname", "country" => "$country", "age" => "$age");

//echo results
echo $users['performer'];
echo $users['country'];
echo $users['age'];

echo "<br><br>";

//if elseif else statement

function authenticateUser($age, $minage, $maxage, $fullname, $height, $country, $perfdate){

if($age < $minage){

    echo "You are too young to attend, please wait for your parents outside <br><br>";

}elseif($age > $maxage){
    echo "You are too old to attend, please wait in your car <br><br>";

}else{
    echo "Your name is " . $fullname . " and your height is " . $height . " You are " . $age . " yrs performing in " . $country . " on " . $perfdate . " <br><br>" ;
    }
}

//authenticateUser($age, $minage, $maxage, $fullname, $height, $country, $perfdate);



//echo out second value in array
echo $users['country'];

echo "<br><br>";
*/

//SESSION SUPERGLOBAL



//echo $_SESSION['user_info'];

//echo "<br>";

//echo $_SESSION['user_info']['email'];




?>