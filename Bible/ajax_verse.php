<?php
//header('Content-Type: text/html; charset=windows-1251');
$id_avtor = $_REQUEST['avtor'];
$id_book = $_REQUEST['id_book'];
$chapter = $_REQUEST['chapter'];
$verse = $_REQUEST['verse'];
session_start();
if (isset($_SESSION['interpretation'])) $id_interpr = $_SESSION['interpretation'];
//echo 'id_interpr=' . $id_interpr . "ID_BOOK=" . $id_book . " CHAPTER=" . $chapter . " verse=".$verse." session=".$_SESSION['interpretation'];
switch ($id_interpr) {
    case 1:
    {
        switch ($id_book) {
            case 53:
                $htm_file = '1Co.htm';
                $book_id = 1;
                break;
            case 48:
                $htm_file = '1Jn.htm';
                $book_id = 2;
                break;
            case 46:
                $htm_file = '1Pe.htm';
                $book_id = 3;
                break;
            case 59:
                $htm_file = '1The.htm';
                $book_id = 4;
                break;
            case 61:
                $htm_file = '1Ti.htm';
                $book_id = 5;
                break;
            case 54:
                $htm_file = '2Co.htm';
                $book_id = 6;
                break;
            case 49:
                $htm_file = '2Jn.htm';
                $book_id = 7;
                break;
            case 47:
                $htm_file = '2Pe.htm';
                $book_id = 8;
                break;
            case 60:
                $htm_file = '2The.htm';
                $book_id = 9;
                break;
            case 62:
                $htm_file = '2Ti.htm';
                $book_id = 10;
                break;
            case 50:
                $htm_file = '3Jn.htm';
                $book_id = 11;
                break;
            case 44:
                $htm_file = 'Ac.htm';
                $book_id = 12;
                break;
            case 58:
                $htm_file = 'Col.htm';
                $book_id = 13;
                break;
            case 56:
                $htm_file = 'Eph.htm';
                $book_id = 14;
                break;
            case 55:
                $htm_file = 'Ga.htm';
                $book_id = 15;
                break;
            case 45:
                $htm_file = 'Ja.htm';
                $book_id = 16;
                break;
            case 43:
                $htm_file = 'Jn.htm';
                $book_id = 17;
                break;
            case 65:
                $htm_file = 'Jud.htm';
                $book_id = 18;
                break;
            case 42:
                $htm_file = 'Lk.htm';
                $book_id = 19;
                break;
            case 41:
                $htm_file = 'Mk.htm';
                $book_id = 20;
                break;
            case 40:
                $htm_file = 'Mt.htm';
                $book_id = 21;
                break;
            case 57:
                $htm_file = 'Phl.htm';
                $book_id = 22;
                break;
            case 52:
                $htm_file = 'Ro.htm';
                $book_id = 23;
                break;
            case 63:
                $htm_file = 'Tit.htm';
                $book_id = 24;
                break;
            default:
                $id_book = '-1';
                $book_id = '-1';
                break;
        }
        $avtorInterpretation = 'Феофилакт Болгарский';
    }
    case 2:
    {
        switch ($id_book) {

        }
        $avtorInterpretation = 'Лопухин';
    }
    default:
    {
        $avtorInterpretation = 'Толкователь не выбран';
    }

}

if ($id_book != '-1') {
    include 'spisok.php';
    $fullName = $FullName[$id_book] . ' ' . $chapter . ':' . $verse;
    $host = 'localhost'; // адрес сервера
    $database = "host1382121_bible"; // имя базы данных
    echo "book_id=" . $book_id;
//    $user = 'host1382121'; // имя пользователя
    //  $password = '15b47f6a'; // пароль
    $user = 'root'; // имя пользователя
    $password = ''; // пароль

    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
//echo "Connected successfully";
//echo '$id_interpr='.$id_interpr;
//echo '$chapter='.$chapter;
//echo '$verse='.$verse;
    $sql = "select text from interpretations where avtor_id=$id_interpr and book_id=$book_id and chapter_id=$chapter and verse_id=$verse";
    if ($res = mysqli_query($link, $sql)) {
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
        //echo '$id_interpr='.$id_avtor.
        //echo '<h2>'.iconv('UTF-8', 'Windows-1251','Феофилакт Болгарский').'</h2>'.iconv('UTF-8', 'Windows-1251',$row["text"]);
        echo 'id_interpr=' . $id_interpr . '!';
        /*switch ($id_interpr) {
            case 1:
                $avtorInterpretation = 'Феофилакт Болгарский';
            case 2:
                $avtorInterpretation = 'Лопухин';
            default:
                $avtorInterpretation = 'Толкователь не выбран';
        }*/
        echo '<h2>' . $avtorInterpretation . '</h2><h2 style="color:red;"> ' . $fullName . '</h2>' . $row["text"];
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

} else echo "-1";
?> 