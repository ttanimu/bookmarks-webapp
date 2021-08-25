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
$l=$_POST['label'];
if(!strlen($l)){
    $l=$_GET['label'];
}
?>
<form action="./index.php" method="post">
    <label for="label"><?php echo $R_SEARCH_LABEL; ?></label>
    <input type="text" id="label" name="label" value="<?php echo $l; ?>"/>
    <input type="submit" value="<?php echo $R_SEARCH; ?>" />
    <a href="./labels.php"><?php echo $R_LABELS; ?></a><br />
</form>
<hr />
<?php
require("init_db.php");
$s='SELECT url,title FROM bookmarks WHERE user='.$ui;
if(strlen($l)){
    $s.=" AND labels like '%".$l."%';";
} else {
    $s.=';';
}
$r=mysqli_query($d,$s);
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
