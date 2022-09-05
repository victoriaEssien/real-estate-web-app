<?php 

require_once '/xampp/htdocs/UrbanFeat/connection/connect.php';

$sql = "SELECT * FROM tours";

$result = $db->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo'<br><br><form action="/UrbanFeat/admin/scheduled-tours.php" method="POST">
    <table>
    <thead>
    <tr>
    <th>Title</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <tr class="table-active">
    <td>'.$row['title'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['date'].'</td>

    </tr>
    </tbody>
    </table>
    </form>';

  }
  }else {
      echo"record doesn't exist";
  }


?>