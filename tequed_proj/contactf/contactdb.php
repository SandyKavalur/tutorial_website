<?php
    include "../dbconn.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $msg = $_POST['msg'];

    if (isset($_POST['submit'])){
        if (empty($name) || empty($email) || empty($phno) || empty($msg))
        {
            header("Location: contact.html");
            exit();
        }
        $query = "INSERT INTO contact_us(name, email, phno, msg) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phno]', '$_POST[msg]')";  
        $result = mysqli_query($connect, $query);  

        if($result)
        {
            header("location:../index.php"); 
            exit;	
        }
        else
        {
            echo "Something went wrong!"; 
        }
    }
?>
