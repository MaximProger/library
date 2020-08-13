<?php
require './connected_db.php';

if(!empty($_GET['id']))
{
    $del = "DELETE FROM authors WHERE `id` = '{$_GET['id']}'";}

if ($conn ->query($del) === TRUE) {
    $res = ' /AuthorsList.php?delete=TRUE';
} else {
    $res = ' /AuthorsLis.php?delete=FALSE';
}
header("Location: $res");
$del->close();
?>