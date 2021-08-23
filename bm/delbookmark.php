<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>bookmarks</title>
</head>
<body>
<h1>Delete bookmark</h1>
<?
require("init_db.php");
$r=mysql_query('SELECT id,title FROM bookmarks');
if(!$r){
    die(mysql_error());
}
while($j=mysql_fetch_assoc($r)){
    $i=$j['id'];
    $t=$j['title'];
    print('<a href="./delbookmark_proc.php?id='.$i.'">Delete ['.$t."]</a><br />\n");
}
require("term_db.php");
?>
</body>
</html>
