<?php
if (!empty($_POST["send"])) {
    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $conn    = mysqli_connect("localhost", "wang", "hacker", "contactform_database") or die("Connection Error: " . mysqli_error($conn));
    $stmt    = $conn->prepare("INSERT INTO tblcontact (user_name, user_email, subject,content) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();
    $message = "Your contact information is saved successfully.";
    $type    = "success";
    $stmt->close();
    $conn->close();
}
require_once "contact.html";
