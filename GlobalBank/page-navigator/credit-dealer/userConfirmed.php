<?php


// this script is made becuase of two buttons that user is forced to click
// The "Take Credit "  and "Don't Take" buttons are making ajax calls onclick
// Server will listen for a requests and provide a operations based on a POST supervariable content (name) attribute content
// This piece of script is designed additionaly to support the main script "creditBackend.php" which can be found inside this folder

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['action']) && $_POST['action'] == 'takeCredit') {
        // make a query to DB and insert a creditMax value inside of it where username is equal to $_POST['userName']
        // after it the text will be sent to the users screen and credit to his account will be claimed
        // make a PDO connection with db
        try {
            $db = new PDO("mysql:host=localhost;dbname=globalbank","root","");
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // check do user already have a credit 
            $check = creditChecker();
            if(!$check) {
                // if no credit is detected call a function to claim a credit
                claimCredit();
            } else {
                echo "<p class='m-0 p-0'>You cannot claim a credit twice.</p>";
            }
            
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    }
    if(isset($_POST['dontTakeACredit'])) {
        echo "No is clicked";
    }
}



// function to check if credit is already taken

function creditChecker() {
    global $db;
    $sql = "SELECT userCredit FROM globalbank.bankaccounts WHERE userName = :userName";
    $stmt = $db->prepare($sql);
    $stmt->execute(['userName' => $_POST['userName']]);
    $credit = $stmt->fetch(PDO::FETCH_COLUMN);
    if(!empty($credit['userCredit'])) {
        print_r($credit);
    } else {
        return $credit;
    }
}

// function to claim a credit 

function claimCredit() {
    global $db;
    $query = "UPDATE globalbank.bankaccounts 
    SET userCredit = :userCredit 
    WHERE userName = :userName";
    $stmt = $db->prepare($query);
    $stmt->execute([':userCredit' => $_POST["credit"] , "userName" => $_POST["userName"]]);
    echo "<h6 class='text-warning mt-1 mb-2'>Hooray ! You have claimed your credit ! Don't spend it too fast :) </h6><br>";
}

?>