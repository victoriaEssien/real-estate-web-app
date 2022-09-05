<?php 

if(isset($_POST['search-btn'])){
  require_once '/xampp/htdocs/UrbanFeat/connection/connect.php';
  $search =$_POST['search-field'];
  $query="SELECT * FROM details WHERE title LIKE '%$search%' OR description LIKE '%$search%' OR price LIKE '%$search%' OR created LIKE '%$search%'";

  $result = $db->query($query);
  
  
  if ($result->num_rows > 0) {
// output data of each row

  while($row = $result->fetch_assoc()) {
    echo'
    <table ">
    <thead>
    <tr>
    <th>ID</th>
    <th>title</th>
    <th>Description</th>
    <th>Price</th>
    <th>Created</th>
    </tr>
  </thead>
  <tbody>
  <tr class="table-active">
  <td>'.$row['id'].'</td>
  <td>'.$row['title'].'</td>
  <td>'.$row['description'].'</td>
  <td>'.$row['price'].'</td>
  <td>'.$row['created'].'</td>
  
  </tr>
  </tbody>
  </table>';
  }
}else {
    echo"record doesn't exist";
}
}

if(isset($_POST['search'])) {
require_once '/xampp/htdocs/UrbanFeat/connection/connect.php';
$search = $_POST['search_1'];
$sql = "SELECT id, title, description, price, created FROM details WHERE id = '$search'";

$result = $db->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo'<form action="/UrbanFeat/admin/update-properties.php" method="POST">
    <table>
    <thead>
    <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
    <th>Created</th>
    <th></th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    <tr class="table-active">
    <td><input type="text" name="id" size="10" readonly value="'.$row['id'].'"></td>
    <td><input type="text" name="title" size="10" value="'.$row['title'].'"></td>
    <td><input type="text" name="description" size="10" value="'.$row['description'].'"></td>
    <td><input type"text" name="price" size="10" value="'.$row['price'].'"></td>
    <td>'.$row['created'].'</td>

    <td><button name="update" style="background-color: #16b45d; color: #fff; padding:10px 25px; border: none;">Update</button></td>
    <td><button name="delete" style="background-color: #a52410; color: #fff; padding:10px 25px; border: none;">Delete</button></td>

    </tr>
    </tbody>
    </table>
    </form>';

  }
  }else {
    echo"<p style='text-align: center;'>Record does not exit";
  }
}



if(isset($_POST['update'])){
  require_once '/xampp/htdocs/UrbanFeat/connection/connect.php';
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  $sql = "UPDATE details SET title='$title', description= '$description', price= '$price' WHERE id = '$id'";

  $stmt = $db->prepare($sql);
  $stmt->execute();
  if($stmt){
    echo"<p style='text-align: center;'>Congrats<br>
    YOUR RECORDS HAVE BEEN SUCCESSFULLY UPDATED</p>";
      exit;
  }else{
      echo"OOPS, records not updated";
  }
}


if(isset($_POST['delete'])){
  require_once '/xampp/htdocs/UrbanFeat/connection/connect.php';
  $id = $_POST['id'];

  $sql = "DELETE FROM details WHERE id = '$id'";

  $stmt = $db->prepare($sql);
  $stmt->execute();
  if($stmt){
      echo"<p style='text-align: center;'>Congrats<br>
      YOUR RECORDS HAVE BEEN SUCCESSFULLY DELETED</p>";
      exit;
  }else{
      echo"OOPS, records not updated";
  }
}

  




?>