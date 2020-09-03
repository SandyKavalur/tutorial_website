<!DOCTYPE html>
<html lang="en">
<head>
    <?php
         
        if (session_status() == PHP_SESSION_NONE) {
            session_start(); 
            if(!$_SESSION['username']){
                header("Location: ../loginf/login.html");
                exit();
            }
        }
        
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <link rel="stylesheet" type="text/css" href="review.css"> 
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script><link rel="stylesheet" href="style.css">

    <!-- fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <script> 
        $(function(){
            $("#footer").load("../footer.html"); 
        });
    </script> 
</head>
<body>
    <?php 
        include "./rating.php";
        if($avg < '1.66'){
            $tab = 'red-tab';
        }elseif($avg > '1.66' and $avg < '3.6'){
            $tab = 'yellow-tab';
        }else{
            $tab = 'green-tab';
        }
    ?>
    <div class="container-fluid px-0 py-5 mx-auto">
        <div class="row justify-content-center mx-0 mx-md-auto">
            <div class="col-lg-10 col-md-11 px-1 px-sm-2">
                <div class="card border-0 px-3">
                    <!-- top row -->
                    <div class="d-flex row py-5 px-5 bg-light">
                        <div class="<?php echo $tab ?> p-2 px-3 mx-2 ">
                            <p class="sm-text mb-0">OVERALL RATING</p>
                            <h4>
                                <?php
                                    echo round($avg, 2);
                                ?>
                            </h4>
                        </div>
                        <div class="white-tab p-2 mx-2 text-muted">
                            <p class="sm-text mb-0">TOTAL REVIEWS</p>
                            <h4><?php echo $numR ?></h4>
                        </div>
                        <div class="white-tab p-2 mx-2">
                            <p class="sm-text mb-0 text-muted">POSITIVE REVIEWS</p>
                            <h4 class="green-text"><?php  echo $goodr ?></h4>
                        </div>
                        
                    </div> <!-- middle row -->
                    
                    <form class="overflow-auto">
                        <textarea class="ml-4 rounded col-md-11" style=' max-width:90%; min-width:100px' rows="4" name="msg" id="msg" placeholder="Your message.." required></textarea><br />
                        <i class="fa fa-star fa-2x pl-4" data-index="0"></i>
                        <i class="fa fa-star fa-2x" data-index="1"></i>
                        <i class="fa fa-star fa-2x" data-index="2"></i>
                        <i class="fa fa-star fa-2x" data-index="3"></i>
                        <i class="fa fa-star fa-2x" data-index="4"></i>
                        <br><br>
                        <div class=" pl-4 pt-2 pb-3"> <button class="py-2 btn-red px-4 postreview">POST REVIEW</button> </div>
                    </form>

                    
                    <?php  
                        $query = "SELECT * FROM stars ORDER BY id DESC  ";  
                        $result = mysqli_query($connect, $query);  
                        
                        while($row = mysqli_fetch_array($result)){
                            if($row["ratedIndex"] < '3'){
                                $dot = 'red-dot';
                                $ctext = 'red-text';
                                $rtext = 'Bad';
                            }elseif($row["ratedIndex"] > '2' and $row["ratedIndex"] < '5'){
                                $dot = 'yellow-dot';
                                $ctext = 'yellow-text';
                                $rtext = 'Good';
                            }else{
                                $dot = 'green-dot';
                                $ctext = 'green-text';
                                $rtext = 'Excellent';
                            }
                            echo'
                                <div class="review px-5 py-3 border-bottom">
                                    <div class="row d-flex pt-3">
                                        <div class="d-flex flex-column pl-2">
                                            <h4><i>User Name:'.$row["username"].'</i></h4>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="fa fa-circle '.$dot.' my-auto rating-dot"></div>
                                        <div class="'.$ctext.'">
                                            <h5 class="mb-0 pl-3">'.$rtext.'</h5>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <p>'.$row["review"].'</p>
                                    </div>';
                                    $adminpass = md5("admin");
                                    if($_SESSION['password'] == $adminpass){
                                        echo'
                                        <div class="row pb-3">
                                            <a href="./deletereview.php?id='. $row['id'] .'" class="btn btn-danger">Delete</a> 
                                        </div>';
                                    }
                                    echo'
                                </div>
                            ';
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div id="footer"></div>
    <script>

        $(document).ready(function () {
            resetStarColors();
            $('.fa-star').on('click', function () {
                ratedIndex = parseInt($(this).data('index'));
            });

            

            $('.postreview').on('click', function () {
                var msg = $("#msg").val();
                if(msg == "") {
                    alert("You need to fill in all the fields");
                }else{
                    saveToTheDB();
                }
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
                url: "rating.php",
                method: "POST",
                dataType: 'json',
                data: {
                    save: 1,
                    ratedIndex: ratedIndex,
                    review: $("#msg").val()
                }
            });
        }
        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'yellow');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'grey');
        }
    </script>
</body>
</html>