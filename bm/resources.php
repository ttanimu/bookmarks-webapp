<?php
$lg=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
if(strstr($lg,"ja")){ /* Japanese */
    $R_TITLE='ttanimu Bookmarks';
    $R_ADD_BM='ブックマークの追加';
    $R_DEL_BM='ブックマークの削除';
    $R_BM_TITLE='表題';
    $R_BM_URL='URL';
    $R_DEL='削除';
    $R_DELETED='削除しました';
    $R_ADD='追加';
    $R_ADDED='追加しました';
    $R_FAILED='失敗しました';
} else { /* english */
    $R_TITLE='ttanimu Bookmarks';
    $R_ADD_BM='Add bookmark';
    $R_DEL_BM='Delete bookmark';
    $R_BM_TITLE='Title';
    $R_BM_URL='URL';
    $R_DEL='Delete';
    $R_DELETED='Deleted';
    $R_ADD='Add';
    $R_ADDED='Added';
    $R_FAILED='Failed';
}
?>
