<?php
include("db.php");
include("server.php");

//database connection
$id=$db -> real_escape_string($_REQUEST['id']);
      $_SESSION['storyId'] = $id; 
$query="SELECT * FROM stories WHERE id='".$id."'"; 
$result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);


//fetch comments
$message = "";


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Post page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center"> <?php echo $row["title"];?></h1>
                    </div>
                    <div class="text">
                        <p><?php echo $row["para"];?></p>   
                    </div>
                    <div class="card" style="margin: 0px 0px 100px 0px;">
                        <div class="card-body">
                            <h4 class="card-title" style="margin: 0px 0px 50px 0px;">Comments</h4>
                            <form method="post">
				<?php include('errors.php'); ?>
				<?php echo $message; ?>
                                <div class="form-group"><textarea class="form-control" name="comment" placeholder="Message" rows="14" style="height: 146px;" onkeypress="return blockSpecialChar(event)"></textarea></div>
                                <div class="form-group"><button class="btn btn-primary text-center" type="submit" name="post-comment" style="background-color: #00162a;width: 140px;font-size: 20px;">POST</button></div>
                            </form>
                            <div class="col results" style="margin: 0px 0px 100px 0px ;">
                     </div>
                                
                           
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
     <script type="text/javascript">
            var start = 0;
            var limit = 6;
            var reachedMax = false;

            $(window).scroll(function () {
                if ($(window).scrollTop() == $(document).height() - $(window).height())
                    getcomment();
            });

            $(document).ready(function () {
               getcomment();
            });

            function getcomment() {
                if (reachedMax)
                    return;
                $.ajax({
                   url: 'data.php',
                   method: 'POST',
                    dataType: 'text',
                   data: {
                       getcomment: 1,
                       start: start,
                       limit: limit
                   }, 
                   success: function(response) {
                        if (response == "reachedMax"){
                            reachedMax = true;
                        }
                        else {
                            start += limit;
                            $(".results").append(response);
                            
                        }
                    }
                });
            }
        </script>
<script>
function blockSpecialChar(e)
{
var k;
document.all ? k = e.keyCode : k = e.which;
return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57) || k == 190 || k == 188);
}

</script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/validation.js"></script>
	<script src="assets/js/textarea.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>