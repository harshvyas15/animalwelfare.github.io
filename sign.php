<?php
$servername="localhost";
$username="root";
$password="";
$database="sign";

$conn=mysqli_connect($servername,$username,$password,$database);
// if($conn)
// {
//    echo "success";
// }
// else{
//     die("error".mysqli_connect_error());
// }
?>
<?php
 $showAlert=false;
 $showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    // For checking exist username
$existSql="SELECT * FROM `sign` WHERE username='$username'";
$result=mysqli_query($conn,$existSql);
$numExistRows=mysqli_num_rows($result);
if($numExistRows>0){
  $showError="Username Already Exist";
}
else{
    if(($password==$cpassword)){
         $sql="INSERT INTO `sign` (`username`, `password`) VALUES ('$username', '$password')";
              $result=mysqli_query($conn,$sql);
      if($result)
      {
       $showAlert=true;
      }
    }
      else{
        $showError="Password do not match";
      }
     
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Welfare | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

*, html, body {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Poppins', sans-serif;
    /* height: 500vh;
    
    display: flex;
    justify-content: center;
    align-items: center; */
    background-color: rgba(128, 182, 20, 0.7);
}

.container {
    width: 50vw;
    height: 60vh;
    margin-top: 100px;
    display: grid;
    grid-template-columns: 100%;
    grid-template-areas: "login";
    box-shadow: 0 0 17px 10px rgb(0 0 0 / 30%);
    border-radius: 20px;
    background: white;
    overflow: hidden;
}

.design {
    grid-area: design;
    display: none;
    position: relative;
}

.rotate-45 {
    transform: rotate(-45deg);
}

.design .pill-1 {
    bottom: 0;
    left: -40px;
    position: absolute;
    width: 80px;
    height: 200px;
    background: linear-gradient(#80b614cc,#80b614cc, #80b614cc);
    border-radius: 40px;
}

.design .pill-2 {
    top: -100px;
    left: -80px;
    position: absolute;
    height: 450px;
    width: 220px;
    background: linear-gradient(#80b614cc,#7fb416cc,#4d6e0ccc);
    border-radius: 200px;
    border: 30px solid #4d7404cc;
}

.design .pill-3 {
    top: -100px;
    left: 160px;
    position: absolute;
    height: 200px;
    width: 100px;
    background: linear-gradient(#80b614cc,#7fb416cc,#4d6e0ccc);
    border-radius: 70px;
}

.design .pill-4 {
    bottom: -180px;
    left: 220px;
    position: absolute;
    height: 300px;
    width: 120px;
    background: linear-gradient(#80b614cc);
    border-radius: 70px;
}

.login {
    grid-area: login;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    background: white;
}

.login h3.title {
    margin: 15px 0;
}

.text-input {
    background: #e6e6e6;
    height: 40px;
    display: flex;
    width: 60%;
    align-items: center;
    border-radius: 10px;
    padding: 0 15px;
    margin: 5px 0;
}

.text-input input {
    background: none;
    border: none;
    outline: none;
    width: 100%;
    height: 100%;
    margin-left: 10px;
}

.text-input i {
    color: #686868;
}

::placeholder {
    color: #9a9a9a;
}

.login-btn {
    width: 68%;
    padding: 10px;
    color: white;
    background: linear-gradient(to right, #80b614cc,#80b614cc, #80b614cc);
    border: none;
    border-radius: 20px;
    cursor: pointer;
    margin-top: 10px;
}

a {
    font-size: 12px;
    color: #9a9a9a;
    cursor: pointer;
    user-select: none;
    text-decoration: none;
}

a.forgot {
    margin-top: 15px;
}

.create {
    display: flex;
    align-items: center;
    position: absolute;
    bottom: 30px;
}

.create i {
    color: #9a9a9a;
    margin-left: 10px;
}

@media (min-width: 768px) {
    .container {
        grid-template-columns: 50% 50%;
        grid-template-areas: "design login";
    }

    .design {
        display: block;
    }
}
    </style>
</head>

<body>
<section>
<div class="header">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(110 145 6 / 70%);">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: #fff;" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" style="color: #fff;" href="index.php">Home</a>
        <a class="nav-link active" aria-current="page" style="color: #fff;" href="vetnary.html">Petcare</a>
        <a class="nav-link active" aria-current="page" style="color: #fff;" href="shop.html">Shop</a>
        <a class="nav-link active" aria-current="page" style="color: #fff;" href="log.php">Login</a>
      </div>
    </div>
  </div>
</nav>
</div>
</section>
<div class="body1">
<?php
 if($showAlert){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>success!</strong> Your account is now created.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}

if($showError){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Oops!</strong> .$showError.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }

?>
<div class="container">
        <div class="design">
            <div class="pill-1 rotate-45"></div>
            <div class="pill-2 rotate-45"></div>
            <div class="pill-3 rotate-45"></div>
            <div class="pill-4 rotate-45"></div>
        </div>
        <form action="/selectproject/sign.php" method="post">
        <div class="login">
            <h3 class="title">Registeration</h3>
            <div class="text-input">
                <i class="ri-user-fill"></i>
                <input type="text" placeholder="Username" name="username">
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" placeholder="Confirm Password" name="cpassword">
            </div>
            <button type="submit" class="login-btn">SignUp</button>
           
            </div>
            
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</form>
</body>

</html>