<?php
include "classes/Log_Errors.php";


class Users
{

    //put your code here
    private $conn;

    public function __Construct()
    {
        $this->conn = DBConnect::dbConnectt();
        // echo "Constructor successfully called "."<br>";
    }
    public function saveUsers($username, $email, $password)
    {
        // echo "Inside registered user function "."<br>";
        try {
            $sql = "INSERT into users (Username,email,passwordd,regdate) 
            VALUES (:Username,:email,:passwordd, NOW())";
            //prepare query
            $q = $this->conn->prepare($sql);
            //execute query
            $q->execute(array(':Username' => $username, ':email' => $email, ':passwordd' => $password));
            // echo "Insertion sucessfully done "."<br>";
        } catch (PDOexception $e) {
            Log_Errors::Log_DBerror_msg($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
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


    protected function checkIfUserExistInDb($username)
    {
        try {
            $sql = "SELECT Username from users WHERE Username = :username";
            $q = $this->conn->prepare($sql);
            $q->bindValue(':username', $username, PDO::PARAM_STR);
            $q->execute();
            $q->bindColumn(1, $user_name);
            $q->fetch();
            //if record exist
            if (!$user_name) {
                return FALSE;
            } else { //else
                return TRUE;
            } //End if
        } catch (PDOexception $e) {
            echo $e->getMessage() . $e->getCode() . $e->getFile() . $e->getLine();
            exit;
            Log_Errors::Log_DBerror_msg($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
            //print user friendly message
            session_unset();
            session_destroy();
            $errorno = 'Congrats, you have successfully registered. You may now login';
            header("location: http://localhost/AgricExtensionApp/?errno=$errorno");
            exit;
        }
    }
    public function loginUser($username, $password)
    {
        $userExist = $this->checkIfUserExistInDb($username);
        if ($userExist) {
            try {
                $sql = "SELECT passwordd FROM users WHERE username=:Username";
                $q = $this->conn->prepare($sql);
                $q->bindValue(':Username', $username, PDO::PARAM_STR);
                $q->execute();
                $db_password = ''; //initialize $db_password
                $q->bindColumn(1, $db_password);
                $q->fetch();
                $password = hash('sha256', $password);
                if ($password == $db_password) {
                    //return TRUE;
                    $_SESSION['username'] = $username;
                    header("Location: http://localhost/Adukeade/?msp=You are now logged in as " . $username);
                    exit;
                } else { //else
                    //return FALSE;
                    header("Location: http://localhost/Adukeade/?msp=The Login credentials you entered are not correct");
                    exit;
                } //End if
            } catch (PDOException $e) {
                Log_Errors::Log_DBerror_msg($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
                $errorno = rawurlencode('4');
                include '/includes/error_occurred_in_the_system.php';
            }
        } else {
            header("Location: http://localhost/Adukeade/?msp=The username does not exits on this platform");
            exit;
        }
    }
}
?>