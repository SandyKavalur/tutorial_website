<!doctype html>
<html>
	<head>
      <?php session_start(); ?>
      <!-- CSS only -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

      <!-- JS, Popper.js, and jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script><link rel="stylesheet" href="style.css">

      <!-- fa icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" type="text/css" href="main.css"> 

      <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

      <script> 
         $(function(){
            $("#footer").load("footer.html"); 
            $("#navbar").load("navbar.php");
         });
      </script> 

      <title> landing-page </title>
	</head>
	<body>
      <?php  
         if (session_status() == PHP_SESSION_NONE) {
            session_start();
         }
         if($_SESSION['temp'] == TRUE){
            $_SESSION['temp'] = TRUE;
         }else{
            $_SESSION['temp'] = FALSE;
         }
      ?>
      <!--- Navbar --->
      <nav class="navbar navbar-expand-lg ">
         <div class="container">
         <a class="navbar-brand text-white" href="./index.php"><i class="fa fa-graduation-cap fa-lg mr-2"></i>Learn Academy</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="nvbCollapse">
            <ul class="navbar-nav ml-auto">
                  <li class="nav-item active pl-1">
                     <a class="nav-link" href="#"><i class="fa fa-user fa-fw mr-1"></i><?php echo $_SESSION['username'];?></a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./reviewf/review.php"><i class="fa fa-th-list fa-fw mr-1"></i>Review</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./aboutf/about.php"><i class="fa fa-info-circle fa-fw mr-1"></i>About Us</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./contactf/contact.html"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Contact Us</a>
                  </li>
                  
                  <?php
                     if(!$_SESSION['temp']){echo'
                     <li class="nav-item pl-1">
                        <a class="nav-link" href="./signupf/signup.html"><i class="fa fa-user-plus fa-fw mr-1"></i>Sign Up</a>
                     </li>
                     <li class="nav-item pl-1">
                        <a class="nav-link" href="./loginf/login.html"><i class="fa fa-user-plus fa-fw mr-1"></i>Login</a>
                     </li>';
                     }else{echo'
                     <li class="nav-item pl-1">
                        <a class="nav-link" href="logoutf/logout.php"><i class="fa fa-sign-in fa-fw mr-1"></i>Log Out</a>
                     </li>';
                     }
                  ?>
            </ul>
         </div>
         </div>
      </nav>
      <!-- Sliding Window -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" src="https://i.postimg.cc/bNQp0RDW/1.jpg" alt="First slide">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Learn Academy</h5>
                  <p>We are learn academy, we aim to make coding easy for everyone.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="https://i.postimg.cc/pVzg3LWn/2.jpg" alt="Second slide">
               <div class="carousel-caption d-none d-md-block">
                  <h5>100+ Courses</h5>
                  <p>We offer the best courses accesible to everyone taught by top proffessionals and educators of the coding field.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="https://i.postimg.cc/0y2F6Gpp/3.jpg" alt="Third slide">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Easy on your wallet</h5>
                  <p>We offer our courses at the lowest prices possible compared to anywhere else.</p>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>

      <!-- Welcome window -->
      
      <div class="container mt-3" style='padding-top: 120px;'>
         <div class="jumbotron">
            <h1 class="display-4 text-center">Welcome to Raman Stationary!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
               featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
         </div>
      </div>
   
      <div class="container mb-5 mt-n5">
         <div class="text-justify bg-dark p-5">
            <h1 class="text-info text-center mb-4">Learn new skills online with top educators</h1>
            <p class="text-white">The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
            <br />
            <ul class="ml-n3 text-white">
               <li class="my-3">Techniques to engage effectively with vulnerable children and young people.</li>
               <li class="my-3">Join millions of people from around the world learning together.</li>
               <li class="my-3">Join millions of people from around the world learning together. Online learning is as easy and natural.</li>
            </ul>
         </div>
      </div>

      <div class="container mb-5 mt-5 overflow-auto" style='padding-top: 120px; padding-bottom: 120px;'>
         <div class="row">
            <div class="col-md-6 pl-5 overflow-hidden">
               <img src="./imagesf/man2.jpg" alt="Mike" style="padding-top:25%">
            </div>
            <div class="col-md-6 text-justify p-5">
               <h1 class="text-primary text-center mb-4">Learner outcomes on courses you will take</h1>
               <p >The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
               <br />
               <ul class="ml-n3 ">
                  <li class="my-3">Techniques to engage effectively with vulnerable children and young people.</li>
                  <li class="my-3">Join millions of people from around the world learning together.</li>
                  <li class="my-3">Join millions of people from around the world learning together. Online learning is as easy and natural.</li>
               </ul>
            </div>
         </div>
      </div>
   
      <!-- Courses -->
      <div class="container">
         <div class="row">
            <?php  
            include "dbconn.php"; 
            $query = "SELECT * FROM tbl_images ORDER BY id DESC limit 6 ";  
            $result = mysqli_query($connect, $query);  
            while($row = mysqli_fetch_array($result))  
            {  
               echo '  
                  <div class="col-md-4 text-center mb-3">
                        <div class="border p-3 roundBorder divheight">
                           <img src="data:image/jpeg;base64,'.base64_encode($row['image_up'] ).'" class="bd-placeholder-img rounded-circle" width="140" height="140" />
                           <h2>'.$row['title'].'</h2>
                           <p class="text-left"> '.$row["course_content"].'</p>
                           <table>
                              <tr>
                                 <td>
                                    <a class="btn btn-primary" href="#" onClick="alert(';
                                    if($_SESSION['temp'] == FALSE){
                                       echo'\'Please LogIn to Enroll!\'';
                                    }else{
                                       echo'
                                          \'Dear '.$_SESSION['username'].', Thanks for choosing Learn Academy. \nWe will contact you through your mail - '.$_SESSION['email'].'\'
                                       ';
                                    }echo')">Enroll »</a>
                                    <input type="submit" name="price" id="price" value="RS - '.$row["price"].'" class="btn btn-info moveright" /> 
                                 </td>
                              </tr>
                           </table>
                        </div>
                  </div>
               ';  
            }  
            ?>   
         </div>
         <div class="pt-2 d-flex justify-content-center"> <a class="py-2 btn btn-danger px-4" href="./adminf/admin.php">View All Courses</a> </div>
      </div>

      <div class="container mb-5 mt-5 overflow-auto" style='padding-top: 120px; padding-bottom: 120px;'>
         <div class="row">
            <div class="col-md-6 overflow-hidden">
               <img src="./imagesf/man2.jpg" alt="Mike" style="">
            </div>
            <div class="col-md-6 text-justify p-5">
               <h1 class="text-primary text-left mb-4">Get a certificate</h1>
               <p >The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
               <br />
               <div class="pt-2 pb-3"> <a class="py-2 btn btn-danger px-4" href="./signupf/signup.html">Join Now For Free</a> </div>
            </div>
         </div>
      </div>

      <!-- footer -->
      <div id="footer"></div>

	</body>
</html>