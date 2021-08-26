<!doctype html>
<?php require("resources.php"); ?>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $R_TITLE; ?></title>
</head>
<body>
<h1><?php echo $R_EDIT_BM; ?></h1>
<?php
$t=$_POST['title'];
$u=$_POST['url'];
$l=$_POST['labels'];
$c=$_POST['comment'];
$i=$_POST['id'];
require("init_db.php");
$s="UPDATE bookmarks SET url='".$u."',title='".$t."',labels='".$l."',comment='".$c."' WHERE id=".$i." AND user=".$ui.";";
$r=mysqli_query($d,$s);
if(!$r){
    die($R_FAILED);
}
echo $R_EDITED;
require("term_db.php");
?>
</body>
</html>
