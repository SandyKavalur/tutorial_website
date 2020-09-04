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