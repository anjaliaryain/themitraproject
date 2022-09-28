<?php include('server.php') ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
  $userid=$_SESSION['username'];
  $stories_fetch = "SELECT * FROM stories WHERE username='$userid' ";
  $result1 = mysqli_query($db, $stories_fetch);
  

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>the secret box</title>
    <meta name="theme-color" content="rgb(0,0,85)">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/android-chrome-512x512.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Bottom-Resonsive-Menu.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Novos-Imveis.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple-1.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/PJansari-Accordion-3-Columns.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php include_once("analyticstracking.php") ?>
    <div class="headerResult" style="padding: 10px;background-color: rgb(0,22,42);">
        <div class="container" style="padding: 5px 15px 0px;">
            <div class="row">
                <div class="col-md-12" style="text-align: center;padding: 0;">
                    <a href="/" style="text-decoration:none; color:white;"><h1>thesecretwall.</h1></a>
                </div>
            </div>
        </div>
    </div>
    <section>
    <div class="highlight-blue" style="margin: 0px 0px 10px 0px;">
        <div class="container">
            <div class="intro">
                 <?php  if (isset($_SESSION['username'])) ; ?>
		<h2 class="text-center">Hi <?php echo $_SESSION['username']  ?>!</h2>
                <p class="text-center" style="margin: 0px 0px 10px 0px;">We hope you are doing good</p>
                <p class="text-center"> <a href="dashboard.php?logout='1'" style="color: black;"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button></a> </p>
            </div>
        </div>
    </div>
        <div class="container">
            <h1>Your Stories</h1>
            <div class="row">
            <div class="col" style="margin: 0px 0px 100px 0px; ">
            
            <?php
                   if (isset($result1)) {
                while($cards = mysqli_fetch_assoc($result1)) {

                   echo "<div class="."\"card\""."style=\"margin: 0px 0px 20px 0px ;\"".">";
                       echo "<div class=\"card-body\">";
                          echo "<h2 class=\"card-title\">";
                          echo $cards["title"];
                      echo "</h2>";
                             echo "<p class=\"card-text\">";
                          echo $cards["para"];
                      echo "</p>";
                    echo "</div>";
                echo "</div>";
            
                }
                   } else { echo "0 results"; }
             ?>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-dark navbar-expand fixed-bottom" style="background-color: #00162a;height: 55px;">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav flex-grow-1 justify-content-around" style="height: 71px;">
                    <li class="nav-item" role="presentation"><a class="nav-link active btn" href="/"><i class="material-icons" style="font-size: 30px;">home</i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active btn" href="dashboard.php"><i class="material-icons" style="font-size: 30px;">person</i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="share-story.php"><i class="material-icons" style="font-size: 30px;color: rgb(255,255,255);">add_box</i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="info.html"><i class="material-icons" style="font-size: 30px;color: rgb(255,255,255);">info</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple.js"></script>
    <script src="assets/js/PJansari-Accordion-3-Columns.js"></script>
</body>

</html>