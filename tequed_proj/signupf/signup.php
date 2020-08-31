<?php
    include "../dbconn.php";
    if (isset($_POST['submit']))
        {
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $pass = md5($pass);
        $sort = $_POST['sort'];
        $email = $_POST['email'];

        $sql_u = "SELECT * FROM signup WHERE username='$uname'";
        $res_u = mysqli_query($connect, $sql_u);

        if (mysqli_num_rows($res_u) > 0){
            echo "<script>
                alert('Sorry... username already taken');
                window.location.href = 'signup.html'
            </script>";
        }else{
            $query = "INSERT INTO signup(username, password, sort, email) VALUES ('$_POST[username]', '$pass', '$sort', '$email')";  
            $result = mysqli_query($connect, $query);  

            if($result)
            {
                header("location:../loginf/login.html"); 
                exit;	
            }
            else
            {
                echo "Something went wrong!"; 
            }
        }
    }
?>
