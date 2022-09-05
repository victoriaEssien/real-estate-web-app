<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanFeat || Manage Properties</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="dashboard-body">
    <br><br>
    <a href="admin-dashboard.php" class="back-btn">Go Back</a>
    <center>
        <br><br>
        <div class="form_search">
        <form action="update-properties.php" method="POST">
            <input type="text" name="search_1" size="25" placeholder="search by property id" required>
            <br><br><br>
            <button name="search" class="search-btn">Search</button>
        </form>
        </div>
    <br><br>
    </center>

    <?php include_once('../process/processing2.php'); ?>
</body>
</html>