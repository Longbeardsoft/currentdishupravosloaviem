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
        $avtor = 'Феофилакт Болгарский';
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
        break;
    }
    case 2:
    {
        $avtor = 'А.П. Лопухин';
        switch ($id_book) {
            case 1:
                $htm_files[32] = 'Gen.htm';
                $book_id=32;
                break;
            case 2:
                $htm_files[28] = 'Exod.htm';
                $book_id=28;
                break;
            case 3:
                $htm_files[46] = 'Lev.htm';
                $book_id=46;
                break;
            case 4:
                $htm_files[54] = 'Num.htm';
                $book_id=54;
                break;
            case 5:
                $htm_files[23] = 'Deut.htm';
                $book_id=23;
                break;
            case 6:
                $htm_files[44] = 'Josh.htm';
                $book_id=44;
                break;
            case 7:
                $htm_files[38] = 'Jdg.htm';
                $book_id=38;
                break;
            case 8:
                $htm_files[62] = 'Ruth.htm';
                $book_id=62;
                break;
            case 9:
                $htm_files[6] = '1Sa.htm';
                $book_id=6;
                break;
            case 10:
                $htm_files[15] = '2Sa.htm';
                $book_id=15;
                break;
            case 11:
                $htm_files[2] = '1Ki.htm';
                $book_id=2;
                break;
            case 12:
                $htm_files[11] = '2Ki.htm';
                $book_id=11;
                break;
            case 13:
                $htm_files[4] = '1Par.htm';
                $book_id=4;
                break;
            case 14:
                $htm_files[13] = '2Par.htm';
                $book_id=13;
                break;
            case 15:
                $htm_files[30] = 'Ezr.htm';
                $book_id=30;
                break;
            case 16:
                $htm_files[53] = 'Neh.htm';
                $book_id=53;
                break;
            case 17:
                $htm_files[27] = 'Est.htm';
                $book_id=27;
                break;
            case 18:
                $htm_files[41] = 'Job.htm';
                $book_id=41;
                break;
            case 19:
                $htm_files[59] = 'Ps.htm';
                $book_id=59;
                break;
            case 20:
                $htm_files[58] = 'Prov.htm';
                $book_id=58;
                break;
            case 21:
                $htm_files[25] = 'Eccl.htm';
                $book_id=25;
                break;
            case 22:
                //$htm_files[28] = 'Exod.htm';
                //$book_id=28;
                break;
            case 23:
                $htm_files[35] = 'Is.htm';
                $book_id=35;
                break;
            case 24:
                $htm_files[39] = 'Jer.htm';
                $book_id=39;
                break;
            case 25:
                $htm_files[45] = 'Lam.htm';
                $book_id=45;
                break;
            case 26:
                $htm_files[29] = 'Eze.htm';
                $book_id=29;
                break;
            case 27:
                $htm_files[22] = 'Dan.htm';
                $book_id=22;
                break;
            case 28:
                $htm_files[34] = 'Hos.htm';
                $book_id=34;
                break;
            case 29:
                $htm_files[42] = 'Joel.htm';
                $book_id=42;
                break;
            case 30:
                $htm_files[21] = 'Amo.htm';
                $book_id=21;
                break;
            case 31:
                $htm_files[55] = 'Obad.htm';
                $book_id=55;
                break;
            case 32:
                $htm_files[43] = 'Jonah.htm';
                $book_id=43;
                break;
            case 33:
                $htm_files[49] = 'Mic.htm';
                $book_id=49;
                break;
            case 34:
                $htm_files[52] = 'Nah.htm';
                $book_id=52;
                break;
            case 35:
                $htm_files[14] = 'Hab.htm';
                $book_id=14;
                break;
            case 36:
                $htm_files[66] = 'Zep.htm';
                $book_id=66;
                break;
            case 37:
                //$htm_files[28] = 'Exod.htm';
                //$book_id=28;
                break;
            case 38:
                $htm_files[65] = 'Zec.htm';
                $book_id=65;
                break;
            case 39:
                $htm_files[48] = 'Mal.htm';
                $book_id=48;
                break;
            case 40:
                $htm_files[51] = 'Mt.htm';
                $book_id=51;
                break;
            case 41:
                $htm_files[50] = 'Mk.htm';
                $book_id=50;
                break;
            case 42:
                $htm_files[47] = 'Lk.htm';
                $book_id=47;
                break;
            case 43:
                $htm_files[40] = 'Jn.htm';
                $book_id=40;
                break;
            case 44:
                $htm_files[20] = 'Act.htm';
                $book_id=20;
                break;
            case 45:
                $htm_files[36] = 'Ja.htm';
                $book_id=36;
                break;
            case 46:
                $htm_files[5] = '1Pe.htm';
                $book_id=5;
                break;
            case 47:
                $htm_files[14] = '2Pe.htm';
                $book_id=14;
                break;
            case 48:
                $htm_files[1] = '1Jn.htm';
                $book_id=1;
                break;
            case 49:
                $htm_files[10] = '2Jn.htm';
                $book_id=10;
                break;
            case 50:
                $htm_files[18] = '3Jn.htm';
                $book_id=18;
                break;
            case 51:
                $htm_files[37] = 'Jd.htm';
                $book_id=37;
                break;
            case 52:
                $htm_files[61] = 'Ro.htm';
                $book_id=61;
                break;
            case 53:
                $htm_files[0] = '1Co.htm';
                $book_id=0;
                break;
            case 54:
                $htm_files[9] = '2Co.htm';
                $book_id=9;
                break;
            case 55:
                $htm_files[31] = 'Ga.htm';
                $book_id=31;
                break;
            case 56:
                $htm_files[26] = 'Eph.htm';
                $book_id=26;
                break;
            case 57:
                $htm_files[57] = 'Php.htm';
                $book_id=57;
                break;
            case 58:
                //$htm_files[28] = 'Exod.htm';
                //$book_id=28;
                break;
            case 59:
                $htm_files[7] = '1The.htm';
                $book_id=7;
                break;
            case 60:
                $htm_files[16] = '2The.htm';
                $book_id=16;
                break;
            case 61:
                $htm_files[8] = '1Ti.htm';
                $book_id=8;
                break;
            case 62:
                $htm_files[17] = '2Ti.htm';
                $book_id=17;
                break;
            case 63:
                $htm_files[64] = 'Tit.htm';
                $book_id=64;
                break;
            case 64:
                $htm_files[56] = 'Phm.htm';
                $book_id=56;
                break;
            case 65:
                $htm_files[33] = 'Heb.htm';
                $book_id=33;
                break;
            case 66:
                $htm_files[60] = 'Re.htm';
                $book_id=60;
                break;
            case 67:
                $htm_files[3] = '1Ma.htm';
                $book_id=3;
                break;
            case 68:
                $htm_files[12] = '2Ma.htm';
                $book_id=12;
                break;
            case 69:
                $htm_files[19] = '3Ma.htm';
                $book_id=19;
                break;
            default:
                $id_book = '-1';
                $book_id = '-1';
                break;
        }
        $book_id++;
        break;
    }
    case 3:{
        $avtor = 'Ефрем Сирин';
        switch ($id_book) {
            case 53:
                $htm_files[0] = '1Co.htm';
                $book_id=0;
                break;
            case 59:
                $htm_files[1] = '1The.htm';
                $book_id=1;
                break;
            case 61:
                $htm_files[2] = '1Ti.htm';
                $book_id=2;
                break;
            case 54:
                $htm_files[3] = '2Co.htm';
                $book_id=3;
                break;
            case 60:
                $htm_files[4] = '2The.htm';
                $book_id=4;
                break;
            case 62:
                $htm_files[5] = '2Ti.htm';
                $book_id=5;
                break;
            case 30:
                $htm_files[6] = 'Am.htm';
                $book_id=6;
                break;
            case 58:
                $htm_files[7] = 'Col.htm';
                $book_id=7;
                break;
            case 27:
                $htm_files[8] = 'Dan.htm';
                $book_id=8;
                break;
            case 5:
                $htm_files[9] = 'De.htm';
                $book_id=9;
                break;
            case 56:
                $htm_files[10] = 'Eph.htm';
                $book_id=10;
                break;
            case 2:
                $htm_files[11] = 'Ex.htm';
                $book_id=11;
                break;
            case 26:
                $htm_files[12] = 'Ezek.htm';
                $book_id=12;
                break;
            case 55:
                $htm_files[13] = 'Ga.htm';
                $book_id=13;
                break;
            case 1:
                $htm_files[14] = 'Ge.htm';
                $book_id=14;
                break;
            case 65:
                $htm_files[15] = 'He.htm';
                $book_id=15;
                break;
            case 28:
                $htm_files[16] = 'Hos.htm';
                $book_id=16;
                break;
            case 23:
                $htm_files[17] = 'Is.htm';
                $book_id=17;
                break;
            case 24:
                $htm_files[18] = 'Jer.htm';
                $book_id=18;
                break;
            case 1:
                $htm_files[19] = 'Jl.htm';
                $book_id=19;
                break;
            case 25:
                $htm_files[20] = 'Lam.htm';
                $book_id=20;
                break;
            case 3:
                $htm_files[21] = 'Le.htm';
                $book_id=21;
                break;
            case 39:
                $htm_files[22] = 'Ma.htm';
                $book_id=22;
                break;
            case 33:
                $htm_files[23] = 'Mic.htm';
                $book_id=23;
                break;
            case 4:
                $htm_files[24] = 'Nu.htm';
                $book_id=24;
                break;
            case 31:
                $htm_files[25] = 'Ob.htm';
                $book_id=25;
                break;
            case 57:
                $htm_files[26] = 'Php.htm';
                $book_id=26;
                break;
            case 52:
                $htm_files[27] = 'Ro.htm';
                $book_id=27;
                break;
            case 63:
                $htm_files[28] = 'Tit.htm';
                $book_id=28;
                break;
            case 38:
                $htm_files[29] = 'Za.htm';
                $book_id=29;
                break;
            default:
                $id_book = '-1';
                $book_id = '-1';
                break;
        }
        $book_id++;
        break;
    }
    default:
    {
        $avtor = 'Толкователь не выбран';
        break;
    }

}

if ($id_book != '-1') {
    include 'spisok.php';
    $fullName = $FullName[$id_book] . ' ' . $chapter . ':' . $verse;
    $host = 'localhost'; // адрес сервера
    $database = "host1382121_bible"; // имя базы данных
    //echo "book_id=" . $book_id;
    $user = 'host1382121'; // имя пользователя
    $password = '15b47f6a'; // пароль
    //$user = 'root'; // имя пользователя
    //$password = ''; // пароль

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
        //echo 'id_interpr=' . $id_interpr . '!'."avtor=".$avtor;
        if ($row["text"]) echo '<h2>' . $avtor . '</h2><h2 style="color:red;"> ' . $fullName . '</h2>' . $row["text"];
        else echo "-1";
    } else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($link);
        echo "-1";
    }

} else echo "-1";
?> 