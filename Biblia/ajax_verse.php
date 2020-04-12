<?php
header('Content-Type: text/html; charset=windows-1251');
//$id_interpr=$_REQUEST['id_interpr'];
$id_book=$_REQUEST['id_book'];
$chapter=$_REQUEST['chapter'];
    switch ($id_book) {
	case 53:
		$htm_file='1Co.htm';
		break;
	case 48:
		$htm_file='1Jn.htm';
		break;
	case 46:
		$htm_file='1Pe.htm';
		break;	
	case 59:
		$htm_file='1The.htm';
		break;	
	case 61:
		$htm_file='1Ti.htm';
		break;	
	case 54:
		$htm_file='2Co.htm';
		break;	
	case 49:
		$htm_file='2Jn.htm';
		break;	
	case 47:
		$htm_file='2Pe.htm';
		break;	
	case 60:
		$htm_file='2The.htm';
		break;	
	case 62:
		$htm_file='2Ti.htm';
		break;	
	case 50:
		$htm_file='3Jn.htm';
		break;	
	case 44:
		$htm_file='Ac.htm';
		break;	
	case 58:
		$htm_file='Col.htm';
		break;	
	case 56:
		$htm_file='Eph.htm';
		break;	
	case 55:
		$htm_file='Ga.htm';
		break;
	case 45:
		$htm_file='Ja.htm';
		break;	
	case 43:
		$htm_file='Jn.htm';
		break;	
	case 65:
		$htm_file='Jud.htm';
		break;
	case 42:
		$htm_file='Lk.htm';
		break;
	case 41:
		$htm_file='Mk.htm';
		break;
	case 40:
		$htm_file='Mt.htm';
		break;
	case 57:
		$htm_file='Phl.htm';
		break;
	case 52:
		$htm_file='Ro.htm';
		break;	
	case 63:
		$htm_file='Tit.htm';
		break;
	default: 
		$id_book='-1';
		break;
		}

	if ($id_book!='-1') {
	$data=file_get_contents('Interpretations/Feof_Bolgar/'.$htm_file);
	preg_match("/iv id='".$chapter."'>([\s\S]*?)iv>/",$data ,$matches);
    $glava=$matches[1];
    $verse=$_REQUEST['verse'];
	preg_match("/<P>(".$verse."[\s\S]*?)(<P>[0-9]+)|(.*$)/",$glava ,$matches);
    echo '<h2>Феофилакт Болгарский</h2>'.$matches[1];
	//echo $glava;
	}
	else echo"-1";
?> 