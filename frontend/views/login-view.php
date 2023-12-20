<?php
    include("../../backend/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles.css">
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