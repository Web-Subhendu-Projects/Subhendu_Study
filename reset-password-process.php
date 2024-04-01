<?php
session_start();

include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $token = $_POST["token"]; 

   
    if (empty($token)) {
        echo "Token not provided.";
        exit;
    }

    
    $sql = "SELECT user_email, expiration_timestamp FROM reset_tokens WHERE token = ? LIMIT 1";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $email = $row["user_email"];
        $expirationTimestamp = strtotime($row["expiration_timestamp"]);
        $currentTimestamp = time();

       
        if ($currentTimestamp <= $expirationTimestamp) {
           

            
            $newPassword = $_POST["password"];
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT); 

            
            $updateSql = "UPDATE users SET password = ? WHERE email = ?";
            $updateStmt = $mysqli->prepare($updateSql);
            $updateStmt->bind_param("ss", $hashedPassword, $email);

            if ($updateStmt->execute()) {
                echo "Password updated successfully. You can now login with your new password.";
            } else {
                echo "Password update failed. Please try again later.";
            }

           
            $updateStmt->close();
        } else {
            echo "Token has expired. Please request a new password reset.";
        }
    } else {
        echo "Invalid token. Please request a new password reset.";
    }

  
    $stmt->close();
}


?>
