<?php
session_start();

// initializing variables
$title= "";
$name    = "";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'storyera');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $name= mysqli_real_escape_string($db, $_POST['name']);
  $description= mysqli_real_escape_string($db, $_POST['description']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $category = mysqli_real_escape_string($db, $_POST['category']);
  $img = mysqli_real_escape_string($db, $_POST['filename']);
  
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  
  
 

  // Finally, register user if there are no errors in the form

  $query = "INSERT INTO stories (title, name, description, location, category, image) 
  VALUES('$title', '$name', '$description','$location',' $category', '$img')";
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