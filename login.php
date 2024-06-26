`<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM login WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $count = mysqli_stmt_num_rows($stmt);
        
        if($count == 1){  
            // Start session and store username
            session_start();
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit(); // Always exit after redirection
        }  
        else{  
            // Redirect with error message
            echo  '<script>
                        alert("Login failed. Invalid username or password!!");
                        window.location.href = "login_1.php";
                  </script>';
            exit(); // Always exit after redirection
        }     
    }
?>
