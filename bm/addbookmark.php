<!doctype html>
<?php require("resources.php"); ?>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $R_TITLE; ?></title>
</head>
<body>
<h1><?php echo $R_ADD_BM; ?></h1>
<?php
$t=$_POST['title'];
$u=$_POST['url'];
$l=$_POST['labels'];
$c=$_POST['comment'];
require("init_db.php");
$s="INSERT INTO bookmarks(user,url,title,labels,reg_date,comment) VALUES ('".$ui."','".$u."','".$t."','".$l."',cast( now() as date),'".$c."');";
$r=mysqli_query($d,$s);
if(!$r){
    die($R_FAILED);
}
echo $R_ADDED;
require("term_db.php");
?>
</body>
</html>
