<!--

//Questions:



1. Create a file called exercisethree.php in your working files

2. Read the following sentence carefully

    You got contacted by a senior manager from Virtualines.com and he wants the following to be set up for his company's online backend management system.
    
    He wants to process the following data which comes in via a form on the customerqueries.php (same page as form)
       
        a. username    b. secretword   c. email     d. age   e. fullname   f. address   g. customer complaint
    
    
    i. Create a class with the above as properties
    
    ii. Create a method that executes automatically with a welcome message that has the fullname of the user
    
    iii. Create a method that validates the secretword is not less than 8 characters
    
    iv. Extend your class to another class and call your secretword method
    
    v. Create a method that will display the user queries to the support team inside the childs class
    
    vi. Call all your methods 
    
    
Nb. He wants all the functions to display error and success messages containing the values from the form within their respective statement when possible and for now, he wants you to assume or use static values.
-->

<?php

// i. Create a class with the above as properties

class Customers {

//Properties : public  private  protected


    static public $username            = "jambo";
    public $secretword                 = "password1234";
    public $email                      = "jambo@jambo.com";
    public $age                        = 37;
    public $fullName                   = "James Boden";
    public $address                    = "England";
    public $customerComplaint          = "My credit card was charged twice.";
    static public $minSecretWord       = 8;


// ii. Create a method that executes automatically with a welcome message that has the fullname of the user

    public function __construct(){

        if($this->fullName){

        echo "Hi " . $this->fullName . " , My name is Jimmy, Welcome to Customer Support <br></br>";

        }else{

        return false;
        
        }
    }


// iii. Create a method that validates the secretword is not less than 8 characters

static public function validateSecretWord($typedSecretWord){

    $countedTypedSecretWord = strlen($typedSecretWord);

    //scope resolution operator :: for static prop/methods
    
        if($countedTypedSecretWord >= self::$minSecretWord){

            echo "Thank you for verifying your secret word " . self::$username . " ";
        
        }else{
        
            echo "Sorry " . self::$username . ", we could not verify your identity. Your entered secret word '" . $typedSecretWord . "' is less than 8 characters. <br>";
        }
    }    

} //end of Customer class


// iv. Extend your class to another class (child class) and call your secretword method

class customerInformation extends Customers{

    public function callingSecretWordValidation() {

        // Declaring static variable for the typedSecretWord
        $typedSecretWord = $this->secretword;

        parent::validateSecretWord($typedSecretWord);
    }



// v. Create a method that will display the user queries to the support team inside the childs class
    
public function displayReport(){
        
    if($this->email){
        
        echo "<br><br>";
        
        echo "Dear Support team, <br><br> You have got an incoming query report from " . $this->fullName . " Here are the detials: <br> <br> Email: " . $this->email . " <br><br> Age: " . $this->age . " <br><br> Customer Complaint: " . $this->customerComplaint . "<br><br> Address cannot be disclosed at this moment.  ";
        
    }else{
        echo "<br><br>";
            
        echo " Congratulations Support Team, No customer complaints today";
    }
    
}

} //end of Child class



// vi. Call all your methods

// Instantiating the parent class
$customerQuery = new Customers;

// Declaring static variable for entered secret word
$typedSecretWord = $customerQuery->secretword;

Customers::validateSecretWord($typedSecretWord);

//Instatiating the child class
$cus_query_report = new customerInformation;

//Calling the method in the child class that called the secretwordvalidation method in the parent class
$cus_query_report->callingSecretWordValidation();


//Calling displayreport method from the childs class, solution for vi
$cus_query_report->displayReport();


?>