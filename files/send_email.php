<?php

include_once('../database.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
  $_SESSION['messageemail'] = 'Login First';
  $_SESSION['success'] = 'danger';
  header("Location: ../login.php");
} else {
  $username = $_SESSION['username'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $mail = new PHPMailer(true);

// Email sending logic
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    try {
      //Server settings
      $mail->SMTPDebug = 0; // Enable verbose debug output (set to 2 for more detailed debug)
      $mail->isSMTP(); // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
      $mail->SMTPAuth = true; // Enable SMTP authentication
      $mail->Username = 'hiraihinata20@gmail.com'; // Your Gmail username
      $mail->Password = 'wntoqrxjlznlrszo'; // Your Gmail password
      $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587; // TCP port to connect to
      //Recipients
      $mail->setFrom($email, $fname . ' ' . $lname);
      $mail->addAddress('jhomidapinayan@gmail.com', 'Jhomida Pinay-an'); // Add a recipient
      //Content
      $mail->isHTML(true); // Set email format to HTML
      $mail->Subject = 'Client Message from ' . $username;
      $mail->Body = $message;

      $mail->send();
      $_SESSION['messageemail'] = 'Your message has been sent successfully!';
      $_SESSION['success'] = 'success';
    } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      $_SESSION['messageemail'] = 'There was a problem sending your message. Please try again later\n' . $e;
      $_SESSION['success'] = 'danger';
    }


//  // Validate and sanitize form data
//  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//  $message = htmlspecialchars($_POST['message']);
//
//  // Your email sending code goes here
//  $to = "jhomidapinayan@gmail.com"; // Replace with your email address
//  $subject = "Feedback from website";
//  $headers = "From: $email" . "\r\n" .
//          "Reply-To: $email" . "\r\n" .
//          "X-Mailer: PHP/" . phpversion();
//
//  // Send email
//  if (mail($to, $subject, $message, $headers)) {
//    // Email sent successfully
//    $_SESSION['messageemail'] = 'Your message has been sent successfully!';
//    $_SESSION['success'] = 'danger';
//  } else {
//    // Error sending email
//    $_SESSION['messageemail'] = 'There was a problem sending your message. Please try again later';
//    $_SESSION['success'] = 'danger';
//  }

    header('location: ../contact.php');
  }
}
