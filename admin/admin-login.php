<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanFeat || Admin Login</title>

    <link rel="stylesheet" href="../css/style.css">

    <style>
        .login-header{
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url("../images/hero-img2.png");
            background-position: center;
            background-size: cover;
            position: relative;
        }
    </style>
</head>
<body class="login-header">
    
    
    <center>
        <br><br>
        <?php include_once('../process/processing.php'); ?>
        <br><br>
        <div class="log-container">
            <form action="admin-login.php" method="POST" class="login-form">
                <input type="email" name="email" size="30" placeholder="Please enter your email address" required> <br> <br>
                <input type="password" name="pword" size="30" placeholder="Please enter your password" required> <br> <br>

                <button type="submit" name="login" class="admin-log-btn">Login</button>
            </form> <br><br>
            <a href="../index.php" class="home-link">Go Home</a>
        </div>
    </center>

</body>
</html>