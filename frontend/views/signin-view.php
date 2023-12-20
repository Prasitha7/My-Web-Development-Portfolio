<?php
    include("../../backend/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/signin-style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div id="signinform" class="wrapper">
        <h1>Sign In</h1>
        <form action="backend/signin.php" method="post">
            
            <div class="inputbox">
                <i class="fa-solid fa-user"></i>
                <input type="text" id="user" name="username" placeholder="Enter User Name" required><br><br>
            </div>
            <div class="inputbox">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" id="email" name="email" placeholder="Enter E-Mail" required><br><br>
            </div>
            <div class="inputbox">
                <i class="fa-solid fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter Password" required><br><br>
            </div>
            <div class="inputbox">
                <i class="fa-solid fa-lock-open"></i>
                <input type="password" id="repassword" name="repassword" placeholder="Confirm Password" required><br><br>
            </div>

            <input type="submit" class="btn" name="signin">
            <br>
            <br>
            <div class="signinother">
                <a href="#">already have an account?</a>
            </div>
        </form>
    </div>
</body>
</html>