<?php
    session_start();
    include "../dbconn.php";

    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $pass = md5($pass);
    $adminpass = md5("admin");

    $query = "SELECT * FROM signup WHERE username='$uname' AND password='$pass'";  
    $result = mysqli_query($connect, $query); 

    if(!$row = $result->fetch_assoc()){
        echo "<script>
            alert('Invalid Username or Password!');
            window.location.href = 'login.html'
        </script>"; 
    } elseif ($pass == $adminpass) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['sort'] = $row['sort'];
        $_SESSION['email'] = $row['email'];

        header("location:../adminf/admin.php");
    } else {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['sort'] = $row['sort'];
        $_SESSION['email'] = $row['email'];
        header("location:../index.php");
    }
?>