<?php
$referal = $_REQUEST['referal'];

define("DB_HOST", "localhost");
define("DB_NAME", "host1382121_bible"); //Имя базы
define("DB_USER", "root"); //Пользователь
define("DB_PASSWORD", ""); //Пароль
//define("DB_USER","host1382121"); //Пользователь
//define("DB_PASSWORD","15b47f6a"); //Пароль
define("PREFIX", ""); //Префикс если нужно
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$mysqli->query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
if (!empty($referal)) { //Принимаем данные
    //$referal = trim(strip_tags(stripcslashes(htmlspecialchars($referal))));
    $db_referal = $mysqli->query("SELECT distinct text, book_name, chapter_id, verse_id from " . PREFIX . "bible WHERE text LIKE '%$referal%' group by text")
    or die('Ошибка №' . __LINE__ . '<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
    while ($row = $db_referal->fetch_array()) {
        $pos = strpos($row["text"], $referal);
        $text = substr_replace($row["text"], '<span style="color:red;">' . $referal . "</span>", $pos, 2 * iconv_strlen($referal));
        echo "\n<li><span style=\"color:green;\">" . $row["book_name"] . ' ' . $row["chapter_id"] . ':' . $row["verse_id"] . '</span> - ' . $text . "</li>"; //$row["name"] - имя поля таблицы
    }
}
?>
