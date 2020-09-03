<?php
    if (session_status() == PHP_SESSION_NONE) {
        header("Location: ../loginf/login.html");
        exit();
    }
    include "../dbconn.php";

    
    if (isset($_POST['save'])) {
        $ratedIndex = $_POST['ratedIndex'];
        $review = $_POST['review'];
        $ratedIndex++;

        $connect->query("INSERT INTO stars (ratedIndex, review, username) VALUES ('$ratedIndex', '$review', '$_SESSION[username]')");
    }

    $sql = $connect->query("SELECT id FROM stars");
    $numR = $sql->num_rows;

    $sql = $connect->query("SELECT SUM(ratedIndex) AS total FROM stars");
    $rData = $sql->fetch_array();
    $total = $rData['total'];

    if($numR == 0){
        $avg = $total / 1;
    }else{
        $avg = $total / $numR;
    }
    
    $sql = $connect->query("SELECT ratedIndex FROM stars WHERE (ratedIndex > 2)");
    $goodr = $sql->num_rows;
    
?>
