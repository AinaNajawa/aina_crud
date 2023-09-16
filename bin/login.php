<?php
include('dbcon.php'); 
if(isset($_POST['fullname'])) {    
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "INSERT INTO students  (fullname, password, email)
    VALUES ('$fullname', '$password', '$email')";
    $samb = mysqli_connect($host, $user, $password, $database);
    $hasil = mysqli_query($samb, $sql); 
    if ($hasil)
        echo "<script>alert('Anda Berjaya')</script>";
    else 
        echo "<script>alert('Anda Tidak Berjaya')</script>";
    echo "<script>window.location='indexx.php'</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <title>Am Seeema Worldwide</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
<thead>
<tbody>


<img src="img/am seema logo.png" alt="" width="200px" height="200px">
<form action="indexx.php" method="post">
  <div class="container">
    <label for="name"><b>Full Name :</b></label>
    <input type="text" placeholder="name" name="" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="password" name="password" required>
    

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="email" name="" required>

    <button class = button ><a href="">Reset</a></button>      
    <button class = button type="submit">Login</button>
    <button><a href=https://www.amseemaworldwide.com/ target="_blank">AmSeemaWorldwide</a></button>



    <!-- <button class = button type="submit">Admin</button> -->
  

    </label>
  </tbody>
  </div>
</body>
</html>