<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
  <link rel="stylesheet" href="css/new.css">
  </head>
  <body class="good">
    <div class="center">
      <form class="form" id="form" action="./processlogin.php">
        <h1>Log in</h1>
        <div class="input-control">
          <label for="username">Username</label>
          <input id="username" name="username" type="text" />
          <div class="error"></div>
        </div><br>

        <div class="input-control">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" />
          <div class="error"></div>
        </div><br>
        
        <button id="btn2" type="submit">Log in</button>
      </form>
    </div>
    <script src="login.js"></script>
  </body>
</html>
