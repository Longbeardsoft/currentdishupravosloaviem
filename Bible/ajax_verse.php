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
            case 53:
                $htm_files[0] = '1Co.htm';
                $book_id=1;
                break;
            case 48:
                $htm_files[1] = '1Jn.htm';
                $book_id=2;
                break;
            default:
                $id_book = '-1';
                $book_id = '-1';
                break;

/*        $htm_files[2] = '1Ki.htm';
        $htm_files[3] = '1Ma.htm';
        $htm_files[4] = '1Par.htm';
        $htm_files[5] = '1Pe.htm';
        $htm_files[6] = '1Sa.htm';
        $htm_files[7] = '1The.htm';
        $htm_files[8] = '1Ti.htm';
        $htm_files[9] = '2Co.htm';
        $htm_files[10] = '2Jn.htm';
        $htm_files[11] = '2Ki.htm';
        $htm_files[12] = '2Ma.htm';
        $htm_files[13] = '2Par.htm';
        $htm_files[14] = '2Pe.htm';
        $htm_files[15] = '2Sa.htm';
        $htm_files[16] = '2The.htm';
        $htm_files[17] = '2Ti.htm';
        $htm_files[18] = '3Jn.htm';
        $htm_files[19] = '3Ma.htm';
        $htm_files[20] = 'Act.htm';
        $htm_files[21] = 'Amo.htm';
        $htm_files[22] = 'Dan.htm';
        $htm_files[23] = 'Deut.htm';
        $htm_files[24] = 'Ecc.htm';
        $htm_files[25] = 'Eccl.htm';
        $htm_files[26] = 'Eph.htm';
        $htm_files[27] = 'Est.htm';
        $htm_files[28] = 'Exod.htm';
        $htm_files[29] = 'Eze.htm';
        $htm_files[30] = 'Ezr.htm';
        $htm_files[31] = 'Ga.htm';
        $htm_files[32] = 'Gen.htm';
        $htm_files[14] = 'Hab.htm';
        $htm_files[33] = 'Heb.htm';
        $htm_files[34] = 'Hos.htm';
        $htm_files[35] = 'Is.htm';
        $htm_files[36] = 'Ja.htm';
        $htm_files[37] = 'Jd.htm';
        $htm_files[38] = 'Jdg.htm';
        $htm_files[39] = 'Jer.htm';
        $htm_files[40] = 'Jn.htm';
        $htm_files[41] = 'Job.htm';
        $htm_files[42] = 'Joel.htm';
        $htm_files[43] = 'Jonah.htm';
        $htm_files[44] = 'Josh.htm';
        $htm_files[45] = 'Lam.htm';
        $htm_files[46] = 'Lev.htm';
        $htm_files[47] = 'Lk.htm';
        $htm_files[48] = 'Mal.htm';
        $htm_files[49] = 'Mic.htm';
        $htm_files[50] = 'Mk.htm';
        $htm_files[51] = 'Mt.htm';
        $htm_files[52] = 'Nah.htm';
        $htm_files[53] = 'Neh.htm';
        $htm_files[54] = 'Num.htm';
        $htm_files[55] = 'Obad.htm';
        $htm_files[56] = 'Phm.htm';
        $htm_files[57] = 'Php.htm';
        $htm_files[58] = 'Prov.htm';
        $htm_files[59] = 'Ps.htm';
        $htm_files[60] = 'Re.htm';
        $htm_files[61] = 'Ro.htm';
        $htm_files[62] = 'Ruth.htm';
        $htm_files[63] = 'Son.htm';
        $htm_files[64] = 'Tit.htm';
        $htm_files[65] = 'Zec.htm';
        $htm_files[66] = 'Zep.htm';
*/
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