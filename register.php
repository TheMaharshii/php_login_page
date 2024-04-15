

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include('connection.php');

$message = ''; // Initialize an empty message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before storing it
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $sql = "INSERT INTO forgenew (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($con, $sql)) {
        $message = "Registration successful. <a href='index.php' class='login-link'>Login</a>";
    } else {
        $message = "Error: " . mysqli_error($con);
    }
}
?>
    <?php
    if ($message) { // Check if message is not empty
        echo $message; // Display the message if not empty
    } else {
    ?>
    <form action="register.php" method="post" class="login-form">
        <label for="username">Username:</label>
        <input
            type="text"
            id="username"
            name="username"
            autocomplete="off"
            required
        />
        <br />
        <label for="password">Password:</label>
        <input
            type="password"
            id="password"
            name="password"
            autocomplete="off"
            required
        />
        <br />
        <input type="submit" value="Register" />
    </form>
    <?php
    }
    ?>
</body>
</html>
