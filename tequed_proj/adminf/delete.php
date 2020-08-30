<?php

include "../dbconn.php";
$id = $_GET['id'];
$del = mysqli_query($connect,"delete from tbl_images where id = '$id'"); 

if($del)
{
    mysqli_close($connect); 
    header("location:./admin.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>