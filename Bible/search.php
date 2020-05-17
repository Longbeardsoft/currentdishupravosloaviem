<?php
echo '<pre>';print_r($_REQUEST);echo '</pre>';
define("DB_HOST","localhost");
define("DB_NAME","host1382121_bible"); //Имя базы
define("DB_USER","root"); //Пользователь
define("DB_PASSWORD",""); //Пароль
//define("DB_USER","host1382121"); //Пользователь
//define("DB_PASSWORD","15b47f6a"); //Пароль
define("PREFIX",""); //Префикс если нужно
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
if(!empty($_POST["referal"])){ //Принимаем данные
    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
    $db_referal = $mysqli -> query("SELECT text from ".PREFIX."bible WHERE text LIKE '%$referal%'")
    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
    while ($row = $db_referal -> fetch_array()) {
        echo "\n<li>".$row["text"]."</li>"; //$row["name"] - имя поля таблицы
    }
}
//$_POST["referal"]='слово';

echo $_REQUEST['referal'];
?>
