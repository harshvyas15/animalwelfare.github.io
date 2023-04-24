<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location:.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,">
    <title>Kevin Project - 2</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Oswald:wght@600&family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/brands.min
    ">
    <link rel="icon" href="favicon (2).ico">
</head>
<body>
    <section class="header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(110 145 6 / 70%);">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: #fff;" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" style="color: #fff;" href="index.php">Home</a>
        <a class="nav-link active" aria-current="page" style="color: #fff;" href="#">About us</a>
        <a class="nav-link active" aria-current="page" style="color: #fff;" href="#">Contact</a>
        <a class="nav-link active" aria-current="page" style="color: #fff;" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>
        <div class="text-box">
            <h1>Welcome <?php echo $_SESSION['username'];?></h1>
            <h2>To Animal Welfare</h2>
            <p>Give love from saving world animal.</p>
            <a href="" class="hero-btn">Visit us to know More</a>
        </div>
    </section>

    <!-- ----------COURSE---------------- -->

    <section class="course">

        <h1>We Work Differently to keep the World Safe</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae, ea?</p>

        <div class="row">
            <div class="course-col">
                <h3>Save Water</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia a sapiente dolorum quidem. Impedit, eum perferendis. Est, perspiciatis sint. Inventore temporibus doloribus dolore aliquid?</p>
            </div>
            <div class="course-col">
                <h3>Ecology Save</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia a sapiente dolorum quidem. Impedit, eum perferendis. Est, perspiciatis sint. Inventore temporibus doloribus dolore aliquid?</p>
            </div>
            <div class="course-col">
                <h3>Environment</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia a sapiente dolorum quidem. Impedit, eum perferendis. Est, perspiciatis sint. Inventore temporibus doloribus dolore aliquid?</p>
            </div>
        </div>

    </section>


    <!-- ----------Campus---------- -->

    <section class="campus">
        <h1>Our Mission</h1>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, similique?</p> 

        <div class="row">
            <div class="campus-col">
                <img src="main image/elephant.jpeg" alt="">
                <div class="layer">
                    <h3>RISE YOUR</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="main image/zebra.jpeg" alt="">
                <div class="layer">
                    <h3>HAND TO SAVE</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="main image/lion.jpeg" alt="">
                <div class="layer">
                    <h3>WORLD ANIMAL LIFE</h3>
                </div>
            </div>
        </div>

    </section>

    <!-- --------Facilities---------- -->

    <section class="facilities">
        <h1>Our Goal to Save Wild life</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, doloremque!</p>

        <div class="row">
            <div class="facilities-col">
                <img class="img1" src="main image/cat.avif">
                <h3>World Class Library</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, exercitationem.</p>
            </div>
            <div class="facilities-col">
                <img class="img2" src="main image/tiger.avif">
                <h3>Largest Play Ground</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, exercitationem.</p>
            </div>
            <div class="facilities-col">
                <img class="img3" src="main image/fox2.avif">
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, exercitationem.</p>
            </div>
        </div>
        
    </section>

    <!-- --------testimonial--------- -->

    <section class="testimonial">
        <h1>What People Says About us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet similique dolore nisi quaerat saepe asperiores obcaecati alias mollitia! Harum debitis officia voluptatibus quos?</p>

        <div class="row">
            <div class="testimonial-col">
                <img src="main image/user1.jpg">
                <div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque modi suscipit necessitatibus commodi illo omnis enim in excepturi facere quos.</p>
                    <h3>Emma Watson</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="main image/user2.jpg">
                <div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque modi suscipit necessitatibus commodi illo omnis enim in excepturi facere quos.</p>
                    <h3>Anuj Lakhera</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>

    </section>


    <!-- -------Call To Action-------- -->

    <section class="cta">
        <h1>Donate <br> Anywhere From The World</h1>
        <a href class="hero-btn">DONATE HERE</a>
    </section>

    <!-- ----------Footer------- -->

    <section class="footer">
        <h4>About us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quos dolore libero provident dignissimos illum! Quasi,<br> eos nesciunt accusamus aspernatur obcaecati veritatis ipsum!</p>
        <div class="icon">
            <i class="fab fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin-in"></i>
        </div>
    </section>

     <!-- Javascript to add show menu or hidemenu -->

   <!-- <script>
    var navLinks = document.getElementById("navLinks");
    function showmenu(){
        navLinks.style.right="0";
    }
    function hidemenu(){
        navLinks.style.right="-200px"
    }
   </script> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>