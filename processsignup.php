<?php
session_start();
include "classes/DBConnect.php";
include "classes/Users.php";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameErr = $emailErr = $passwordErr = $password2Err = "";


    if (empty($_POST["username"])) {
        $usernameErr = "Name is required";
    } else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
            $usernameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    $password = test_input($_POST["password"]);
    if (empty($_POST["password2"])) {
        $password2Err = "Confirm your password";
    } else {
        $password2 = test_input($_POST["password2"]);
        if ($password !== $password2) {
            $password2Err = "Passwords do not match";
        }
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Enter password";
    } else {
        if (!preg_match('/^\d+$/', $password)) {
            $passwordErr = "Only numbers are allowed ";
        }
        $password = hash('sha256', $password);
    }

    if ($usernameErr == "" && $emailErr == "" && $passwordErr == "" && $password2Err == "") {
        // echo 'Username: ' . $_POST["username"] . "<br>";
        // echo 'Email: ' . $_POST["email"] . "<br>";
        // echo 'Password: ' . $_POST["password"] . "<br>";
        // echo 'Password2: ' . $_POST["password2"] . "<br>";
        // echo "Processing" . "<br>";
        // DBConnect::dbConnectt();
        // exit;
        $user = new Users;
        $user->saveUsers($username, $email, $password);
        // echo "Data is inserted into DB"."</br>";
        // exit;
        header("Location: http://localhost/Adukeade/?msp=Congrats, you are successfully registered on the platform");
        exit;
    } else {
        echo $usernameErr . "<br>";
        echo $emailErr . "<br>";
        echo $passwordErr . "<br>";
        echo $password2Err . "<br>";
        echo "invalid form input" . "</br>";
        exit;
    }
} else {
    echo "You may be unauthorized to view this resource";
    exit;
}
?>