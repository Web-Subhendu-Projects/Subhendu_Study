<?php
session_start();

include "db_conn.php"; 

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

  
    $sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];

        header("Location: home.php"); 
        exit();
    } else {
       
        header("Location: index.php?error=Incorrect User Name or Password");
        exit();
    }
}
?>
