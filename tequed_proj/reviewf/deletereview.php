<?php

include "../dbconn.php";
$id = $_GET['id'];
$del = mysqli_query($connect,"delete from stars where id = '$id'"); 

if($del)
{
    mysqli_close($connect); 
    header("location:./review.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>