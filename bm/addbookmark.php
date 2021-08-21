<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>bookmarks</title>
</head>
<body>
<h1>Added bookmark</h1>
<?
$t=$_POST['title'];
$u=$_POST['url'];
$c=mysql_connect('localhost','web','password');
if(!$c){
    die(mysql_error());
}
$d=mysql_select_db('bookmarks_webapp',$c);
if(!$d){
    die(mysql_error());
}
mysql_set_charset('utf8');
$s="INSERT INTO bookmarks(url,title) VALUES ('".$u."','".$t."');";
$r=mysql_query($s);
if(!$r){
    die(mysql_error());
}
print("OK\n");
mysql_close($c);
?>
</body>
</html>
