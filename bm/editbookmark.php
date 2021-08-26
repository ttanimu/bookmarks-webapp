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
require("init_db.php");
$r=mysqli_query($d,'SELECT id,title FROM bookmarks WHERE user='.$ui.';');
if(!$r){
    die(mysqli_error());
}
while($j=mysqli_fetch_assoc($r)){
    $i=$j['id'];
    $t=$j['title'];
    print('<a href="./editbookmark_set.php?id='.$i.'">'.$R_EDIT.' ['.$t."]</a><br />\n");
}
require("term_db.php");
?>
</body>
</html>
