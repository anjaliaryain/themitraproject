<?php include('server.php') ?>
<?php 
   $stories_fetch = "SELECT * FROM stories ";
  $result2 = mysqli_query($db, $stories_fetch);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Share your Stories | TheSecretBox | Your Own World </title>
    <meta name="title" content="Share your Story, anonymously - thesecretwall.com ">
<meta name="description" content="Share your story with the world, anonymously, without even a second thought with no judgements and no fake sympathy. Don't let your overthinking kills you.">
<meta name="keywords" content="secret, mental health, health, mental, share, life, thesecretwall, how to, how, mental health quotes, world mental health day, mental breakdown, MBIT test, test, self awareness, stree free">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">

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
<style>
@import compass


// n is number of stars required
@function multiple-box-shadow ($n) 
  $value: '#{random(2000)}px #{random(2000)}px #FFF'
  @for $i from 2 through $n
    $value: '#{$value} , #{random(2000)}px #{random(2000)}px #FFF'

  @return unquote($value)

$shadows-small:  multiple-box-shadow(700)
$shadows-medium: multiple-box-shadow(200)
$shadows-big:    multiple-box-shadow(100)

html
  
  background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 100%)
  
    
#stars
  width: 1px
  height: 1px
  background: transparent
  box-shadow: $shadows-small
  animation			: animStar 50s linear infinite
    
  &:after
    content: " "
    position: absolute
    top: 2000px
    width: 1px
    height: 1px
    background: transparent
    box-shadow: $shadows-small
    
#stars2
  width: 2px
  height: 2px
  background: transparent
  box-shadow: $shadows-medium
  animation			: animStar 100s linear infinite
    
  &:after
    content: " "
    position: absolute
    top: 2000px
    width: 2px
    height: 2px
    background: transparent
    box-shadow: $shadows-medium
    
#stars3
  width: 3px
  height: 3px
  background: transparent
  box-shadow: $shadows-big
  animation			: animStar 150s linear infinite
    
  &:after
    content: " "
    position: absolute
    top: 2000px
    width: 3px
    height: 3px
    background: transparent
    box-shadow: $shadows-big

    
@keyframes animStar
  from	
    transform: translateY(0px)
  to		
    transform: translateY(-2000px)
    
</style>
</head>

<body >
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
<div class="container">
    <div class="row">
        <div class="col-md-6"><button class="btn btn-primary" type="button" onclick="location.href='/blog'" style="width: 100%;margin: 0px 0px 20px 0px;background-color: rgb(0,22,42);">Read @ WorthRead</button></div>
        <div class="col-md-6"><button class="btn btn-primary" type="button" onclick="location.href='share-story.php'" style="width: 100%;margin: 0px 0px 20px 0px;background-color: rgb(0,22,42);">Share Your Story</button></div>
    </div>
</div>
        <div class="container">
            <div class="row" style="margin: 0px 0px 100px 0px ;">
                <div class="col results" style="margin: 0px 0px 100px 0px ;">  //this will contain the ajax connection- "col results", where results is working as ajax specifier
                     </div>
                    
                
            </div>
            <div class="loader text-center" style="display:none; margin: 0px 0px 100px 0px ;" >
        <img src="assets/img/LoaderIcon.gif" width="70px" height="70px"> Loading more stories...
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
//This code is required to ajax api work on this page
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
            var start = 0;
            var limit = 6;
            var reachedMax = false;

            $(window).scroll(function () {
                if ($(window).scrollTop() == $(document).height() - $(window).height())
                    getData();
            });

            $(document).ready(function () {
               getData();
            });

            function getData() {
                if (reachedMax)
                    return;
                //$('.loader').show();
                $.ajax({
                   url: 'data.php',
                   method: 'POST',
                    dataType: 'text',
                   data: {
                       getData: 1,
                       start: start,
                       limit: limit
                   }, 
                   success: function(response) {
                        if (response == "reachedMax"){
                            reachedMax = true;
                            $('.loader').hide();
                        }
                        else {
                            start += limit;
                            $('.loader').show();
                            $(".results").append(response);
                            
                        }
                    }
                });
            }
        </script>
    <script>
 if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
     }).catch(function(err) {
        console.log("No it didn't. This happened:", err)
    });
 }
</script>
//end of the AJAX 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple.js"></script>
    <script src="assets/js/PJansari-Accordion-3-Columns.js"></script>
<noscript>
<center><h1>This website requires JAVASCRIPT enabled to work properly.</h1></center>
</noscript>
</body>

</html>