<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>bookmarks</title>
</head>
<body>
<h1>Delete bookmark</h1>
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
$r=mysql_query('SELECT id,title FROM bookmarks');
if(!$r){
    die(mysql_error());
}
while($j=mysql_fetch_assoc($r)){
    $i=$j['id'];
    $t=$j['title'];
    print('<a href="./delbookmark_proc.php?id='.$i.'">Delete ['.$t."]</a><br />\n");
}
mysql_close($c);
?>
</body>
</html>
