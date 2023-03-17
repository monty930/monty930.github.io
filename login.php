<?php
  // check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // get the username and password from the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validate the username and password (replace this with your own authentication logic)
    if ($username === 'myusername' && $password === 'mypassword') {
      // successful login, redirect to the home page
      header('Location: http://example.com/home.php');
      exit;
    } else {
      // incorrect login credentials, show an error message
      echo 'Invalid login credentials';
    }
  }
?>
