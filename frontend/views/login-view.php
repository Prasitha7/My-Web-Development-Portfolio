<?php
    include("../../backend/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/login-style.css">
    
    <title>Document</title>
</head>
<body>
    <div id="form">
        <h1>login Form</h1>
        <form name="LoginForm" action="login.php" onsubmit="return isvalid()" method="post">
            <label for="user">Username</label>
            <input type="text" id ="user" name="username" ><br><br>
            <label for="">Password</label>
            <input type="password" id="pass" name= "password"><br><br>
            <input type="submit" id=login value=login name=login>
        </form>
    </div>

    <script>
        function isvalid(){
            var username =document.LoginForm.username.value;
            var password =document.LoginForm.password.value;

            if(username.length==""){
                alert("Username field is empty")
            return false;
            }
            if(password.length==""){
                alert("password field is empty")
            return false;
            }    
        }
    </script>
</body>
</html>