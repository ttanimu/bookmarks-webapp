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
$s='SELECT * FROM bookmarks WHERE user='.$ui.';';
$r=mysqli_query($d,$s);
if(!$r){
    die(mysqli_error($d));
}
while($j=mysqli_fetch_assoc($r)){
    $u=$j['url'];
    $t=$j['title'];
    $l=$j['labels'];
    $dt=$j['reg_date'];
    $c=$j['comment'];
    print('<a href="'.$u.'">'.$t.'</a>  ('.$l.','.$dt.','.$c.")<br />\n");
}
require("term_db.php");
?>
</body>
</html>
