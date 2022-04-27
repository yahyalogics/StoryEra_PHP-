<?php
session_start();

// initializing variables
$title= "";
$name    = "";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'storyera');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $name= mysqli_real_escape_string($db, $_POST['name']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $category = mysqli_real_escape_string($db, $_POST['category']);
  $filename = mysqli_real_escape_string($db, $_POST['filename']);
  
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
  
  
 

  // Finally, register user if there are no errors in the form

  	

  $query = "INSERT INTO stories (title, name, description,img,location) 
  	 VALUES('$title', '$name', '$category','$img',$location')";
  	mysqli_query($db, $query);
  
  	$_SESSION['success'] = "You are now logged in";
  	header('location: teller_dashboard.php');
 
  
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
  
   
       
        $query = "SELECT * FROM account WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: teller_dashboard.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    
  }
  
  ?>