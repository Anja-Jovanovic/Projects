<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "project";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>die('Connection field')</script>");
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO users (name, last_name, email, password)
    VALUES ('$name','$last_name','$email','$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('User registration completed!')</script>";
            $name = "";
            $last_name = "";
            $email = "";
            $_POST['password'] = "";
        } else {
            echo "<script>alert('Something went wrong')</script>";
        }
    } else {
        echo "<script>alert('Email already exists')</script>";
    }
}
