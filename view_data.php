<?php

include "db_conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="images/lago.png">
    <title>ApmaStady.Com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>   
    <link rel="stylesheet" type="text/css" href="css/view_data.css">   
</head>
<body>
    <div class="container-fluid-xl">
            <div class="title-a">
                <h2>View Submitted Data</h2>
            </div>
        </div>
    </div>

        
           
     <?php

            $sql = "SELECT * FROM student_data";
            $result = $conn->query($sql);

            $serialNo = 1; 

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>SI No</th><th>Name</th><th>Course</th><th>Email</th><th>Phone</th><th>Address</th><th>Action</th></tr>";

                while ($row = $result->fetch_assoc()) {
                   echo "<tr>";
                    echo "<td>" . $serialNo . "</td>"; 
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['course'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                     
                    // echo '<td><a href="view.php?id=' . $row['id'] . '" class="btn btn-primary">View</a> ';
                    echo '<td><a href="edit.php?id=' . $row['id'] . '" class="btn btn-warning">Edit</a> ';
                    echo '<a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a></td>';
                    echo "</tr>";
                    $serialNo++;
                }

                echo "</table>";
                echo '<a href="home.php" class="btn btn-primary">Back to Home</a>';
            } else {
                echo "No data found.";
            }

            $conn->close();
            ?>
    </div>
</body>
</html>