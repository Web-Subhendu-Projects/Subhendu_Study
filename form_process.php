<?php
include "db_conn.php"; 


$name = $_POST['name'];
$course = $_POST['course'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];



$sql = "INSERT INTO student_data (name, course, email, phone, address) 
        VALUES ('$name', '$course', '$email', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
 

    session_start();
    $_SESSION['success_message'] = "Data inserted successfully.";
 
 
    header("Location: home.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

