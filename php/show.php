
<?php

include 'connect.php'; ?>

<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>منظمـة السمو</title>
</head>
<body>
    <div class="container">
    <table class="table m-3">
  <thead>
    <tr>
      <th scope="col">المعرف</th>
      <th scope="col">الاسم</th>
      <th scope="col">رقم الهاتف</th>
      <th scope="col">الايميل</th>
      <th scope="col">السكـن</th>
      <th scope="col">الرسالة</th>
      <th scope="col">المدينـة</th>
      <th scope="col">الجنس</th>
      <th scope="col">حـذف</th>
    </tr>
  </thead>
  <tbody>

      <?php 
       $sql = "SELECT * FROM volunteer";
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
               <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">حـذف</a></button>
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