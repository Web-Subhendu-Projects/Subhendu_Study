<?php
include "db_conn.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $student_id = $_GET['id'];

    $sql = "SELECT * FROM student_data WHERE id = $student_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        ?>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image" href="images/lago.png">
            <title>Apnastudy.Com</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="css/edit.css">
        </head>
        <body>
            <h1>Edit Students Information</h1>
            <form action="form_process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Course: 
            <select name="course">
                <option value="" disabled>Select Course</option>
                <option value="App Development" <?php if ($row['course'] == 'App Development') echo 'selected'; ?>>App Development</option>
                <option value="Web Development" <?php if ($row['course'] == 'Web Development') echo 'selected'; ?>>Web Development</option>
                <option value="UI/UX/Photoshop Design" <?php if ($row['course'] == 'UI/UX/Photoshop Design') echo 'selected'; ?>>UI/UX/Photoshop Design</option>
                <option value="AWS Cloud Computing" <?php if ($row['course'] == 'AWS Cloud Computing') echo 'selected'; ?>>AWS Cloud Computing</option>
                <option value="Cyber Security" <?php if ($row['course'] == 'Cyber Security') echo 'selected'; ?>>Cyber Security</option>
                <option value="Hardware & Network" <?php if ($row['course'] == 'Hardware & Network') echo 'selected'; ?>>Hardware & Network</option>
                <option value="Electrical Skill" <?php if ($row['course'] == 'Electrical Skill') echo 'selected'; ?>>Electrical Skill</option>
                <option value="Electronic Skill" <?php if ($row['course'] == 'Electronic Skill') echo 'selected'; ?>>Electronic Skill</option>
                <option value="HTML Developer" <?php if ($row['course'] == 'HTML Developer') echo 'selected'; ?>>HTML Developer</option>
                <option value="PHP Developer" <?php if ($row['course'] == 'PHP Developer') echo 'selected'; ?>>PHP Developer</option>
                <option value="Laravel Developer" <?php if ($row['course'] == 'Laravel Developer') echo 'selected'; ?>>Laravel Developer</option>
                <option value="Python Developer" <?php if ($row['course'] == 'Python Developer') echo 'selected'; ?>>Python Developer</option>
            </select><br>
            Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
            Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
            Address: <textarea name="address"><?php echo $row['address']; ?></textarea><br>
            <input type="submit" value="Submit">
        </form>

        </body>
        </html>
        <?php
    } else {
        echo "Student not found.";
    }
} else {
    echo "Invalid student ID.";
}
?>
