<?php
include "db_conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $student_id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "UPDATE student_data SET name = '$name', course = '$course', email = '$email', phone = '$phone', address = '$address' WHERE id = $student_id";
    if ($conn->query($sql) === true) {
        header("Location: view.php?id=$student_id"); 
        exit();
    } else {
        echo "Error updating student: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
