<!doctype html>
<?php require("resources.php"); ?>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $R_TITLE; ?></title>
</head>
<body>
<h1><?php echo $R_TITLE; ?></h1>
<?php
require("init_db.php");
$r=mysqli_query($d,'SELECT url,title FROM bookmarks');
if(!$r){
    die(mysqli_error($d));
}
while($i=mysqli_fetch_assoc($r)){
    $u=$i['url'];
    $t=$i['title'];
    print('<a href="'.$u.'">'.$t."</a><br />\n");
}
require("term_db.php");
?>
<hr />
<a href="./addbookmark_set.php"><?php echo $R_ADD_BM; ?></a><br />
<a href="./delbookmark.php"><?php echo $R_DEL_BM; ?></a><br />
</body>
</html>
