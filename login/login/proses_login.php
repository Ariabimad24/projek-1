<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "admin";
    $password = "admin123";

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    if ($input_username === $username && $input_password === $password) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
