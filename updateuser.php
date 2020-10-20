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


<?php

    if(isset($_GET['user_id'])){
        
        $user_id = $_GET['user_id'];

    }
    

    include('pdocon.php');

        $db = new Pdocon;

    $db->query('SELECT * FROM users WHERE id= :userid');

    $db->bindValue(':userid', $user_id, PDO::PARAM_INT);

    $results = $db->fetchMultiple();


?>

<div class="container">
  <h2>Edit User</h2>
  <form method="post" class="form-horizontal" action="<?php $_SERVER["PHP_SELF"] ?>">
    <div class="form-group">

    <?php  foreach($results as $result)  :   ?>

      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" value="<?php echo $result['email'] ?> " placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" value="<?php echo $result['password'] ?>" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Name:</label>
      <div class="col-sm-10">
        <input type="fullname" class="form-control" id="fullname" value="<?php echo $result['full_name'] ?>" placeholder="Enter Full Name" name="fullname">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="accept" value="Accept"> Accept</label>
        </div>
      </div>
    </div>

    <?php endforeach ; ?>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="update_user" class="btn btn-default">Submit</button>
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


   if(isset($_POST['update_user'])){

    //Validating values
    $c_email             = filter_var($raw_email, FILTER_VALIDATE_EMAIL);
    $c_password          = filter_var($raw_password, FILTER_SANITIZE_STRING);
    $c_fullname          = filter_var($raw_fullname, FILTER_SANITIZE_STRING);
    $c_accept            = filter_var($raw_accept, FILTER_SANITIZE_STRING);

    $db->query("UPDATE users SET email=:email, password=:password, full_name=:fullname WHERE id=:userid");

            $db->bindvalue(':email', $c_email, PDO::PARAM_STR);
            $db->bindvalue(':password', $c_password, PDO::PARAM_STR);
            $db->bindvalue(':fullname', $c_fullname, PDO::PARAM_STR);
            $db->bindvalue(':userid', $user_id, PDO::PARAM_INT);

            $run = $db->execute();

            if($run){

                header("Location: index.php");

                echo "Update completed";

            }
   }
}



?>

</body>
</html>









