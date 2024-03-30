<?php      
    include('connection.php');  
    $username = $_POST['userName'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from forgenew where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if ($count == 1) {
            // Redirect to another page upon successful login
            header("Location: home.php?username=" . urlencode($username));
            exit(); // Make sure to exit after sending the redirect header
        } else {
            // Redirect to another page upon failed login
            header("Location: login-failed.html");
            exit(); // Make sure to exit after sending the redirect header
        }   
?>  