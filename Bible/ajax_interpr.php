<?php
//header('Content-Type: text/html; charset=windows-1251');
$id_interpr = $_REQUEST['id_interpr'];
$id_interpr++;
$id_book = $_REQUEST['id_book'];
$chapter = $_REQUEST['chapter'];
//$verse = $_REQUEST['verse'];
session_start();
$_SESSION['interpretation']=$id_interpr;
//echo 'id_interpr=' . $id_interpr . " ID_BOOK=" . $id_book . " CHAPTER=" . $chapter . " verse=".$verse." session=".$_SESSION['interpretation'];
?>
