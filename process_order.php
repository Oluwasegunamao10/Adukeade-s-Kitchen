<?php
include "classes/DBConnect.php";
include "classes/Orders.php";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullnameErr = $emailErr = $addressErr = $cityErr = $stateErr = $zipcodeErr = $exp_monthErr = $card_numberErr = $CardnameErr = $exp_yearErr = $CVVErr = $itemNamesErr = "";


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
    if (empty($_POST["card_number"])) {
        $card_numberErr = "Card number is required";
    } else {
        $card_number = test_input($_POST["card_number"]);
        if (!preg_match('/^\d+$/', $card_number)) {
            $card_numberErr = "Please input card number";
        }
    }
    if (empty($_POST["exp_month"])) {
        $exp_monthErr = "input month on card";
    } else {
        $exp_month = test_input($_POST["exp_month"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $exp_month)) {
            $exp_monthErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["exp_year"])) {
        $exp_yearErr = "Input year on card";
    } else {
        $exp_year = test_input($_POST["exp_year"]);
        if (!preg_match('/^\d+$/', $exp_year)) {
            $exp_yearErr = "expiry year required";
        }
    }
    if (empty($_POST["CVV"])) {
        $CVVErr = "Number is required";
    } else {
        $CVV = test_input($_POST["CVV"]);
        if (!preg_match('/^\d+$/', $CVV)) {
            $CVVErr = "cvv required";
        }
    }
    if (empty(var_dump($_POST)["meal_ordered"])) {
        $itemNamesErr = "Please select a meal";
    } else {
        $itemNames = test_input($_POST["meal_ordered"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $itemNames)) {
            $itemNamesErr = "meal required";
        }
    }

    if ($fullnameErr == "" && $emailErr == "" && $addressErr == "" && $cityErr == "" && $stateErr == "" && $zipcodeErr == "" && $exp_monthErr == "" && $card_numberErr == "" && $CardnameErr == "" && $exp_yearErr == "" && $CVVErr == "" && $itemNamesErr == "") {
        // echo 'Full name: '.$_POST["fullname"]."<br>";
        // echo 'Email: '.$_POST["email"]."<br>";
        // echo 'Address: '.$_POST["address"]."<br>";
        // echo 'City: '.$_POST["city"]."<br>";
        // echo 'State: '.$_POST["state"]."<br>";
        // echo 'Zip code: '.$_POST["zipcode"]."<br>";
        // echo 'Card name: '.$_POST["Cardname"]."<br>";
        // echo 'Card number: '.$_POST["card_number"]."<br>";
        // echo 'Month: '.$_POST["exp_month"]."<br>";
        // echo 'Year: '.$_POST["exp_year"]."<br>";
        // echo 'Cvv: '.$_POST["CVV"]."<br>";
        // echo "Processing"."<br>";
        // DBConnect::dbConnectt();
        $order = new Orders;
        $order->saveOrder($fullname, $email, $address, $city, $state, $zipcode, $Cardname, $card_number, $exp_month, $exp_year, $CVV, $itemNames);
        echo "Data is inserted into DB" . "</br>";
        exit;
        // exit;  
    } else {
        echo $fullnameErr . "<br>";
        echo $emailErr . "<br>";
        echo $addressErr . "<br>";
        echo $cityErr . "<br>";
        echo $stateErr . "<br>";
        echo $zipcodeErr . "<br>";
        echo $CardnameErr . "<br>";
        echo $card_numberErr . "<br>";
        echo $exp_monthErr . "<br>";
        echo $exp_yearErr . "<br>";
        echo $CVVErr . "<br>";
        echo $itemNamesErr . "<br>";
        echo "invalid form input" . "</br>";
        exit;
    }
} else {
    echo "You may be unauthorized to view this resource";
    exit;
}
?>