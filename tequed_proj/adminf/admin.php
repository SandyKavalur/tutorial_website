<?php  
include "../dbconn.php"; 
if(isset($_POST["insert"]))  
{  
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     $query = "INSERT INTO tbl_images(image_up, title, course_content, price) VALUES ('$file', '$_POST[title]', '$_POST[txt]','$_POST[price]')";  
     if (!mysqli_query($connect, $query))
     {
          die('Error: ' . mysqli_error($connect));
     }
} 
?>  
<!DOCTYPE html>  
<html>  
     <head>  
          <title>Learn Academy</title>  

           <!-- CSS only -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

          <!-- JS, Popper.js, and jQuery -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script><link rel="stylesheet" href="style.css">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <link rel="stylesheet" type="text/css" href="admin.css"> 

          <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

          <script> 
               $(function(){
                    $("#footer").load("../footer.html"); 
               });
          </script>
     </head>  
     <body >  
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
                              <li class="nav-item active pl-1">
                                   <a class="nav-link" href="#"><i class="fa fa-user fa-fw mr-1"></i><?php echo $_SESSION['username'];?></a>
                              </li>
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


          <br /><br />  
          <?php
          if (!$_SESSION['username']) {
               header("Location: ../loginf/login.html");
          }
          $adminpass = md5("admin");
          if($_SESSION['password'] == $adminpass){
               echo '
               <div class="container" style="padding-top: 100px;">  <div class="mypadding">
                    <div class="border p-4 roundBorder bg-white">
                         <h3 align="center">Insert and Display </h3>  
                         <br />  
                         <form method="post" enctype="multipart/form-data">  
                              <input class="mb-2 " type="file" name="image" id="image" />  <br />
                              <input class="col-md-12 mb-3 rounded myborder mybg" placeholder="Title" type="text" id="title" name="title" />  <br />  
                              <textarea rows="5" class="col-md-12 rounded mybg" placeholder="Enter the course content..." type="text" name="txt" id="txt" ></textarea>  <br />
                              <input class="col-md-12 mb-3 rounded myborder mybg" placeholder="Enter Price" type="number" id="price" name="price" />  <br />  
                              <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                              <a href="../reviewf/review.php" name="viewrate" id="viewrate" value="viewrate" style=" padding-left:60%">Visit Review Page!</a>
                         </form> 
                    </div> 
               </div>
               <br />  
               <br />  ';
          }
          ?>
               <div class="container " >
                    <div class="row" style="padding-top: 100px;">
                         <?php  
                         $query = "SELECT * FROM tbl_images ORDER BY id DESC  ";  
                         $result = mysqli_query($connect, $query);  
                         while($row = mysqli_fetch_array($result))  
                         {  
                              echo '  
                                   
                                   <div class="col-md-4 text-center mb-3 ">
                                        <div class="border p-3 roundBorderbg divheight">
                                             <img src="data:image/jpeg;base64,'.base64_encode($row['image_up'] ).'" class="bd-placeholder-img rounded-circle" width="140" height="140" />
                                             <h2>'.$row['title'].'</h2>
                                             <p class="text-left"> '.$row["course_content"].'</p>
                                             <table>
                                                  <tr>
                                                       <td>';
                                                       if($_SESSION['password'] == $adminpass){echo'
                                                            <a href="./delete.php?id='. $row['id'] .'" class="btn btn-danger">Delete</a>';
                                                       } else {echo'
                                                            <a class="btn btn-primary" href="#" onClick="alert(';
                                                            if($_SESSION['temp'] == FALSE){
                                                                 echo'\'Please LogIn to Enroll!\'';
                                                            }else{
                                                                 echo'
                                                                      \'Dear '.$_SESSION['username'].', Thanks for choosing Learn Academy. \nWe will contact you through your mail - '.$_SESSION['email'].'\'
                                                                 ';
                                                            }echo')">Enroll »</a> ';
                                                       }echo'
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
               </div>
          </div>
          <!-- footer -->
          <div id="footer"></div>  
     </body>  
</html>  
<script>  
$(document).ready(function(){  
     $('#insert').click(function(){  
          var image_name = $('#image').val();  
          if(image_name == '')  
          {  
               alert("Please Select Image");  
               return false;  
          }  
          else  
          {  
               var extension = $('#image').val().split('.').pop().toLowerCase();  
               if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
               {  
                    alert('Invalid Image File');  
                    $('#image').val('');  
                    return false;  
               }  
          }  
     });  
});  
</script>