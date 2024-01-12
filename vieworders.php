<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="vieworders.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Orders</title>
</head>

<body class="good">
    <?php include 'header.php'; ?>

    <?php
    $message = isset($_GET['msp']) ? $_GET['msp'] : '';
    $message = htmlentities($message, ENT_QUOTES, "UTF-8");
    echo $message;
    ?>

    <main>
        <h1 class="yeah">Restaurant Orders</h1>
        <ul class="order-list">
            <li class="order-item">
                <h2>Order #1</h2>
                <p><strong>Full Name:</strong> <input type="text" value="" readonly></p>
                <p><strong>Meal Ordered:</strong> <input type="text" value=" " readonly></p>
                <p><strong>Address:</strong> <input type="text" value=" " readonly></p>
                <p><strong>Email:</strong> <input type="text" value="  " readonly></p>
                <p><strong>Date:</strong> <input type="text" value="  " readonly></p>
            </li>

          

            <!-- Add more order items as needed -->

        </ul>
    </main>



    <?php include 'footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>