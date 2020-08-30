<!doctype html>
<html>
	<head>
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
            });
         </script> 

         <title> landing-page </title>
	</head>
	<body>
      <!--- Navbar --->
      <nav class="navbar navbar-expand-lg ">
         <div class="container">
            <a class="navbar-brand text-white" href="#"><i class="fa fa-graduation-cap fa-lg mr-2"></i>BLOG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nvbCollapse">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active pl-1">
                     <a class="nav-link" href="#"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./reviewf/review.html"><i class="fa fa-th-list fa-fw mr-1"></i>Review</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./aboutf/about.html"><i class="fa fa-info-circle fa-fw mr-1"></i>About Us</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./contactf/contact.html"><i class="fa fa-info-circle fa-fw mr-1"></i>Contact Us</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./signupf/signup.html"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Sign Up</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./loginf/login.html"><i class="fa fa-user-plus fa-fw mr-1"></i>Login</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="adminf/admin.php"><i class="fa fa-sign-in fa-fw mr-1"></i>Admin?</a>
                  </li>
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
                  <h5>Slider One Item</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="https://i.postimg.cc/pVzg3LWn/2.jpg" alt="Second slide">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Slider One Item</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="https://i.postimg.cc/0y2F6Gpp/3.jpg" alt="Third slide">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Slider One Item</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
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
      
      <!-- alert -->
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Semester End Sale!</strong> You can now print your thesis for only Rs 200.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
         </button>
      </div>
   
      <!-- Welcome window -->
      <div class="container mt-3">
         <div class="jumbotron">
            <h1 class="display-4">Welcome to Raman Stationary!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
               featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
         </div>
      </div>
   
   
      <!-- Course Content -->
      <div class="container">
         <div class="row">
            <?php  
            include "dbconn.php"; 
            $query = "SELECT * FROM tbl_images ORDER BY id DESC  ";  
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
                                    <a class="btn btn-primary" href="#" role="button">Enroll »</a>
                                    <input type="submit" name="delete" id="delete" value="RS - '.$row["price"].'" class="btn btn-info moveright" /> 
                                 </td>
                              </tr>
                           </table>
                        </div>
                  </div>
               ';  
            }  
            ?>   
         </div>
      </div>

      <!-- footer -->
      <div id="footer"></div>

	</body>
</html>