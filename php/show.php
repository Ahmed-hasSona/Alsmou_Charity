
<?php
include 'connect.php';
 ?>

<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title> إدارة بيانات المتطوعين</title>

    <style>
      .upper-bar{
    color: black;
    padding: 10px;
}

.upper-bar .re a{
    font-size: 18px;
    color: black;
    font-weight: bold;
    text-decoration: none;
}

@media (max-width: 576px){
    .quit nav ul li{
        margin-top: 10px;
        padding-bottom: 15px;
    }
}

.quit nav ul li{
    position: relative;
    list-style: none;
    display: inline-block;
}

.quit nav ul li a{
    color: black;
    display: block;
    padding: 0 15px;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
    margin-right:30px;
}

.quit nav ul li a:hover{
  color:red;
}


.quit nav ul ul{
    position: absolute;
    top: 28px; 
    left: 0;
    display: none;
}

@media(max-width: 578px){
    .quit nav ul ul {
        position: absolute;
        top: 20px;
    }
}

nav ul li:hover > ul{
    display: block;
}

.quit nav ul li a:hover{
   color: red;
}
    </style>

</head>
<body>
  
<div class="upper-bar">
            <div class="container">
                <div class="row">
                  <div class="col-sm text-sm-right">
                    <div class="re">
                    <a href="logout.php" class="btn btn-warning mr-3">تسجيـل خروج</a>
                      </div>
                  </div>
                    <div class="col-sm text-sm-left">
                      <span class="quit">  
                        <nav>
                      <ul>
                        <li><a href="#"> <i class="fas fa-caret-down"></i> العربية</a>
                        <ul><li><a href="../lang/php/show.php">English</a></li></ul>
                        </li>
                      </ul> 
                        </nav>
                      </span>
                    </div>
                </div>
            </div>
        </div>

    <div class="container">
    <table class="table m-3 text-center">
  <thead>
    <tr>
      <th scope="col">المعـرف</th>
      <th scope="col">الاسـم</th>
      <th scope="col">الهاتـف</th>
      <th scope="col">الايميـل</th>
      <th scope="col">الحـي</th>
      <th scope="col">الرسـالة</th>
      <th scope="col">المدينة</th>
      <th scope="col">الجنـس</th>
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

