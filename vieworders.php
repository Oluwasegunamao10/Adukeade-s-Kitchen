<?php
session_start();
ob_start();
//include "classes/DBConnect.php";
require_once('classes/DBConnect.php');
//include_once('classes/DBConnect.php');
//include "classes/Orders.php";
require_once('classes/Orders.php');
// include_once('classes/Orders.php');
$order = new Orders();
$allOrders = $order->getAllOrders();
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



    <main>
        <h1 class="yeah">Restaurant Orders</h1>
        <div class="order-list">
            <div class="order-item">
                <?php foreach ($allOrders as $key => $order) {
                    $no = $key + 1;
                    ?>
                    <h2>Order
                        <?= $no ?>
                    </h2>
                    <?php
                    $fullName = htmlentities($order['fullname'], ENT_QUOTES, "UTF-8");
                    ?>
                    <div><span class="fatSpan">Full Name:</span> <span>
                            <?= $fullName ?>
                        </span></div>
                    <?php
                    $mealOrdered = htmlentities($order['meal_ordered'], ENT_QUOTES, "UTF-8");
                    ?>
                    <div><span class="fatSpan">Meal Ordered:</span> <span>
                            <?= $mealOrdered ?>
                        </span></div>
                    <?php
                    $address = htmlentities($order['cus_address'], ENT_QUOTES, "UTF-8");
                    ?>
                    <div><span class="fatSpan">Address:</span> <span>
                            <?= $address ?>
                        </span></div>
                    <?php
                    $email = htmlentities($order['email'], ENT_QUOTES, "UTF-8");
                    ?>
                    <div><span class="fatSpan">Email:</span> <span>
                            <?= $email ?>
                        </span></div>
                    <?php
                    $orderDt = htmlentities($order['order_date'], ENT_QUOTES, "UTF-8");
                    ?>
                    <div><span class="fatSpan">Date:</span> <span>
                            <?= $orderDt ?>
                        </span></div>
                    <?php
                } ?>
            </div>



            <!-- Add more order items as needed -->

        </div>
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