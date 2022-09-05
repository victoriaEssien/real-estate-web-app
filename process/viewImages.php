<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .available-col img{
    /* margin-top: 60px;
    width: 100%;
    border-radius: 10px;
    transition: 1s; */
    border-radius: 10px;
    margin-right:22px;
    width: 640px;
    height: 420px;
}
    </style>
</head>
<body>
<?php 
// Include the database configuration file  
require_once '/xampp/htdocs/UrbanFeat/connection/connect.php'; 
 
// Get image data from database 

$result = $db->query("SELECT * FROM details ORDER BY id DESC LIMIT 5");
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="row"> 
        <?php while($row = $result->fetch_assoc()){ 
            $id = $row['id']?>
            <div class="available-col">
            <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"><br><br>
            <!-- <p class="title-layer"><b><?php  echo $row['title']; ?></p></b><br> -->

            <a href="info.php?id=<?php echo $id; ?>" ><button class="read-more-btn">Read More</button></a>

            </div>
        <?php } ?> 

    </div> 
    
<?php }else{ ?> 
     
<?php } ?>
</body>
</html>