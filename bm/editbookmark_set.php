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
$i=$_GET['id'];
require("init_db.php");
$s='SELECT * FROM bookmarks WHERE user='.$ui.' AND id='.$i.';';
$r=mysqli_query($d,$s);
if(!$r){
    die(mysqli_error($d));
}
$j=mysqli_fetch_assoc($r);
if($j){
    $u=$j['url'];
    $t=$j['title'];
    $l=$j['labels'];
    $dt=$j['reg_date'];
    $cm=$j['comment'];
}
require("term_db.php");
?>
<form action="./editbookmark_proc.php" method="post">
    <div>
        <label for="title">ID</label>
        <input type="text" id="id" name="id" value="<?php echo $i; ?>" readonly />
    </div>
    <div>
        <label for="title"><?php echo $R_BM_TITLE; ?></label>
        <input type="text" id="title" name="title" value="<?php echo $t; ?>" />
    </div>
    <div>
        <label for="url"><?php echo $R_BM_URL; ?></label>
        <input type="text" id="url" name="url" value="<?php echo $u; ?>" />
    </div>
    <div>
        <label for="labels"><?php echo $R_BM_LABELS; ?></label>
        <input type="text" id="labels" name="labels" value="<?php echo $l; ?>" />
    </div>
    <div>
        <label for="comment"><?php echo $R_BM_COMMENT; ?></label>
        <input type="text" id="comment" name="comment" value="<?php echo $cm; ?>" />
    </div>
    <?php echo $dt; ?><br />
    <input type="submit" value="<?php echo $R_EDIT; ?>" />
</form>
</body>
</html>
