<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: majsterkovic@github.io';
    $to = 'majsterkovic@gmail.com';
    $email_subject = 'New Contact Form Submission!';
    $body = "Name: $name\nE-mail: $email\n\nThe message is below:\n$message";;
?>

<?php
    if (isset($_POST['submit']))
    {
        if (mail($to, $email_subject, $body, $from))
        {
            echo "<font color=\"green\"><p>Your message has been sent!</p></font>";
        }
        else
        {
        echo "<font color=\"red\"><p>Your message sending has failed! Please manually email (your email)!</p></font>";
        }
    }
?>