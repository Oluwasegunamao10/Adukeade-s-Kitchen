<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullnameErr = $emailErr = $addressErr = $cityErr = $stateErr = $zipcodeErr = $name_1Err = $numberErr = $CardnameErr = $number_1Err = $number_2Err = "";


    if (empty($_POST["fullname"])) {
        $fullnameErr = "Name is required";
    } else {
        $fullname = test_input($_POST["fullname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname)) {
            $fullnameErr = "Only letters and white space allowed";
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
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
        if (!preg_match('/^[a-z0-9 .\-]*$/i', $address)) {
            $addressErr = "Invalid address";
        }
    }
    if (empty($_POST["city"])) {
        $cityErr = "City is required";
    } else {
        $city = test_input($_POST["city"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $city)) {
            $cityErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["state"])) {
        $stateErr = "State is required";
    } else {
        $state = test_input($_POST["state"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $state)) {
            $stateErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["zipcode"])) {
        $zipcodeErr = "Zipcode is required";
    } else {
        $zipcode = test_input($_POST["zipcode"]);
        if (!preg_match('/^\d+$/', $zipcode)) {
            $zipcodeErr = "zip";
        }
    }
    if (empty($_POST["Cardname"])) {
        $CardnameErr = "Cardname is required";
    } else {
        $Cardname = test_input($_POST["Cardname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $Cardname)) {
            $CardnameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["number"])) {
        $numberErr = "Card number is required";
    } else {
        $number = test_input($_POST["number"]);
        if (!preg_match('/^\d+$/', $number)) {
            $numberErr = "Please input card number";
        }
    }
    if (empty($_POST["name_1"])) {
        $name_1Err = "Name is required";
    } else {
        $name_1 = test_input($_POST["name_1"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name_1)) {
            $name_1Err = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["number_1"])) {
        $number_1Err = "Number is required";
    } else {
        $number_1 = test_input($_POST["number_1"]);
        if (!preg_match('/^\d+$/', $number_1)) {
            $number_1Err = "year";
        }
    }
    if (empty($_POST["number_2"])) {
        $number_2Err = "Number is required";
    } else {
        $number_2 = test_input($_POST["number_2"]);
        if (!preg_match('/^\d+$/', $number_2)) {
            $number_2Err = "cvv";
        }
    }

    if ($fullnameErr == "" && $emailErr == "" && $addressErr == "" && $cityErr == "" && $stateErr == "" && $zipcodeErr == "" && $name_1Err == "" && $numberErr == "" && $CardnameErr == "" && $number_1Err == "" && $number_2Err == "") {
        echo 'Full name: ' . $_POST["fullname"] . "<br>";
        echo 'Email: ' . $_POST["email"] . "<br>";
        echo 'Address: ' . $_POST["address"] . "<br>";
        echo 'City: ' . $_POST["city"] . "<br>";
        echo 'State: ' . $_POST["state"] . "<br>";
        echo 'Zip code: ' . $_POST["zipcode"] . "<br>";
        echo 'Card name: ' . $_POST["Cardname"] . "<br>";
        echo 'Card number: ' . $_POST["number"] . "<br>";
        echo 'Month: ' . $_POST["name_1"] . "<br>";
        echo 'Year: ' . $_POST["number_1"] . "<br>";
        echo 'Cvv: ' . $_POST["number_2"] . "<br>";
        echo "Processing";
        exit;
    } else {
        echo $fullnameErr . "<br>";
        echo $emailErr . "<br>";
        echo $addressErr . "<br>";
        echo $cityErr . "<br>";
        echo $stateErr . "<br>";
        echo $zipcodeErr . "<br>";
        echo $CardnameErr . "<br>";
        echo $numberErr . "<br>";
        echo $name_1Err . "<br>";
        echo $number_1Err . "<br>";
        echo $number_2Err . "<br>";
        echo "invalid form input" . "</br>";
        exit;
    }
} else {
    echo "You may be unauthorized to view this resource";
    exit;
}
?>