<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "athina.stewart@gmail.com"; // Replace with your email address
    $subject = "New Form Submission from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
