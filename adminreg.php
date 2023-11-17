<?php
$nameError = $usernameError = $emailError = $phoneError = $passwordError = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/new.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Admin registeration</title>
</head>

<body class="good">

    <div class="center">
        <form class="form" method="post" action="process.php">
            <h2>Registration Form</h2>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            <span class="error">
                <?php echo $nameError; ?>
            </span>



            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <span class="error">
                <?php echo $usernameError; ?>
            </span>


            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <span class="error">
                <?php echo $emailError; ?>
            </span>




            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" required>
            <span class="error">
                <?php echo $phoneError; ?>
            </span>




            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <span class="error">
                <?php echo $passwordError; ?>
            </span>



            <input type="submit" value="Register">


        </form>

        <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $password = $_POST["password"];

            // Name validation (at least 2 characters)
            if (strlen($name) < 2) {
                $nameError = "Name must be at least 2 characters";
            }

            // Username validation (at least 4 characters)
            if (strlen($username) < 4) {
                $usernameError = "Username must be at least 4 characters";
            }

            // Email validation
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
            }

            // Phone validation (10 digits)
            if (!preg_match("/^\d{10}$/", $phone)) {
                $phoneError = "Phone number must be 10 digits";
            }

            // Password validation (at least 8 characters, 1 uppercase, 1 lowercase, 1 number, 1 special character)
            if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&!])[A-Za-z\d@#$%^&!]{8,}$/", $password)) {
                $passwordError = "Password is not valid";
            }

            if (empty($nameError) && empty($usernameError) && empty($emailError) && empty($phoneError) && empty($passwordError)) {
                // All fields are valid, you can process the data, e.g., insert into a database.
                // After processing, you can redirect to a thank you page or back to the form.
            } else {
                // Some fields are invalid; the form will be displayed with error messages.
            }
        }
        ?>
    </div>
</body>

</html>