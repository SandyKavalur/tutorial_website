<?php
    include "./adminf/dbConn.php";
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $query = "INSERT INTO signup(username, password) VALUES ($_POST[username]', '$_POST[password]')";  
    $result = mysqli_query($connect, $query);  

    if($del)
    {
        mysqli_close($connect); 
        header("location:./login.html"); 
        exit;	
    }
    else
    {
        echo "Error deleting record"; 
    }
?>

<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="login.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form method="post">
            <p>Username</p>
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Already a member?</a>    
            </form>
        
        
        </div>
    
    </body>
</html>