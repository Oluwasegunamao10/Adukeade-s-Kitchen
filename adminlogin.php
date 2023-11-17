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
    <title>Admin</title>
</head>

<body class="good">

    <div class="center">
        <form class="form" method="post" action="process_order.php">

            <label for="name">Name:</label>
            <input type="text" name="name" required><br>




            <label for="password">Password:</label>
            <input type="Password" name="Password" required><br>


            <!-- Submit Button -->
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            ;
            $pasword = $_POST["Password"];

            // Validation for required fields
            $errors = array();

            if (empty($name)) {
                $errors[] = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $errors = "Only letters and white space allowed";
                }


                if (empty($password)) {
                    $errors[] = "Password and time is required";
                }


                if (empty($errors)) {
                    // Data is valid, you can proceed with further processing
                    // Insert into the database or send an email, etc.
                } else {
                    // Display error messages
                    foreach ($errors as $error) {
                        echo $error . "<br>";
                    }
                }
            }
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
    </div>
</body>

</html>