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
  <title>Customers MySQL Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


    <br><br><br>

    <div id="greetings" class="well well-sm text-center"></div>

  <h2>Customers</h2>
  <p><p>            
  <table class="table table-bordered table table-hover">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Password</th>
        <th>Email</th>
        <th>Spending Amount</th>
        <th>Edit User</th>
      </tr>
    </thead>
    <tbody>

<?php
include('pdocon.php');

    $db = new Pdocon;
    
    $db->query("SELECT * FROM users");

    $results = $db->fetchMultiple();

    foreach($results as $result) : ?>

      <tr>
        <td> <?php echo $result['full_name'] ?> </td>
        <td> <?php echo $result['password'] ?> </td>
        <td> <?php echo $result['email'] ?> </td>
        <td> <?php echo $result['spending_amt'] ?> </td>
        <td> <a class="btn btn-primary" href="updateuser.php?user_id=<?php echo $result['id'] ?>">Edit</a> </td>

    
<?php  endforeach ; ?>

      </tr>
    </tbody>
  </table>
</div>


<div class="container">
  <h2>New Customer Input form</h2>
  <form method="post" class="form-horizontal" id="insertdata" role="form" action="processajax.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Name:</label>
      <div class="col-sm-10">
        <input type="fullname" class="form-control" id="fullname" placeholder="Enter Full Name" name="fullname">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="accept" value="Accept"> Accept</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>



<?php 

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            // collect value of input field name
            $raw_email          =   trim($_POST['email']);
            $raw_password       =   trim($_POST['password']);
            $raw_fullname       =   trim($_POST['fullname']);
            $raw_accept         =   trim($_POST['accept']);

            //Validating values
            $c_email             = filter_var($raw_email, FILTER_VALIDATE_EMAIL);
            $c_password          = filter_var($raw_password, FILTER_SANITIZE_STRING);
            $c_fullname          = filter_var($raw_fullname, FILTER_SANITIZE_STRING);
            $c_accept            = filter_var($raw_accept, FILTER_SANITIZE_STRING);


           if(isset($_POST['submit'])){

            $db->query("INSERT INTO users (id, email, password, full_name, spending_amt) VALUES (NULL, :email, :password, :fullname, :spending) ");

            $db->bindvalue(':email', $c_email, PDO::PARAM_STR);
            $db->bindvalue(':password', $c_password, PDO::PARAM_STR);
            $db->bindvalue(':fullname', $c_fullname, PDO::PARAM_STR);
            $db->bindvalue(':spending', 500, PDO::PARAM_INT);

            $run = $db->execute();

            $db->confirm_result();

            if($run){
                echo "Your submission has been accepted";
            }else{
                echo "We were unable to complete your submission";
            }

           }

        }


?>

</body>
</html>


<!-- PDO is a class that needs to be instantiated before it can be used

the PDO class takes in some parameters

        1. It requires you to specify the type of database, ex. mysql or pgsql etc

        2. It requires your connection details, namely hostname or port number AND The database name

        3. Username, password

        4. It takes in options 

The PDO class needs to be instantiated in a public construct method if you are creating a class or a file that contains your database connection details.


Example: $connectionhandler = new PDO($dsn, $username, $password, $options);

Where $dsn (data source name) = type of database, name of host or port and name of database.

Where $option (an array variable) = that keeps set your attributes/properties, such as type or how you want your connection to be handled as if an error should occur, how you would want it to be reported. 

        Example $options = array(

            PDO::ATTR_PERSISTENT =>true;

            PDO::ATTR_ERROR      => PDO::ERRMODE_EXCEPTION;

        )

Bringing it all together:

public function __construct(){
    $dbh = new PDO($dsn, Susername, $password, $options)
}
  -->


<!--
    class PDO

     //The Prepare Method:
    public function prepare{

            This is used to prepare query statements | can be compared to mysqli_query()

            SELECT * FROM users
}

     //The Query Method:
    public function query{

            This works like the prepare and is similar to mysqli_query()
            }



     //The lastInsertedId Method:
    public function lastInsertedId {

            This returns the last inserted id from your query result

            if(lastInsertedId){

                "do this"

                }

            }

When PDO methods are executed, and are successful, they return the results as objects from the PDO Statement Class. This means that we need to use some of the methods in the PDO statement class to process the retuned results. 

-->


<!--
    PDO Statement Class

PDO Statement class defines how you want to process the result returned by the methods in the PDO class eg. post or get the data 

            class PDOStatement{
            
             //The bindValue Method
            public function bindValue($param, $value, $type){
                Takes two arguements and a type

                $dbh->prepare ("SELECT * FROM users WHERE id=:id AND email=:email");

                 bindValue(":getid", $id, PDO::PARAM_INT);
                 bindValue(":email", $$email, PDO::PARAM_STR);

            bindValue method is completed after the prepare statement has returned the results  

            }
        }
-->

<!--
             //The execute method
            public function execute{

                Go ahead and execute the query with the binded values and parameters
            }


        The execution returns true when successful and false when unsuccessful

        When true the methods then used are:

>        fetch all rows in an Assoc array - mysqli_fetch_assoc()

>        fetch a single row in an Assoc araay - mysqli_fetch_row()

>        count the number of rows - mysqli_num_rows()


        //The fetchAll method
    public function fetchAll{

        It fetches and returns all the rows in the result set from the execute method
    }

        //The fetch method
    public function fetch{

        It fetches and returns the row in the result set from the executed method
    }

        //The rowCount method
    public function rowCount{

        return the number of rows in the result set from the executed method
    }



//PDO Exception Class

>reviewed in OOP text 
>Class that has properties and methods
>used in dpconnection.php file to receive one line of clean error code 


-->

<!--

   //AJAX


   //Concept


   It is the use of XMLHttpRequest object - OOP / CLASS

   communicates with Server Side Scripts - PHP

   Returns result in HTML or text etc...


    //When is it used

    To post or load/get/request data from the server-script like PHP 


    //How its used


    //Framework

    Ajax comes from JQUERY - > Javascript - > Java


    //JQUERY AJAX Methods

JQUERY has now simplified everything by creating methods in the AJAX object. 

This means: JQUERY extended to the XMLHttpRequest() class and built on it with Methods.


Example:
JQUERY

class ajax() extends XMLHttpRequest() {

    //Properties


    //Methods on w3schools

    //$.ajax()
    Use this to fetch data from the database with the help of PHP 

    //$.post()
    Use this to send data to the database with the help of PHP 

    //$.serialize()
    This collects and encodes all form data and attach to the $.post method and send PHP for processing.


}


    //$.ajax()

    syntax

    $.ajax({name: value, name:value...});

        url:    '', - the php file that will process the data (action)
        type:   '', - the a is how you want the data to be sent (method)
        data:   '', - the values that you want to send with the request to the processing file
        success: '', - to return the results to our HTML element id on the front end


    //$.post()

    $.post(URL,data,function(data,status,xhr),datatype)

    //we can create variables that hold our url and data 
    var url         = a variable holding your urldecode
    var data        = holding your data using serialize() method 

    $.post(url,data,function(alert)){

        alert('Update Success');
    
    });

    --> 

<!-- How to use $.ajax({})it-->

<script>
$(document).ready(function(){

    $.ajax({

        url:        'processajax.php',
        type:       'POST',
        success:    function(holdresults){

            if(!holdresults.error){
                
                $('#greetings').html(holdresults);

            }
        }

    });

});

</script>



<!-- How to use $.post({})it-->

<script>

$(document).ready(function(){

    $('#insertdata').submit(function(dontRefresh){

        dontRefresh.preventDefault();

        var url     = $(this).attr("action");

        var data    = $(this).serialize();

        $.post(url,data, function(resetForm){

            $('#insertdata')[0].reset();
        });

    });

});


</script>













