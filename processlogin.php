<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usernameErr = $passwordErr = "";


    if (empty($_POST["username"])) {
        $usernameErr = "Name is required";
    } else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
            $usernameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Enter password";
    } else {
        $password = test_input($_POST["password"]);
        if (!preg_match('/^\d+$/', $password)) {
            $passwordErr = "Invalid password";
        }
    }
    if ($usernameErr == "" && $passwordErr == "") {
        echo 'Username: ' . $_POST["username"] . "<br>";
        echo 'Password: ' . $_POST["password"] . "<br>";
        echo "Processing";
        exit;
    } else {
        echo $usernameErr . "<br>";
        echo $passwordErr . "<br>";
        echo "invalid form input" . "</br>";
        exit;
    }
} else {
    echo "You may be unauthorized to view this resource";
    exit;
}
?>