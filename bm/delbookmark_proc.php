<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>bookmarks</title>
</head>
<body>
<h1>Deleted bookmark</h1>
<?
$i=$_GET['id'];
$c=mysql_connect('localhost','web','password');
if(!$c){
    die(mysql_error());
}
$d=mysql_select_db('bookmarks_webapp',$c);
if(!$d){
    die(mysql_error());
}
mysql_set_charset('utf8');
$s="DELETE FROM bookmarks WHERE id=".$i.";";
$r=mysql_query($s);
if(!$r){
    die(mysql_error());
}
print($i." OK\n");
mysql_close($c);
?>
</body>
</html>
