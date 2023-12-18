<?php
    include("connect.php");
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $password2 = $_POST["password"];


        $sql = "SELECT * FROM user WHERE user_name = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            header("Location: welcome.php");
        } else {
            echo '<script>
                    window.location.href = "index.php";
                    alert("Login Failed. Invalid Username or Password");
                </script>';
        }
    }
?>
