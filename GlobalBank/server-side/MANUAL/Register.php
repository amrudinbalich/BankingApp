<?php

// String generator for creating a unique UserID

function randomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLen = strlen($characters);
    $randomString = "";
    for ($i = 0 ; $i < $length ; $i++) {
        $randomString .= $characters[random_int(0,$charLen - 1)];
    }
    return $randomString ;
}

// collect info about user and implement it's info inside DB
if(isset($_POST['username'],$_POST['password'],$_POST['email'],$_POST['credit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$creditNumber = $_POST['credit'];
$uniqueID = randomString();
$defaultBalance = 10000;
}

// check do username under that name exists already ? If exists then return a message to the frontend again and inform a user about it 
// email and credit card number are also checked here

// -------------------------------------------------------------------


// making connection with mySQL db and inserting given info



function checkUsername () {
    global $db;
    global $username;
    global $email;
    $query = "SELECT userName , userEmail FROM globalbank.bankaccounts
    WHERE userName = :userName  AND userEmail = :userEmail";
    $stmt = $db->prepare($query);
    $stmt->execute(['userName' => $username,'userEmail' => $email]);
    $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
    return $fetch;
}


function checkEmail () {
    global $db;
    global $email;
    $query = "SELECT userEmail FROM globalbank.bankaccounts
    WHERE userEmail = :userEmail";
    $stmt = $db->prepare($query);
    $stmt->execute(['userEmail' => $email]);
    $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
    return $fetch;
}

try {
    $db = new PDO("mysql:host=localhost;dbname=globalbank","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error occrued : " . $e->getMessage();
}

// querying the db 

try {
    $usernameFinder = checkUsername();
    $emailFinder =  checkEmail();
    
    // error message handlers for them
    // expecting an associative array to show up 
    if(gettype($emailFinder) == "array") {
        echo "This email is already taken\n";
    }
    if(gettype($usernameFinder) == "array") {
        echo "This username is already taken\n";
    }

    // if username and email is are not found already in db create an user account with this info
    if($usernameFinder == false && $emailFinder == false ) {
    $query = "INSERT INTO globalbank.bankaccounts (userUID,userName,userPassword,userEmail,userBalance,userCreditCard) 
    VALUES (:userUID,:userName,:userPassword,:userEmail,:userBalance,:userCreditCard)";
    $stmt = $db->prepare($query);
    $stmt->execute(['userUID' => $uniqueID , 'userName' => $username , "userPassword" => $password , "userEmail" => $email , "userBalance" => $defaultBalance ,"userCreditCard" => $creditNumber]);
    echo "Success ! Your account has been successfully created ! ";
    } 
   
} catch (PDOException $q) {
    echo "Query error occrued : " . $q->getMessage();
}















?>