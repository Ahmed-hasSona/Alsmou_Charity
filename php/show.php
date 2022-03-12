
<?php
include 'connect.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Smou</title>
</head>
<body>
  
    <div class="container">
    <table class="table m-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Village</th>
      <th scope="col">Message</th>
      <th scope="col">City</th>
      <th scope="col">Gender</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>

      <?php 
       $sql = "SELECT * FROM vollunteer";
       $result = mysqli_query($conn,$sql);
       if($result){
           while($row = mysqli_fetch_assoc($result)){
               $id = $row['id'];
               $Name = $row['Name'];
               $Phone = $row['Phone'];
               $Email = $row['Email'];
               $Village = $row['Village'];
               $Message = $row['Message'];
               $City = $row['City'];
               $Gender = $row['Gender'];
               
               echo '<tr>
               <th scope="row">'.$id.'</th>
               <td>'.$Name.'</td>
               <td>'.$Phone.'</td>
               <td>'.$Email.'</td>
               <td>'.$Village.'</td>
               <td>'.$Message.'</td>
               <td>'.$City.'</td>
               <td>'.$Gender.'</td>
               <td>
               <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
               </td>
             </tr>';
           }
       }
      ?>
    
  </tbody>
</table>
    </div>
</body>
</html>

