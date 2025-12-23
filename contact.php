<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "your@email.com"; // CHANGE THIS
  $subject = "New Portfolio Message";
  $body = "Name: $name\nEmail: $email\n\n$message";
  $headers = "From: $email";

  mail($to, $subject, $body, $headers);

  echo "Message sent successfully!";
}
?>