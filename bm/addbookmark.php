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
require("init_db.php");
$s="INSERT INTO bookmarks(url,title) VALUES ('".$u."','".$t."');";
$r=mysqli_query($d,$s);
if(!$r){
    die(mysqli_error());
}
print("OK\n");
require("term_db.php");
?>
</body>
</html>
