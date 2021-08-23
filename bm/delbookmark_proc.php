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
require("init_db.php");
$s="DELETE FROM bookmarks WHERE id=".$i.";";
$r=mysql_query($s);
if(!$r){
    die(mysql_error());
}
print($i." OK\n");
require("term_db.php");
?>
</body>
</html>
