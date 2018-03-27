<?php
$f_uri = $_SERVER['REQUEST_URI'];
$pg=explode("/",$f_uri);
$page=$pg[(sizeof($pg) - 1)];
if($page=="")$page="index.php";
?>