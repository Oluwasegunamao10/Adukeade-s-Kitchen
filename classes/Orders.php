<?php

class Orders {

    //put your code here
    private $conn;

    public function __Construct() {
        $this->conn = DBConnect::dbConnectt();
        echo "Constructor successfully called "."<br>";
    }
    public function saveOrder($fullname, $email, $address, $city, $state, $zipcode, $Cardname, $card_number, $exp_month, $exp_year, $CVV) {
        echo "Inside registered user function "."<br>";
        try {
            $sql = "INSERT into orders (fullname,email,cus_address,order_date,city,name_on_card,card_number,exp_month,order_state,zipcode, exp_year, CVV) 
            VALUES (:fullname,:email,:cus_address,NOW(),:city,:name_on_card,:card_number,:exp_month,:order_state,:zipcode,:exp_year,:CVV)";
            //prepare query
            $q = $this->conn->prepare($sql);
            //execute query
            $q->execute(array(':fullname' => $fullname, ':email' => $email, ':cus_address' => $address, ':city' => $city, ':name_on_card' => $Cardname,
                ':card_number' => $card_number, ':exp_month' => $exp_month, ':order_state' => $state, ':zipcode' => $zipcode, ':exp_year' => $exp_year, ':CVV' => $CVV));
            echo "Insertion sucessfully done "."<br>";
        } catch (PDOexception $e) {
            echo $e->getMessage().$e->getCode().$e->getFile().$e->getLine();
            exit;
            // Log_Errors::Log_DBerror_msg($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
            // exit;
            /*$errorno = 'An error might have occured in the system!';
            if (headers_sent()) {
                die("Please click on this : <a href=http://localhost/adukeade/?msp=$errorno>LINK</a>");
            } else {
                header("location: http://localhost/adukeade/?msp=$errorno");
                exit();
            }*/
        }
    }
    public function getAllOrders()
    {
        try {
            $sql = "SELECT * from orders";
            $q = $this->conn->prepare($sql);
            $q->execute(array());
            $total_records_get = $q->fetchAll();
        } catch (PDOException $e) {
            Log_Errors::Log_DBerror_msg($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
            //Redirect
            $errorno = 'An error might have occured in the System!';
            if (headers_sent()) {
                die("Please click on this : <a href=http://localhost/adukeade/index.php?errno=$errorno>LINK</a>");
            } else {
                header("location: http://localhost/AgricExtensionApp/index.php?errno=$errorno");
                exit();
            }
        }
        if (isset($total_records_get)) {
            return $total_records_get;
        }
    }


    
}
?>