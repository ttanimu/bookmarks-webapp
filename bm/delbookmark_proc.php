<!doctype html>
<?php require("resources.php"); ?>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $R_TITLE; ?></title>
</head>
<body>
<h1><?php echo $R_DEL_BM; ?></h1>
<?php
$i=$_GET['id'];
require("init_db.php");
$s="DELETE FROM bookmarks WHERE id=".$i.";";
$r=mysqli_query($d,$s);
if(!$r){
    die($R_FAILED);
}
echo $R_DELETED;
require("term_db.php");
?>
</body>
</html>
