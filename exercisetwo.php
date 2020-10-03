<!--//Questions:

1. Create a file called exercisetwo.php in your working files

2. Read the following sentence carefully

    You got contacted by a senior manager from Virtualines.com and he wants the following to be set up for his company's online backend management system.
    
    He wants to process the following data which comes in via a form on the customerqueries.php (same page as form)
       
        a, username    b. secretword   c. email     d. age   e. fullname   f. address   g. customer complaint
    
    
    i. He wants these data securely collected and wants to know which super global variables that you will be using
    
    ii. He wants all the data to be validated and sanitized before they are passed to the processcustomerquery() for processing
    
    iii. He wants to keep the customer username and email throughtout the duration of the application until they sign out to avoid creating more functions that will fetch for the username and email all the time
    
    iv. He wants you to create a fucntion that will verify the minimum secretword length (8) before it's passed to a function for processing
    
    v. He wants you to keep all the data coming in from the form in a variable and write a function that will display all the data to the support team on request 
    
Nb. He wants all the functions to display error and success messages containing the values from the form within their respective statement when possible and for now, he wants you to assume or use static values.
-->

//Solutions

<br><br>

<?php

session_start();


// 2. Collect variables and use static values

// if coming in from a form use > $raw_username     = trim($_POST['username']);

$raw_username               = "jambo";

$raw_secretword             = "villa";

$raw_email                  = "jbobby@gmail.com";

$raw_age                    = "37";

$raw_fullname               = "James Boden";

$raw_address                = "Boston";

$raw_customer_complaint     = "My credit card declined";


// 2.i Display Super globals

//$_SERVER[PHP_SELF];

//$_SERVER[REQUEST_METHOD] "POST";

//$_POST;


// 2.ii data to be validated and sanitized before they are passed to the processcustomerquery() for processing


$clean_username               = filter_var($raw_username, FILTER_SANITIZE_STRING);

$clean_secretword             = filter_var($raw_secretword, FILTER_SANITIZE_STRING);

$clean_email                  = filter_var($raw_email, FILTER_VALIDATE_EMAIL);

$clean_age                    = filter_var($raw_age, FILTER_VALIDATE_INT);

$clean_fullname               = filter_var($raw_fullname, FILTER_SANITIZE_STRING);

$clean_address                = filter_var($raw_address, FILTER_SANITIZE_STRING);

$clean_customer_complaint     = filter_var($raw_customer_complaint, FILTER_SANITIZE_STRING);


// 2.iii keep the customer username and email throughtout the duration of the application until they sign out

$_SESSION['customer_info'] = array(

    'username' => $clean_username,
    'email' => $clean_email
);

echo "Session username is " . $_SESSION['customer_info']['username'] . "<br> Email is " . $_SESSION['customer_info']['email'] ;

echo "<br><br>";


// 2.iv create a function that will verify the minimum secretword length (8) before it's passed to a function

function minsecretword($clean_secretword){

    $counted_secretword = strlen($clean_secretword);

    if($counted_secretword >= 8){

        echo "Your Secret Word is: '" . $clean_secretword . "' and it is correct";
    
    }else{
        
        echo "Your Secret Word '" . $clean_secretword . "' cannot be less than 8 characters";
    }

}  


// calling minsecretword function

    minsecretword($clean_secretword);

    echo "<br><br>";


// 2.v keep all the data coming in from the form in a variable and write a function that will display all the data    

$all_customers_data = array(

    'userName'          =>  $clean_username,

    'secretWord'        =>  $clean_secretword,
    
    'userEmail'         =>  $clean_email,
    
    'userAge'           => $clean_age,
    
    'userFullName'      => $clean_fullname,
    
    'userAddress'       => $clean_address,
    
    'userComplaint'     => $clean_customer_complaint

    );
    
    function display_all_customers($all_customers_data){

        echo "Hi Support Team, this query was just received: <br><br>";

        foreach($all_customers_data as $customer_data){

            echo $customer_data . "<br>";

        }
    }

    //Calling display all customers function
    display_all_customers($all_customers_data);


?>