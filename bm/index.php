<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>bookmarks</title>
</head>
<body>
<h1>Bookmarks</h1>
<?
require("init_db.php");
$r=mysql_query('SELECT url,title FROM bookmarks');
if(!$r){
    die(mysql_error());
}
while($i=mysql_fetch_assoc($r)){
    $u=$i['url'];
    $t=$i['title'];
    print('<a href="'.$u.'">'.$t."</a><br />\n");
}
require("term_db.php");
?>
<hr />
<a href="./addbookmark.html">Add bookmark</a><br />
<a href="./delbookmark.php">Delete bookmark</a><br />
</body>
</html>
