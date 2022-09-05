<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if(isset($_POST['book'])) {
    include_once('connection/connect.php');

    $title = $_POST['title'];
    $name = $_POST['name'];
    $email=$_POST['email'];
    $date=$_POST['date'];


    $new_record = array(
        "title" => $title,
        "name"=>$name,
        "email"=>$email,
        "date"=>$date   
    );

    try{
        $query= "INSERT INTO tours (title, name, email, date) VALUES ('$title','$name', '$email', '$date')";

        $stmt = $db -> prepare($query);
        $stmt->execute();
        if($stmt) {
            echo "<script>
            alert(\"Booking Successful\");
            </script>";
        }
        else{
            echo "<script>
            alert(\"Booking failed. Please try again\");
            </script>";
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>