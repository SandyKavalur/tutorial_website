<?php

$connect = mysqli_connect("localhost","root","","playgrounddb");

if(!$connect)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>