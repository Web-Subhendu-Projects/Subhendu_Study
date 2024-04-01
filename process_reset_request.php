<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="images/lago.png">
    <title>Apnastudy.Com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        p.error {
            color: red;
           font-weight: bold;
            margin-top: 224px;
            padding: 1px 0px 110px -10px;

        }
    </style>
</head>
<body>
    <h2>Reset Password</h2>

    <?php
    if (isset($_GET['token'])) {
        $token = $_GET['token'];

        
        if (!empty($token)) { 
            echo '
            <form action="reset-password-process.php" method="post">
                <input type="hidden" name="token" value="' . htmlspecialchars($token) . '">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                <button type="submit" name="submit">Reset Password</button>
            </form>';
        } else {
            echo '<p class="error">Token is invalid or expired. Please request a new password reset.</p>';
        }
    } else {
        echo '<p class="error">Token not provided.</p>';
    }

$token = "YOUR_RESET_TOKEN_HERE";


$resetLink = "http://example.com/reset-password.php?token=$token";
?>
<a href="<?php echo htmlspecialchars($resetLink); ?>">Reset Password</a>


</body>
</html>
