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
  </head>
  <body class="good">
    <div class="center">
      <form class="form" id="form" action="./processsignup.php">
        <h1>Registration</h1>
        <div class="input-control">
          <label for="username">Username</label>
          <input id="username" name="username" type="text" />
          <div class="error"></div>
        </div><br>

        <div class="input-control">
          <label for="email">Email</label>
          <input id="email" name="email" type="text" />
          <div class="error"></div>
        </div><br>

        <div class="input-control">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" />
          <div class="error"></div>
        </div><br>
        
        <div class="input-control">
          <label for="password2">Confirm Password</label>
          <input id="password2" name="password2" type="password" />
          <div class="error"></div>
        </div><br>

        <button id="btn1" type="submit">Sign Up</button>
      </form>
    </div>
    <script src="signup.js"></script>
  </body>
</html>
