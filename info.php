<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanFeat || Info</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .container {
    text-align: center;
    display: inline-block;
}

    .more-img {
    width: 30%;
}

    .property-container {
    text-align: center;
    padding: 0 20%;
}

    .info-img {
    width: 70%;
    margin-bottom: 7%;
}

    .property-container h2{
    text-align: left;
}
    
    .property-container p {
        text-align: left;
    }

    .property-container h3 {
    color: #8f6b38;
    text-align: right;
    margin-top: -15%;
    }

    </style>
</head>
<body>
<?php 
// Include the database configuration file  
require_once '/xampp/htdocs/UrbanFeat/connection/connect.php';  

?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $db->query("SELECT * FROM details WHERE id=$id");
}

?>


<?php if($result->num_rows > 0){ ?> 
    <br><br>
    <a href="index.php" class="back-btn">Go Back</a>
    <div class="property-container"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <div class="featured-col-info">
            <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="info-img"><br>
            <h2><?php  echo $row['title']; ?></h2><br>
            <p><?php  echo $row['description']; ?></p><br>
            <h3>₦ <?php  echo $row['price']; ?></h3><br>
            </div>
        <?php } ?> 

    </div> 
    
<?php }else{ ?> 
     
<?php } ?>





</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanFeat || Property Info</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <br><br>
    <a href="index.php" class="back-btn">Go Back</a>
    <br><br>

    <div class="property-container">
        <img class="info-img" src="images/hero-img.png" alt=""> <br><br><br>
        <h2>Description</h2>
        <h3>₦18.99M</h3> <br> <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut neque nobis debitis laudantium quaerat, sapiente pariatur animi quis perferendis! Ad temporibus modi doloremque iusto deleniti pariatur, dolores quos nihil exercitationem!
        Et placeat, beatae exercitationem illum delectus, iure dicta autem neque ipsum architecto hic enim odio corrupti praesentium quos debitis. Quos consequuntur quaerat corporis molestias error velit nulla distinctio. Vel, facilis!
        Suscipit inventore necessitatibus id ullam voluptate, eaque culpa cupiditate incidunt deleniti quae obcaecati voluptatibus molestiae eius! Magni facere vitae placeat, dignissimos quos eaque, doloremque maiores ab perspiciatis ea, explicabo doloribus!</p>
    </div>



</body>
</html> -->