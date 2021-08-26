<?php
header("Content-type: text/csv; charset=utf-8");
header("Content-Disposition: attachment; filename=bookmarks.csv");
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
    print('"'.$u.'","'.$t.'","'.$l.'",'.$dt.',"'.$c.'"'."\n");
}
require("term_db.php");
?>
