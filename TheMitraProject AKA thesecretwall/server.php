<?php
session_start();

      

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'u428259499_tsw', 'Pandey2512', 'u428259499_thesecretwall');

   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password-repeat']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, ip) 
  			  VALUES('$username', '$email', '$password', '$ip')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: dashboard.php');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: dashboard.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

if (isset($_POST['share-story'])) {
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                // Google secret API
                $secretAPIkey = '6Lf458UbAAAAANZTteZ45IITrbN1JomkVJ7-ktNX';

                // reCAPTCHA response verification
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);

                // Decode JSON data
                $response = json_decode($verifyResponse);
                    if($response->success){

  $title = mysqli_real_escape_string($db, $_POST['title-story']);
  $para = mysqli_real_escape_string($db, $_POST['para-story']);

  function detect_sentiment($para){
      $string = urlencode($para);
      $api_key = "a3aa8a71fea9c4c4ee52cff6da90af";
      $url = 'https://api.paysify.com/sentiment?api_key='.$api_key.'&string='.$string.'';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      $response = json_decode($result,true);
      curl_close($ch);
      return $response;
      }
	  
      $data = detect_sentiment($string);
      $sentiments=$data['data']['state'];


  if (empty($title)) {
    array_push($errors, "Title is required");
  }
  if (empty($para)) {
    array_push($errors, "Story is required");
  }
  if(preg_match("/[a-zA-Z0-9.,]+/", $title))
    {

  if (count($errors) == 0) {
   $story = "INSERT INTO stories (title, para, ip, sentiments) 
          VALUES('$title', '$para', '$ip','$sentiments')";
    mysqli_query($db, $story);
header('location: success-message.html');
}
}
else array_push($errors, "Special Characters are not allowed");
}
}
else{ 
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Plese check on the reCAPTCHA box."
                );
            } 
}


if (isset($_POST['post-comment'])) {
  $comment = mysqli_real_escape_string($db, $_POST['comment']);
  $storyid = $_SESSION['storyId'];

  if (empty($comment)) {
    array_push($errors, "Comment is required");
  }
  if(preg_match("/[a-zA-Z0-9.,]+/", $comment))
    {

  if (count($errors) == 0) {
   $commentpush = "INSERT INTO comments (body, storyid, ip) 
          VALUES('$comment', '$storyid', '$ip')";
    mysqli_query($db, $commentpush);
	$message = "Success! Your comment posted successfully.";
}
}
else array_push($errors, "Special Characters are not allowed");

}

?>