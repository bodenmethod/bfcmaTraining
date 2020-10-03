<?php 

//session_start();

// What are variables

// Values = Text / String or Number / Int

/*
$name = "James Boden";

$age = 37;

$country = "USA";

$password = 'pinkiepie';

$minpassword = 8;


//When are they used

// When needed by calling them in forms, databases, statements, etc...


//How are they used

if(strlen($password) < $minpassword){

    echo "Password is less than minimum requirements";
} else{
    echo "Your name is " . $name . " and your password is " . $password . " and its correct, you are " . $age . " yrs old from " . $country . " " ;
}
*/

//Variable working example

/*
$win = 1;

$logged_in = 1;


if($win == 2){

    echo "I will buy a car";
}else{

    echo "You did not win so ride your bike to work";
}


if($logged_in = 2){

    header("Location: account.php");
}elseif{

    include ('login.php');
}else{

    echo "Session Expired";
}



*/

// Concepts of Arrays
/*
$users = array("James Boden", "United States", "England", 37);

$users = array("fullname" => "James Boden", "nationality" => "United States", "currentaddress" => "England", "age" => 21);

echo $users ['fullname'];
*/

//Types:
//indexed (numbers assigned to them from 0) and associative

//mulitdimensional - advanced topic

//when arrays are used

/*
EXAMPLE CODE OF PULLING DATA FROM DATABASE
$rows = msqli_fetch_array($results);

echo $rows['names'];
*/

/*
//Loops:
$users = array("fullname" => "James Boden", "nationality" => "United States", "currentaddress" => "England", "age" => 37);

//foreach

foreach($users as $user){
    echo "$user <br>";
}
*/


//Functions
/* example
function authenticateUser(){

    if($password == $formpassword){

        header("Location: myaccount.php")
    }
}

//to call function

authenticateUser(must include the arguments here/variables);
*/

//include 'exerciseone.php';



//SUPERGLOBALS



/*
$_SESSION['user_info'] = 'James Boden';

//array(
    
   // 'fullname'  => 'James Boden',
//    'email'     => 'james@james.com'

//);

echo $_SESSION['user_info'];


?>

<br><br>



<form method="get" action="<?php echo $SERVER['PHP_SELF'];?>">

Email:      <input type="text" name="email" placeholder="Enter Email">
Password:      <input type="text" name="password" placeholder="Enter Password">
Gender:      <input type="radio" name="gender" value="female">Female
             <input type="radio" name="gender" value="male">Male

<input type="submit" class="btn btn-primary">

</form>



<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php


if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // collect value of input field name
    $raw_password       =       $_GET['password'];
    $raw_email          =       trim($_GET['email']);

    $clean_email        =       filter_var($raw_email, FILTER_VALIDATE_EMAIL);


    if (($raw_password || $clean_email)) {

        echo 'Your email is ' . $clean_email . ' Please login ';

    } else {

        echo "Nothing Entered <br>";
    }
}


?>



<!--Concatenation JS example. + sign joins values together-->

<script>

var $x = 'James ';

var $y = 'Boden';

alert ($x+$y)


</script>

*/
