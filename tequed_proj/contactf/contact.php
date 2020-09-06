<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="contact.css"> 

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Hello, world!</title>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
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
        <div class="container d-flex align-items-center min-vh-100">
            <div class="container row jumbotron">
                <div class="col-md-8 ">
                    <h3 class="pb-3 text-primary">Get in Touch</h3>
                    <form action="contactdb.php" method="post" enctype="multipart/form-data">  
                        <div class="form-row">
                            <textarea rows="7" class="col-md-12 px-4 py-2 rounded " placeholder="Enter your message..." type="text" name="txt" id="txt" required></textarea>  <br />
                            <div class="col-md-6  form-group">
                                <input class="mt-3 rounded form-control" placeholder="Enter Your Name" type="text" id="uname" name="uname" required/>  <br />  
                            </div>
                            <div class="col-md-6  form-group">
                                <input class="mt-3 rounded form-control" placeholder="Enter Your Email" type="email" id="email" name="email" required/>  <br />  
                            </div>
                            <input class="col-md-12 mb-4 mt-n2 p-2 rounded myborder" placeholder="Enter Subject" type="text" id="subject" name="subject" />  <br />  
                            <input type="submit" name="submit" id="submit" value="SEND" class="btn border-success px-4" onclick="alert('Thanks for choosing Learn Academy. We\'ll contact you soon. ');"/>  
                            <a href="../reviewf/review.php" name="viewrate" id="viewrate" value="viewrate" style=" padding-left:60%">Visit Review Page!</a>
                        </div>
                   </form> 

                </div>
                <div class="col-md-4 my-5 ">
                    <footer>
                        <div class=" pt-2 mt-2">
                            <div class="card bg-secondary mb-n1 border-0">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white display-4" style="font-size:30px">İletişim</h5>
                                <a class="text-light d-block lead" style="margin-left: -20px" href="#"><i class="fa fa-phone mr-2"></i>+90 (000) 000 0 000</a>
                                <a class="text-light d-block lead" href="#"><i class="fa fa-envelope mr-2"></i>admin@localhost.com</a>
                            </div>
                            </div>
                        </div>
                        
                        <div class="">
                            <div class="card bg-secondary border-0">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white display-4" style="font-size:30px">Sosyal Medya</h5>
                        
                                <a class="text-light" href="#"><i class="fa fa-facebook-square fa-fw fa-2x"></i></a>
                            
                                <a class="text-light" href="#"><i class="fa fa-twitter-square fa-fw fa-2x"></i></a>
                            
                                <a class="text-light" href="#"><i class="fa fa-instagram fa-fw fa-2x"></i></a>
                            
                                <a class="text-light" href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                            </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>