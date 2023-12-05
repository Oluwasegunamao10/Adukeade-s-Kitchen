<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Validation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="signup.css">
</head>

<body class="good">
  <div class="center">
    <form class="form" id="form" action="./processlogin.php" method="POST">
      <h1>Log in</h1><br>
      <div class="input-control">
        <label for="username">Username:</label><br>
        <input id="username" name="username" class="form-control" required type="text" />
        <div class="error"></div>
      </div><br>

      <div class="input-control">
        <label for="password">Password:</label><br>
        <input id="password" name="password" class="form-control" required type="password" />
        <div class="error"></div>
      </div><br>

      <button id="btn2" type="submit">Log in</button>
    </form>
  </div>
  <script src="login.js"></script>
</body>

</html>