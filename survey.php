<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Covid-19 Assistance & Monitoring Desk</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/LOGO 3.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <img src="assets/img/logo-header-white.png" alt="San Juan Logo" class="logo"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a style="font-size: 20px; color: #ffc451; text-align: center;">Covid-19 Assistance and Monitoring Desk</a></li>

      </nav><!-- .nav-menu -->

      <a href="includes/logout.inc.php" class="get-started-btn scrollto" style="color: #ffc451">Close</a>

    </div>
  </header><!-- End Header -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        
        <br><br><br>
        <div class="section-title">
          <h2>Survey</h2>
          <p>Fill-up the Form</p>
        </div>

      <div class="surveybg"></div>
    <div class="surveyform">
        <form>
            <div class="form-group">
                <label> LAST NAME </label>
                <input type="text" class = "form-control" placeholder="Add Name">
            </div>
            <div class="form-group">
                <label> FIRST NAME </label>
                <input type="text" class = "form-control" placeholder="Add Name">
            </div>
            <div class="form-group">
                <label> MIDDLE INITIAL </label>
                <input type="text" class = "form-control" placeholder="Add Name">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select>
                </div>

            <div class="form-group">
                <label> AGE </label>
                <input type="text" class = "form-control" placeholder="Add Age">
            </div>
            <div class="form-group">
                <label> EMAIL </label>
                <input type="text" class = "form-control" placeholder="Add Email">
            </div>
            <div class="form-group">
                <label> CONTACT NO. </label>
                <input type="text" class = "form-control" placeholder="Add Contact">
            </div>
            <div class="form-group">
                <label> HOUSE NO. </label>
                <input type="text" class = "form-control" placeholder="Add House No.">
            </div>
            <div class="form-group">
                <label> STREET </label>
                <input type="text" class = "form-control" placeholder="Add Street">
            </div>
            </div>
            <div class="form-group">
                <label>BARANGAY</label>
                <select class="form-control">
                <option value="ADDITION HILLS">ADDITION HILLS</option>
                <option value="BALONG-BATO">BALONG-BATO</option>
                <option value="BATIS">BATIS</option>
                <option value="CORAZON">CORAZON</option>
                <option value="ERMITANO">ERMITANO</option>
                <option value="GREENHILLS">GREENHILLS</option>
                <option value="ISABELITA">ISABELITA</option>
                <option value="KABAYANAN">KABAYANAN</option>
                <option value="LITTLE BAGUIO">LITTLE BAGUIO</option>
                <option value="MAYTUNAS">MAYTUNAS</option>
                <option value="PASADENA">PASADENA</option>
                <option value="PEDRO CRUZ">PEDRO CRUZ</option>
                <option value="PROGRES">PROGRESO</option>
                <option value="RIVERA">RIVERA</option>
                <option value="SALAPAN">SALAPAN</option>
                <option value="SAN PERFECTO">SAN PERFECTO</option>
                <option value="ST.JOSEPH">ST.JOSEPH</option>
                <option value="STA.LUCIA">STA.LUCIA</option>
                <option value="TIBAGAN">TIBAGAN</option>
                <option value="WEST CRAME">WEST CRAME</option>
                </select>
                </div>

            <div class="form-group">
                <label>CIVIL STATUS</label>
                <select class="form-control">
                <option value="Single">SINGLE</option>
                <option value="Married">MARRIED</option>
                <option value="Separated">SEPARATED</option>
                <option value="Widowed">WIDOWED</option>
                </select>
                </div>

</div>

<form>          
<p>In the last 14 days, have you had close contact with or cared for someone currently diagnosed with COVID-19 or people under PUI (“Patient Under Investigation”)?</p>
<label class="container">Yes
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">No
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
</div>
</form>
       <form>
<p>In the last 14 days, have you experienced any cold or flu-like symptoms (to include fever, cough, shortness of breath or difficulty breathing, sore throat, pressure in the chest, extreme fatigue, earache, persistent headache, diarrhea, vomiting, muscle pain, chills, repeated shaking with chills, and persistent loss of smell or taste)?</p>
<label class="container">Yes
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">No
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
</form>


       <form>
<p>Have you been outside the country?</p>
<label class="container">Yes
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">No
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
</div>
</form>

        </form>

        <form>
<p>Are you Pregnant/ planning to be pregnant within this month?</p>
<label class="container">Yes
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">No
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
</div>
</form>

        </form>
        <form>
<p>Do you have any underlying health condition?</p>
<label class="container">Yes
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">No
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
</div>
</form>

        </form>

        <form>
<p>Terms and Conditions
1. The information provided is certified as TRUE and CORRECT.
2. Registrants should not create multiple FALSE RESIDENCY AND HOUSEHOLD MEMBERS

Data Privacy
I hereby agree that all Personal Data (as defined under the Data Privacy Law of 2012 and its implementing rules and regulations), customer data and account or transaction information or records (collectively, the "information") which may be with City Government from time to time relating to us may be processed, profiled or shared to requesting parties or for the purpose of any court, legal process, examination, inquiry, audit or investigation of any Authority. The aforesaid terms shall apply notwithstanding any applicable non-disclosure agreement. We acknowledge that such information may be processed or profiled by or shared with jurisdictions which do not have strict data protection or data privacy laws.

</p>
<label class="container">Yes
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">No
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
</div>
</form>

<form action="includes/dbh.inc.php" method="post">
  <input type="submit" name="submit" value="Submit"/>
</form>

    </div>
    </section><!-- End Contact Section -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>