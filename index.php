<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | XAMPP Demo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-form">
     <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">
        <label for="userName">Username:</label>
        <input type="text" name="userName" id="userName" autocomplete="off">
        <label for="password">Password:</label>
       <input type="password" name="password" id="password">
       <input type="submit" value="Login" class="button">
       <a href="register.php"><input type="button" value="Register?" class="button"> </a>
     </form>
    </div>

    <script>  
            function validation()  
            {  
                var id=document.f1.userName.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
        
</body>
</html>