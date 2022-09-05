<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanFeat || Upload Property</title>

    <link rel="stylesheet" href="../css/style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <br><br>
    <a href="admin-dashboard.php" class="back-btn">Go Back</a>
    
    <center>
        <br><br>
        <?php include_once('../process/upload.php'); ?>
    <br><br>
        <div class="upload-container" id="content">
        <form method="POST" action="" enctype="multipart/form-data">

            <label for="file" class="custom-file-upload">
            <i class="fa fa-cloud-upload"></i> Choose a file
            </label>
            <input id="file" name="image" value="" type="file"> <br><br>

            <input class="input" type="text" name="title" value="" size="35" placeholder="enter property title"> <br><br><br>

			<textarea name="description" rows="6" cols="40" placeholder="Enter House Description..."></textarea> <br><br>

			<input class="input" type="text" name="price" value="" size="35" placeholder="enter property price"> <br><br><br>

			<button class="upload-btn" type="submit" name="upload">Upload</button>
	    </form> <br><br>
        <a href="admin-dashboard.php" class="home-link">Go Back</a>
    </div>        
</center> <br><br>

</body>
</html>