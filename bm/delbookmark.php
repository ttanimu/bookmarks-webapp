<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>bookmarks</title>
</head>
<body>
<h1>Delete bookmark</h1>
<?php
require("init_db.php");
$r=mysqli_query($d,'SELECT id,title FROM bookmarks');
if(!$r){
    die(mysqli_error());
}
while($j=mysqli_fetch_assoc($r)){
    $i=$j['id'];
    $t=$j['title'];
    print('<a href="./delbookmark_proc.php?id='.$i.'">Delete ['.$t."]</a><br />\n");
}
require("term_db.php");
?>
</body>
</html>
