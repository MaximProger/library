<?php
require './connected_db.php';

if(!empty($_GET['id']))
{
    $del = "DELETE FROM books WHERE `id` = '{$_GET['id']}'";}

if ($conn ->query($del) === TRUE) {
    $res = ' /BooksList.php?delete=TRUE';
} else {
    $res = ' /BooksList.php?delete=FALSE';
}
header("Location: $res");
$del->close();
?>