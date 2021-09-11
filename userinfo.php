<?php

$server = "sql208.epizy.com";
$username = "epiz_28612748";
$password = "Ye8xDhnkRiK";
$dbname = "epiz_28612748_packetcodeofficial";
$con = mysqli_connect($server, $username, $password, $dbname);

if($con){
    //echo "hi";
}
mysqli_select_db($con, 'portfolio');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$sql = " insert into contact (user, email, mobile, comment)
             values('$user', '$email', '$mobile', '$comment') ";
$res = mysqli_query($con, $sql);
header('location:index.php');

?>