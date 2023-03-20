<?php

// fetch info from the AJAX call 

if(isset($_POST['username'] , $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

try {
    $conn = new PDO("mysql:host=localhost;dbname=globalbank","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM globalbank.bankaccounts WHERE userName = :username AND userPassword = :userPassword";
    $stmt = $conn->prepare($query);
    $stmt->execute(["username" => $username, "userPassword" => $password]);
    $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$fetch) {
        header("Content-Type: text/html");
        echo "Username or password are not found in database";
    }
    else {
       header("Content-Type: application/json");
       echo json_encode($fetch);
    }
} catch (PDOException $e) {
    echo "Error : " . $e->getMessage();
}
