<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before storing it
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $sql = "INSERT INTO forgenew (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($con, $sql)) {
        echo "Registration successful. <a href='index.php'>Login</a>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
