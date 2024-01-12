<?php
if (isset($_GET['orderVal'])) {
    $orderVl = (INT) $_GET['orderVal'];
}
?>
<!DOCTYPE html>
<html lang=”en”>

<head>
    <title>myorder</title>
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="order.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <main>

        <div class="f"><br>
            <h1 class="yeah">COMPLETE YOUR ORDER</h1>
        </div>

        <div class="container">

            <form action="./process_order.php" method="POST">
                <p>
                    You are about to pay:
                    <?php echo $orderVl; ?>
                </p>

                <div class="row">

                    <div class="col">


                        <h3 class="title">billing address</h3>

                        <div class="inputBox">
                            <span>full name :</span>
                            <input name="fullname" type="text" placeholder="john deo" class="form-control" required>
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input name="email" type="email" placeholder="example@example.com" class="form-control"
                                required>
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input name="address" type="text" placeholder="room - street - locality"
                                class="form-control" required>
                        </div>
                        <div class="inputBox">
                            <span>city :</span>
                            <input name="city" type="text" placeholder="mumbai" class="form-control" required>
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>state :</span>
                                <input name="state" type="text" placeholder="india" class="form-control" required>
                            </div>
                            <div class="inputBox">
                                <span>zip code :</span>
                                <input name="zipcode" type="text" placeholder="123 456" class="form-control" required>
                            </div>
                        </div>

                    </div>

                    <div class="col">

                        <h3 class="title">payment</h3>

                        <div class="inputBox">
                            <span>cards accepted :</span>
                            <img src="images/card_img.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>name on card :</span>
                            <input name="Cardname" type="text" placeholder="mr. john deo" class="form-control" required>
                        </div>
                        <div class="inputBox">
                            <span>credit card number :</span>
                            <input name="card_number" type="number" placeholder="1111-2222-3333-4444"
                                class="form-control" required>
                        </div>
                        <div class="inputBox">
                            <span>exp month :</span>
                            <input name="exp_month" type="text" placeholder="january" class="form-control" required>
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>exp year :</span>
                                <input name="exp_year" type="number" placeholder="2022" class="form-control" required>
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input name="CVV" type="number" placeholder="1234" class="form-control" required>
                            </div>
                        </div>

                    </div>

                </div>
                <p>Order Amount:</p>
                <div class="center1">
                    <input type="text" value="  $<?php echo $orderVl; ?>" readonly>

                </div>
                <input type="submit" value="Pay $<?php echo $orderVl; ?>" class="submit-btn">

            </form>

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