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
*/

?>



<!--Concatenation JS example. + sign joins values together-->

<script>

//var $x = 'Welcome ';

//var $y = 'back';

//alert ($x+$y)


</script>



<?php
/*
//Objects and classes


class sellingComputer {

    //properties in the class
    $activation_key = 12222222;

    //Method
    function validate_activation($activation_key) {

        if($activation_key == 12222222){

            echo "Windows is activated";
        }
    }

}


//Properties

    $edition  = '';
    $ram      = '';
    $manufac  = '';
    $activate = 12222222;

    function checkactivaton() {

        echo "activweoknnk";

    }

    
    $lenovo = new sellingComputer
    $hp = new sellingComputer


*/


?>


//example 2

CARS


<?php

/*
class Cars{

//Properties : public  private  protected


    public $name        = "BMW";
    protected $speed    =  400;
    public $user        = "Peter";
    public $type        = "4WD";

//Methods

function desc(){

        echo "My car is " . $this->name . " and it runs at " . $this->speed . " and it is a " . $this->type . " " ;

    }

    static public function checkSpeed($check_speed){

        //scope resolution operator :: for static prop/methods
        
            if($check_speed >= self::$speed){

                echo " Your car is very fast";
            }else{
               echo " Your car is not that fast";
            }
        }    

        //Contruct methods do not have names (therefore doesn't need to be called)
        
        public function __construct(){

            echo "Hi " . $this->user . " You are welcome <br>";

        }

        //Destruct methods do not have names (also don't need to be called)

        public function __destruct(){

            echo "Goodbye " . $this->user . " ";

        }
}

class Futurecars extends Cars{

    public $type    = "Truck";
    public $name   =   "Ford";

    function descFutureCar() {

        parent::desc();
    }
}



$myFirstCar = new Cars;            //Parent class

//$myFutureCars = new Futurecars;    //Child class

//$myFutureCars->descFutureCar();    //Child Class


//$myFirstCar->desc();

//try to call outside of class
//echo $myFirstCar->name;

//$check_speed = 500;

//Cars::checkSpeed($check_speed);



call property with $this        
$this->name;
$this->speed;

call function with $this
$this->desc();
*/

?>

<?php

//Insert new user data
//include('dbconnection.php');

/*
$query = "INSERT INTO users (id, email, password, full_name, spending_amt) VALUES ('NULL','frankie@frankie.com','000000','Frankie Franks','15200')";

$run_query = mysqli_query($connection, $query);

if($run_query){
    echo "Data has been inserted into the database";
}else{
    echo "Data was not inserted into the database";
}

mysqli_close($connection);
*/


/*
//Update user data
$query_update = "UPDATE users SET full_name='Frankie Froome', email='frankie@froome.com' WHERE id=2";

$run_query = mysqli_query($connection, $query_update);

if($run_query){
    echo "Data has been updated in the database";
}else{
    echo "Data was not updated in the database";
}
*/


/*
//Selecting user data
$query_select = "SELECT * FROM users";

$run_query = mysqli_query($connection, $query_select);

$result = mysqli_fetch_array($run_query, MYSQLI_ASSOC);


if($result){
    echo $result['full_name'];
}else{
    echo "Data was not updated in the database";
}


mysqli_close($connection);
*/

//Deleting single user data
/*
$query_delete = "Delete from users WHERE id=2";

$run_query = mysqli_query($connection, $query_delete);


if($run_query){
    echo "User successfully deleted";
}else{
    echo "User was not able to be deleted";
}


//mysqli_close($connection);
*/





//Loops

// $email = "frankie@frankie.com";

// $password = "000000";


// $query_select = "SELECT * FROM users WHERE email='$email' and password='$password' ";

// $run_query = mysqli_query($connection, $query_select);

//$result = mysqli_fetch_array($run_query, MYSQLI_NUM);


// $result = mysqli_num_rows($run_query);

// if($result > 0){

//     echo "Welcome";

// }


// while ($result = mysqli_fetch_assoc($run_query)){

//     echo $result['email'];
// };



//mysqli_close($connection);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

<?php
include('dbconnection.php');

    $query = 


?>

      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
