<?php
function colorSearchWord($word,$string,$color='violet'){
    return preg_replace('/('.preg_quote($word).')/i','<span style="color:'.$color.';border-bottom:1px dashed '.$color.';">$1</span>', mb_strtolower($string));
}
$referal = mb_strtolower($_REQUEST['referal']);
//$referal = $_REQUEST['referal'];
require_once ('config_db_bible.php');
define("PREFIX", ""); //Префикс если нужно
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$mysqli->query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
if (!empty($referal)) { //Принимаем данные
    //$referal = trim(strip_tags(stripcslashes(htmlspecialchars($referal))));
    $db_referal = $mysqli->query("SELECT distinct text, book_id, book_name, chapter_id, verse_id, translate_id, translate_name from " . PREFIX . "bible WHERE text LIKE '%$referal%' ")
    or die('Ошибка №' . __LINE__ . '<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
    while ($row = $db_referal->fetch_array()) {
        $text=colorSearchWord($referal,$row["text"],'red');
        echo "\n<li id='".$row["book_id"]."-".$row["chapter_id"]."-".$row["verse_id"]."'>".$row["translate_name"]." <span style=\"color:green;\">".$row["book_name"] . ' ' . $row["chapter_id"] . ':' . $row["verse_id"] . '</span> - ' . $text . "</li>"; //$row["name"] - имя поля таблицы
        $i++;
    }
}
?>