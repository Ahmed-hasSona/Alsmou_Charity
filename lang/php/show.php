
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
    <title>Volunteer Data</title>

    <style>
      .upper-bar{
    padding-top: 10px;
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
        margin-bottom: 15px;
    }
}

.quit nav ul li{
    position: relative;
    list-style: none;
    display: inline-block;
    margin-bottom: 10px;
}

.quit nav ul li a{
    color: black;
    display: block;
    padding: 0 10px;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
    margin-left: 30px;
  }

.quit nav ul ul{
    position: absolute;
    top: 28px; 
    right: 13px;
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
    border-radius: 10px solid rgb(53, 51, 51);
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
                    <div class="col-sm text-sm-left">
                      <div class="re">
                      <a href="logout.php" class="btn btn-warning ml-3">Logout</a>
                        </div>
                    </div>
                    <div class="col-sm text-sm-right">
                      <span class="quit">  
                        <nav>
                          <ul>
                            <li><a href="#">English <i class="fas fa-caret-down"></i></a>
                            <ul><li><a href="../../php/show.php">العربية</a></li></ul>
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

