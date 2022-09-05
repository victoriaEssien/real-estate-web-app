<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .available-col-all {
            text-align: center;
            display: inline-block;
            width: 25%;
        }
        img {
            width: 100%;
        }
    </style>
</head>
<body>
<?php 
// Include the database configuration file  
require_once '/xampp/htdocs/UrbanFeat/connection/connect.php'; 
 
// Get image data from database 

$result = $db->query("SELECT * FROM details ORDER BY id");
?>

<?php if($result->num_rows > 0){ ?> 
    <br><br>
    <a href="index.php" class="back-btn">Go Back</a>
    <br><br><br><br>
    <div class="row"> 
        <?php while($row = $result->fetch_assoc()){ 
            $id = $row['id']?>
            <div class="available-col-all">
                <a href="info.php?id=<?php echo $id; ?>"><img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"><br><br></a>

            </div>
        <?php } ?> 

    </div> 
    
<?php }else{ ?> 
     
<?php } ?>
</body>
</html>



<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanFeat || Properties</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <br><br>
    <a href="index.html" class="back-btn">Go Back</a>
    <br><br>
    <h2>Click for more information</h2>
    <br><br>
    <a href="">
        <div class="container">
            <img src="images/hero-img.png" alt="" class="more-img">
            <img src="images/hero-img.png" alt="" class="more-img">
            <img src="images/hero-img.png" alt="" class="more-img">
            <img src="images/hero-img.png" alt="" class="more-img">
            <img src="images/hero-img.png" alt="" class="more-img">
            <img src="images/hero-img.png" alt="" class="more-img">
        </div>
    </a>

</body>
</html> -->