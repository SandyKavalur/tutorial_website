<?php
    include "../dbconn.php";

    $name = $_POST['uname'];
    $email = $_POST['email'];
    $msg = $_POST['txt'];

    if (isset($_POST['submit'])){
        if (empty($name) || empty($email) || empty($msg))
        {
            header("Location: contact.html");
            exit();
        }
        $query = "INSERT INTO contact_us(name, email, msg) VALUES ('$_POST[uname]', '$_POST[email]', '$_POST[txt]')";  
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
