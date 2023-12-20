<?php
    include("backend/connect.php");
    if(isset($_POST["signin"])){
        $username = $_POST["username"];    
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];


        $sql = "SELECT * FROM user WHERE e_mail = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0 ) {
            if($password==$repassword){
                $sql = "INSERT INTO user (e_mail, user_name, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                if (!$stmt) {
                    die("Error in statement preparation: " . $conn->error);
                }
                
                $stmt->bind_param("sss", $email, $username, $password);
                
                $success = $stmt->execute();
                if (!$success) {
                    die("Error in statement execution: " . $stmt->error);
                }
                $result = $stmt->get_result();
                header("location:frontend/views/welcome.php");
                exit();
            }else{
                echo '<script>
                    window.location.href = "index.php";
                    alert("Passwords does not match");
                </script>';
            }

        } else {
            echo '<script>
                    window.location.href = "index.php";
                    alert("This e-mail already exists");
                </script>';
        }
        

    }
?>
