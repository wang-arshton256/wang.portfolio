<?php
$conn = new mysqli("localhost", "wang", "hacker", "wangport");
if ($conn->connect_error) {
    die("could not connect to the database" . $conn->connect_error);
}
