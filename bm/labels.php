<!doctype html>
<?php require("resources.php"); ?>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $R_TITLE; ?></title>
</head>
<body>
<h1><?php echo $R_LABELS; ?></h1>
<?php
require("init_db.php");
$s='SELECT labels FROM bookmarks WHERE user='.$ui;
$r=mysqli_query($d,$s);
if(!$r){
    die(mysqli_error($d));
}
$labels=array();
while($i=mysqli_fetch_assoc($r)){
    $ls=$i['labels'];
    $l=split(' ',$ls);
    foreach($l as $k){
        $labels[]=$k;
    }
}
asort($labels);
$labels1=array_unique($labels);
foreach($labels1 as $j){
    print('<a href="./index.php?label='.$j.'">'.$j."</a><br />\n");
}
require("term_db.php");
?>
</body>
</html>
