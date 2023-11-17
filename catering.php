<!DOCTYPE html>
<html lang=”en”>

<head>
    <title>delivery</title>
    <link rel="stylesheet" href="css/new.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="icon" type="image/x-icon" href="./images/food2.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body class="good">

    <?php include 'header.php'; ?>

<div class="f"><br>
    <h1 class="yeah">MAKE AN ORDER</h1>
    <div class="center">
        <form class="form" method="post" action="process_order.php">
            <!-- Customer Information -->
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="contact">Contact Number:</label>
            <input type="text" name="contact" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <label for="address">Delivery Address:</label>
            <input type="text" name="address" required>

            <!-- Event Details -->
            <label for="event_date">Event Date and Time:</label>
            <input type="datetime-local" name="event_date" required>

            <label for="event_type">Event Type:</label>
            <input type="text" name="event_type">

            <label for="guests">Number of Guests:</label>
            <input type="number" name="guests" required>

            <!-- Menu Selection -->
            <!-- Add menu items with checkboxes or dropdowns -->

            <!-- Additional Services -->
            <!-- Checkboxes for additional services -->

            <!-- Special Requests -->
            <label for="special_requests">Special Requests:</label>
            <textarea name="special_requests" rows="4"></textarea>

            <!-- Pricing and Payment -->
            <!-- Calculate total cost based on menu and services selected -->

            <!-- Delivery or Pickup Options -->
            <!-- Date and time for delivery, pickup location -->

            <!-- Terms and Conditions -->
            <label for="terms_conditions">I agree to the Terms and Conditions</label>
            <input type="checkbox" name="terms_conditions" required>

            <!-- Submit Button -->
            <input type="submit" value="Submit Order">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $contact = $_POST["contact"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $event_date = $_POST["event_date"];
            $guests = $_POST["guests"];

            // Validation for required fields
            $errors = array();

            if (empty($name)) {
                $errors[] = "Name is required";
            }

            if (empty($contact)) {
                $errors[] = "Contact number is required";
            }

            if (empty($email)) {
                $errors[] = "Email is required";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format";
            }

            if (empty($address)) {
                $errors[] = "Delivery address is required";
            }

            if (empty($event_date)) {
                $errors[] = "Event date and time is required";
            }

            if (empty($guests) || !is_numeric($guests)) {
                $errors[] = "Number of guests is required and must be a valid number";
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
        ?>
    </div>
</div>
<footer>
        <div class="container-fluid">
            <div class="row ktb">
                <div class="col-sm-6 ktb bro">
                    <ul class="menubar">
                        <li><a class="none" href="about.php">About us</a></li>
                        <li><a class="none" href="policy.php">privacy policy</a></li>
                        <li><a class="none" href="account.php">Account</a></li>
                    </ul>
                </div>
                <div class="col-sm-6  ktb bro">
                    <h3>Contact us</h3>
                    <p>Call: 08038455244.</p>
                    <p><a class="none" href="https://wa.me/08027049019">
                            <img src="logos/whatsapp.png" class="my" width="30" height="30" alt="whatsapp" /> <span
                                class="whatsapp">08027049019</span></a></p>
                    <p><a class="none" href="https://instagram.com/adukeades?igshid=YmMyTA2M2Y=">
                            <img src="logos/ig.jpg" class="my" width="30" height="30" alt="ig" /><span
                                class="instagram">@queenadukeade1</span></a></p>
                    <p><a class="none" href="mailto:Adukeadeskitchen@gmail.com" target="_blank">
                            <img src="logos/gmail.png" class="my" width="30" height="30" alt="ig" /><span
                                class="gmail">Adukeadeskitchen@gmail.com</span></a></p>
                </div>

                <p>&copy; 2023 Restaurant Name. All rights reserved.</p>

            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src = "js/jquery-3.6.4.js" ></script>
    <script src = "js/bootstrap.bundle.js" ></script>
    <script src = "js/bootstrap.min.js" ></script>
</body>

</html>