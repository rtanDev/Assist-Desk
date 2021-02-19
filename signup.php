<!doctype html>
<html lang="en">
  <head>
    <title>Sign Up</title>
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
      <div class="user signupBx">
          <div class="formBx">
            <form action="includes/signup.inc.php" method="post">
              <h2>Create an account</h2>
              <input type="text" name="username" placeholder="Username" required/>
              <input type="email" name="email" placeholder="Email Address" required/>
              <input type="password" name="password" placeholder="Create Password" required/>
              <input type="password" name="pwdrepeat" placeholder="Confirm Password" required/>
              <input type="submit" name="signup" value="Sign Up" />

            <!-- errors will appear on the form --> 
              <?php
              if (isset($_GET["error"])) {
                  if ($_GET["error"] == "emptyinput") {
                    echo '<span style="color: black; font-size: 12px; font-family: Poppins; 
                    color: #806c00; margin-left: 20px; letter-spacing: 1px;">FILL IN ALL FIELDS!';
                  }
                  else if ($_GET["error"] == "invalidUid") {
                    echo '<span style="color: black; font-size: 10px; font-family: Poppins; 
                    color: #806c00; margin-left: 20px; letter-spacing: 1px;">CHOOSE A PROPER USERNAME!';
                  }
                  else if ($_GET["error"] == "invalidEmail") {
                    echo '<span style="color: black; font-size: 10px; font-family: Poppins; 
                    color: #806c00; margin-left: 20px; letter-spacing: 1px;">CHOOSE A PROPER EMAIL!';
                  }
                  else if ($_GET["error"] == "passwordsdontmatch") {
                    echo '<span style="color: black; font-size: 12px; font-family: Poppins; 
                    color: #806c00; margin-left: 20px; letter-spacing: 1px;">PASSWORDS DIDNT MATCH!';
                  }
                  else if ($_GET["error"] == "stmtfailed") {
                    echo '<span style="color: black; font-size: 12px; font-family: Poppins; 
                    color: #806c00; margin-left: 20px; letter-spacing: 1px;">SOMETHING WENT WRONG!';
                  }
                  else if ($_GET["error"] == "usernametaken") {
                    echo '<span style="color: black; font-size: 12px; font-family: Poppins; 
                    color: #806c00; margin-left: 20px; letter-spacing: 1px;">USERNAME ALREADY TAKEN!';
                  }
                  else if ($_GET["error"] == "none") {
                      echo '<span style="color: black; font-size: 12px; font-family: Poppins; 
                      color: #806c00; margin-left: 20px; letter-spacing: 1px;">ALREADY SIGNED UP!';
                  }
              }
          ?>

              <p class="signup">
                Already have an account ?
                <a href="../Assist-Desk/login.php">LOGIN.</a>
              </p>
            </form>
          </div>
            <div class="imgBx">
              <p style="text-align: center; font-family: Gloucester MT Extra Condensed;
              color: rgb(197, 193, 193); font-size: 17px; margin-top: 30%; margin-left: 10%; margin-right: 10%;">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

                Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  
                Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, 
                and cancer are more likely to develop serious illness.</p>              
            </div>
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