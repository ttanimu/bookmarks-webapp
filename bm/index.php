<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>bookmarks</title>
</head>
<body>
<h1>Bookmarks</h1>
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
$r=mysql_query('SELECT url,title FROM bookmarks');
if(!$r){
    die(mysql_error());
}
while($i=mysql_fetch_assoc($r)){
    $u=$i['url'];
    $t=$i['title'];
    print('<a href="'.$u.'">'.$t."</a><br />\n");
}
mysql_close($c);
?>
<hr />
<a href="./addbookmark.html">Add bookmark</a><br />
<a href="./delbookmark.php">Delete bookmark</a><br />
</body>
</html>
