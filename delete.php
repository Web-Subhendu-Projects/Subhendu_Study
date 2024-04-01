<?php
include "db_conn.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $check_sql = "SELECT * FROM student_data WHERE id=$id";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows == 1) {
 
        $delete_sql = "DELETE FROM student_data WHERE id=$id";

        if ($conn->query($delete_sql) === TRUE) {

            header("Location: view_data.php"); 
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Record not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
