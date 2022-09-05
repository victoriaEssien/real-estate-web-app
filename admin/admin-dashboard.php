<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="dashboard-body">
<section class="header">
<nav class="navbar">
    <h2 style="margin-left:80px; margin-top:30px;">Admin Dashboard</h2>
            <ul class="nav-menu">
                <a href="../index.php" class="admin-login"><button class="log-btn">Log Out</button></a>
            </ul>
        </nav>

		</div>

        <center>
            <br><br>
                <div class=form_search>
                    <form action="" method="POST">
                        <input class="input" type="text" name="search-field" placeholder="search by name, price or date of creation">
                        <br><br><br>
                        <button class="search-btn" type="submit" name="search-btn">Search</button>
                    </form>
                </div> <br><br>

        <?php include_once('../process/processing2.php'); ?>
        </center>
	
       <div class="row">
        <a href="upload-property.php" style="text-decoration: none;">
        <div class="upload-div" id="myBtn">Upload Property</div>
        </a>
        <a href="update-properties.php" style="text-decoration: none;">
        <div class="upload-div">Manage Properties</div>
        </a>
        <a href="scheduled-tours.php" style="text-decoration: none;">
        <div class="upload-div" style="margin-right: 60px;">Scheduled Tours</div>
        </a>
       </div> <br><br>
    
</body>
</html>