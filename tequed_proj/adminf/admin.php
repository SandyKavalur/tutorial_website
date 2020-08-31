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
          <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  

           <!-- CSS only -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

          <!-- JS, Popper.js, and jQuery -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script><link rel="stylesheet" href="style.css">

          <link rel="stylesheet" type="text/css" href="admin.css"> 
     </head>  
     <body >  
          <br /><br />  
          <div class="container" >  <div class="mypadding">
               <div class="border p-4 roundBorder bg-white">
                    <h3 align="center">Insert and Display </h3>  
                    <br />  
                    <form method="post" enctype="multipart/form-data">  
                         <input class="mb-2 " type="file" name="image" id="image" />  <br />
                         <input class="col-md-12 mb-3 rounded myborder mybg" placeholder="Title" type="text" id="title" name="title" />  <br />  
                         <textarea rows="5" class="col-md-12 rounded mybg" placeholder="Enter the course content..." type="text" name="txt" id="txt" ></textarea>  <br />
                         <input class="col-md-12 mb-3 rounded myborder mybg" placeholder="Enter Price" type="number" id="price" name="price" />  <br />  
                         <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                    </form> 
               </div> </div>
               <br />  
               <br />  
               <div class="container">
                    <div class="row">
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
                                                       <td>
                                                            <a href="./delete.php?id='. $row['id'] .'" class="btn btn-danger">Delete</a> 
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
          </div>  
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