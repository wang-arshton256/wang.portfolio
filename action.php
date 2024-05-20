<?php
session_start();

include 'config.php';

if (isset($_POST['add'])) {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = "INSERT INTO contactlist(name,email,subject,message)VALUES(?,?,?,?)";
    $stmt  = $conn->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $subject, $message, );
    $stmt->execute();

    header('location:contact.php');

    $_SESSION['response'] = "Message Successfully Added To sent";
    $_SESSION['res_type'] = "success";
}
