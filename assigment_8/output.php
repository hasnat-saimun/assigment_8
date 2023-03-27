<?php
if (isset($_POST['submit'])) {
  // Gather form data
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Validation checks
  if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "All fields are required.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email address is not valid.";
  } elseif ($password !== $confirm_password) {
    echo "Passwords do not match.";
  } else {
    // Registration successful - perform database insertion or other processing here
    echo "Registration successful.";
  }
}
?>
