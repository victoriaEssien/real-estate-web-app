<?php 

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pword = $_POST['pword'];

    if($email == "super@admin.com" && $pword == "urbanFeat") {
        header("Location: /UrbanFeat/admin/admin-dashboard.php");
    } else{
        echo "<p style='color:#fff;text-align:center;'>Invalid login details</p>";
    }
}
?>