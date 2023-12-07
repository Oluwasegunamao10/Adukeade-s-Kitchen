<?php

class DBConnect {
    public static function dbConnectt(){
        // configuration
        $dbhost = "localhost";
        $dbname = "adukeade'skitchen";
        $dbuser = "root";
        $dbpass = "";
        $conn = "";
        try {
            // database connection
            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            // Make all DB errors throw exceptions
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection is made to the Database " . $dbname . "<br>";
        } catch (PDOException $e) {
            echo $e->getMessage() . $e->getCode() . $e->getFile() . $e->getLine();exit;
            // Log_Errors::Log_DBerror_msg($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
            // $errorno = 'An error might have occurred in the System';
            // header("Location: http://localhost:8080/favystore/?msp=$errorno");
            // exit;
        }
        //return TRUE;
        return $conn;
    }
}
?>