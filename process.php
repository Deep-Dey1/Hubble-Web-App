<?php
include_once 'database.php';
if(isset($_POST['save']))
{
    $username = $_POST['username'];
    $password = $_POST["password"];

    $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
        echo '<script>alert("New record created successfully!"); window.location.href = "login_1.php";</script>';
        exit; // Stop further execution
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
