<html lang="en">

<head>
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
   <link rel="stylesheet" href="signup.css">
</head>

<body class="good">
  <div class="center">
    <form class="form" id="form" action="./processsignup.php" method="POST">
      <h1>Registration</h1><br>
      <div class="input-control">
        <label for="username">Username:</label><br>
        <input id="username" name="username" class="form-control" required type="text" />
        <div class="error"></div>
      </div><br>

      <div class="input-control">
        <label for="email">Email:</label><br>
        <input id="email" name="email" class="form-control" required type="text" />
        <div class="error"></div>
      </div><br>

      <div class="input-control">
        <label for="password">Password:</label><br>
        <input id="password" name="password" class="form-control" required type="password" />
        <div class="error"></div>
      </div><br>

      <div class="input-control">
        <label for="password2">Confirm Password:</label><br>
        <input id="password2" name="password2" class="form-control" required type="password" />
        <div class="error"></div>
      </div><br>

      <button id="btn1" type="submit">Sign Up</button>
    </form>
  </div>
  <script src="signup.js"></script>
</body>

</html>