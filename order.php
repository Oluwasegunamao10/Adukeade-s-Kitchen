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

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456">
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
                    <input type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    

    </main>

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
                <div class="col-sm-6 ktb bro">
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
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>