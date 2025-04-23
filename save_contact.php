<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST["fullname"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Format the data
    $data = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message\n-------------------------\n";

    // Save to text file
    file_put_contents("messages.txt", $data, FILE_APPEND);

    // Thank you message
    echo "<h2>Thank you! Your message has been saved.</h2>";
}
?>
