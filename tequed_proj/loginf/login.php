<?php
    include "../dbconn.php";

    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $pass = md5($pass);

    $query = "SELECT * FROM signup WHERE username='$uname' AND password='$pass'";  
    $result = mysqli_query($connect, $query); 

    if(!$row = $result->fetch_assoc()){
        echo "Error deleting record"; 
    } else {
        $_SESSION['name'] = $_POST['username'];

        header("location:../adminf/admin.php");
    }
?>