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
</head>
<body>
    <div class="container-fuide">
        <div class="col-12">
            <div class="login-box">
                <div class="title">
                    <h2>LogIn</h2>
                    <form action="login.php" method="POST">

                         <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                            
                            <?php } ?>
                            
                        <label for="username">Username or Email:</label>
                        <input type="text" name="username" placeholder="Username or Email" required>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>

                        <a href="forgot_password_form.php">Forgot Password?</a>
                         <button type="submit">Log In</button>
                    </form>
                </div>
                <p>majhi123@gmail.com</p>
                <p>subhendu123</p>
            </div>
        </div>
    </div>
</body>
</html>
