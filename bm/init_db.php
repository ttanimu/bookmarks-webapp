<?
$c=mysql_connect('localhost','web','password');
if(!$c){
    die(mysql_error());
}
$d=mysql_select_db('bookmarks_webapp',$c);
if(!$d){
    die(mysql_error());
}
mysql_set_charset('utf8');
?>