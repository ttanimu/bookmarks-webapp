<!doctype html>
<?php require("resources.php"); ?>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $R_TITLE; ?></title>
</head>
<body>
<h1><?php echo $R_ADD_BM; ?></h1>
<form action="./addbookmark.php" method="post">
    <div>
        <label for="title"><?php echo $R_BM_TITLE; ?></label>
        <input type="text" id="title" name="title" />
    </div>
    <div>
        <label for="url"><?php echo $R_BM_URL; ?></label>
        <input type="text" id="url" name="url" />
    </div>
    <div>
        <label for="labels"><?php echo $R_BM_LABELS; ?></label>
        <input type="text" id="labels" name="labels" />
    </div>
    <input type="submit" value="<?php echo $R_ADD; ?>" />
</form>
</body>
</html>
