<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Share Your story | the secrect box</title>
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
    <link rel="stylesheet" href="assets/css/Bootstrap-Callout-Success.css">
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

<body style="background-image: url(&quot;assets/img/pexels-freestocksorg-320265.jpg&quot;);background-color: rgba(255,255,255,0);">
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
    <div class="contact-clean" style="background-color: rgba(252,252,252,0);">
        <form method="post" style="background-color: rgb(5,1,21);">
            <h2 class="text-center" style="font-size: 31px;font-family: Bitter, serif;">Share your story</h2>

    <!-- Error messages -->
    <?php if(!empty($response)) {?>
    <div class="form-group col-12 text-center">
      <div class="alert text-center <?php echo $response['status']; ?>">
        <?php echo $response['message']; ?>
      </div>
    </div>
    <?php }?>
            <?php include('errors.php'); ?>
            <div class="bs-callout bs-callout-success" style="display: none;" id="success">
               <?php echo '$successmessage'; ?>
            </div>
            <div class="form-group"><input class="form-control" type="text" name="title-story"  placeholder="Title"></div>
            <div class="form-group"><textarea class="form-control" type="text" onkeypress="return blockSpecialChar(event)" ondrop="return false" onpaste="return false" name="para-story"  placeholder="Write your story here" rows="20" style="height: 172px;"></textarea></div>
 	    <div class="g-recaptcha" data-sitekey="6Lf458UbAAAAAFcqZP4Ap5rrRH6w5pE9I__5qG0X"></div>            
            <div class="form-group"><button class="btn btn-primary" name= "share-story"  type="submit" style="background-color: rgb(1,8,20);width: 100%;">POST</button></div>
        </form>
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
    </div>
<script>
function blockSpecialChar(e)
{
var k;
document.all ? k = e.keyCode : k = e.which;
return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57) || k == 190 || k == 188);
}

</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/validation.js"></script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple.js"></script>
    <script src="assets/js/PJansari-Accordion-3-Columns.js"></script>
</body>

</html>