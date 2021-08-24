<?php
$un=$_SERVER['PHP_AUTH_USER'];
$urs=mysqli_query($d,'SELECT id FROM users WHERE name="'.$un.'"');
if(!$urs){
    die(mysqli_error($d));
}
$ui=0;
if($ur=mysqli_fetch_assoc($urs)){
    $ui=$ur['id'];
}
?>
