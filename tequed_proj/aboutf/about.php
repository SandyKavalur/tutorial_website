<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script><link rel="stylesheet" href="style.css">

    <!-- fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about.css">

    <script> 
      $(function(){
        $("#footer").load("../footer.html"); 
      });
    </script> 
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
            <a class="navbar-brand text-white" href="../index.php"><i class="fa fa-graduation-cap fa-lg mr-2"></i>Learn Academy</a>
            <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nvbCollapse">
                    <ul class="navbar-nav ml-auto">
                        <?php
                            if($_SESSION['temp']){echo'
                                <li class="nav-item active pl-1">
                                    <a class="nav-link" href="#"><i class="fa fa-user fa-fw mr-1"></i>'.$_SESSION['username'].'</a>
                                </li>';}?>
                        <?php
                            if(!$_SESSION['temp']){echo'
                            <li class="nav-item pl-1">
                                <a class="nav-link" href="../signupf/signup.html"><i class="fa fa-user-plus fa-fw mr-1"></i>Sign Up</a>
                            </li>
                            <li class="nav-item pl-1">
                                <a class="nav-link" href="../loginf/login.html"><i class="fa fa-user-plus fa-fw mr-1"></i>Login</a>
                            </li>';
                            }else{echo'
                            <li class="nav-item pl-1">
                                <a class="nav-link" href="../logoutf/logout.php"><i class="fa fa-sign-in fa-fw mr-1"></i>Log Out</a>
                            </li>';
                            }
                        ?>
                    </ul>
            </div>
        </div>
    </nav>
    <div class="about-section ">
        <div class="container">
            <h1>About Us </h1>
            <p>
                ‘Learn Academy’
            </p>
            <p class="text-justify">
              Successful people always believe in one thing, learning will help you keep on earning. Learning new skills is no longer a tough job. For beginners, there are several youtube channels and blogs to help you start with. But if you need to become a professional and also love to learn professional tricks, you need something more than watching a youtube channel. Online education websites help you learn many new skills and even if you are a teacher you can share your knowledge via these educational websites. In this list, we provide some of the best courses where you can share these courses with people all around the world.
            
                Learn Academy‘s web based mentoring stage empowers LIVE intelligent learning between an educator and an understudy. It offers individual and 
                gathering classes. On ‘Learn Academy’ an instructor can give customized showing utilizing two-way sound, video and whiteboarding apparatuses where 
                both educator and understudy can see, hear, compose and associate continuously.
            </p>
            <p class="text-justify">
                ‘Learn Academy’ plans for educational 
                committees, focused examinations and has co-curricular courses too. Our mission to improve lives through learning.
            </p>
        </div>
    </div>
      
    <div class="container">
      <h2 class="mt-5" style="text-align:center">Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card mycard">
            <img src="../imagesf/man2.jpg" alt="Jane" style="width:100%; height: 200px;">
            <div class="container">
              <h2>Sandeep Kavalur</h2>
              <p class="title">CEO & Founder</p>
              <p>Handles relations with investors and educators and aim to provide accesible tutorials for everyone.</p>
              <p>abc125@gmail.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card mycard">
            <img src="../imagesf/girl.jpg" alt="Mike" style="width:100%; height: 200px;">
            <div class="container">
              <h2>Saloni Dhar</h2>
              <p class="title">Director</p>
              <p>Directs and handles operations regarding courses and manages business partners to keep the company functioning.</p>
              <p>lmn123@gmail.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card mycard">
            <img src="../imagesf/man1.jpg" alt="John" style="width:100%; height: 200px;">
            <div class="container">
              <h2>Prasad Shivam</h2>
              <p class="title">Co-Founder</p>
              <p>Manages the staff and looks after the user experience to provide the best experience for our users.</p>
              <p>xyz@gmail.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <div id="footer"></div>
</body>
</html>