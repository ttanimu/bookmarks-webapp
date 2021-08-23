<?
$d=mysqli_connect('localhost','web','password','bookmarks_webapp');
if(mysqli_connect_errno()>0){
    die(mysqli_connect_error());
}
mysqli_set_charset($d,'utf8');
?>
