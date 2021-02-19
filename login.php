<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link href="img/LOGO 3.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trial.css">
  </head>
  <body>
    <section>
      <div class="container">
        <div class="user signinBx">
          <div class="imgBx">
            <div class="box"><header style="font-size: 30px; color:#ffd700; margin-top: 50%; text-align: center; font-family: Gloucester MT Extra Condensed;">Covid-19 Assistance and Monitoring Desk</header>
            </div>
          </div>
          <div class="formBx">
            <form action="includes/login.inc.php" method="post">
              <h1><img src="img/LOGO 3.png" width="50" height="40" alt="LOGO" ></h1>
              <h2>Admin Login</h2>
              <input type="text" name="username" placeholder="Username/Email" required/>
              <input type="password" name="password" placeholder="Password" required/>
              <input type="submit" name="login" value="Login" />
              
            <!-- errors will appear on the form -->  
              <?php
              if (isset($_GET["error"])) {
                  if ($_GET["error"] == "emptyinput") {
                    echo '<span style="color: black; font-size: 12px; font-family: Poppins; 
                    color: #806c00; margin-left: 20px; letter-spacing: 1px;">FILL IN ALL FIELDS!';
                  }
                  else if ($_GET["error"] == "wronglogin") {
                    echo '<span style="color: black; font-size: 10px; font-family: Poppins; 
                    color: #806c00; margin-left: 20px; letter-spacing: 1px;">INCORRECT LOGIN INFORMATION!';
                  }
              }
          ?>
              <p class="signup">
                Don't have an account ?
                <a href="../Assist-Desk/signup.php">SIGN UP.</a>
              </p> 
            </form>
          </div>
        </div>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/LOGIN.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </section>

    
  </body>
</html>