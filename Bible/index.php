<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Bible/bible.css">
<body onload="location = '#verse';">
<?php
echo '<table border=1 style="table-layout:fixed;" id=bible width="100%">';
//<tr><th ><h4>ВЫБОР КНИГ БИБЛИИ</h4></th></tr>
echo '<tr><th ><h4 >Ветхий Завет</h4></th></tr>';
//<tr><td ><h5 >Пятикнижие Моисея</h5></td></tr>
echo '<tr><td><p lang="ru">';
include("spisok.php");
for ($i = 1; $i < 6; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a>";
}
//echo "</td></tr><td><h5 >Книги Исторические</h5></td></tr>
echo "</p></td></tr>";
/*$i=5;
echo "<tr><td><a href='' id=$i class=book>$FullName[$i]</a></td></tr>"; 
*/
echo "<tr><td>";

for ($i = 6; $i < 18; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
for ($i = 71; $i < 74; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
for ($i = 77; $i < 78; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
for ($i = 67; $i < 70; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
echo "</td></tr>";
//<td><h5 >Книги Учительные</h5></td></tr>
echo "<tr><td>";
for ($i = 18; $i < 23; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
for ($i = 75; $i < 77; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
echo "</td></tr>";
//<td><h5 >Книги Пророческие</h5></td></tr>
echo "<tr><td>";
for ($i = 23; $i < 40; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
for ($i = 70; $i < 71; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
echo '</td></tr><tr><th ><h4>Новый завет</h4></th></td></tr><tr><td >';
for ($i = 40; $i < 45; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
echo '</td></tr>';
//<tr><td ><h5 >Соборные послания</h5></td></tr>
echo '<tr><td>';
for ($i = 45; $i < 52; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
echo '</td></tr>';
//<tr><td ><h5 >Послания Апостола Павла</h5></td></tr>
echo '<tr><td>';
for ($i = 52; $i < 66; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
echo '</td></tr><tr><td>';
for ($i = 66; $i < 67; $i++) {
    echo "<a href='' id=$i class=book>$FullName[$i]</a> ";
}
echo '</td></tr>';
$s = 'Толкования';
$m[0] = 'блж.Феофилакт Болг.';
$m[1] = 'А.Лопухин';
$m[2] = 'Ефрем Сирин';
$m[3] = 'А. Иванов';
$m[4] = 'еп. Михаил (Лузин)';
$m[5] = 'св. Иоанн Златоуст';
$m[6] = 'Климент Алекс.';
echo "<tr><td >
<h4 id=interpretation>$s</h4></td></tr><tr>
<td >";
for ($j = 0; $j < sizeof($m); $j++) {
    echo "<a href='' id=$j class=interpretation>$m[$j]</a> ";
}
echo "</td></tr>";
if (!isset($_REQUEST['id_book']))
    $id_book = 1;
else
    $id_book = $_REQUEST['id_book'];
$book_name = $FullName[$id_book];
if (!isset($_REQUEST['chapter']))
    $chapter = 1;
else
    $chapter = $_REQUEST['chapter'];
if (!isset($_REQUEST['verse']))
    $verse = 0;
else
    $verse = $_REQUEST['verse'];

$book_name = $FullName[$id_book];
echo "<tr><td ><div style='display:-webkit-inline-box;'><h4 id=book class=$id_book>$book_name</h4><h4>, </h4><h4 id=chapter> $chapter</h4></div>
</td></tr>";
echo "<a name='verse'></a>";
echo "<tr><td ><div id=chapters>";
for ($j = 1; $j <= $ChapterQty[$id_book]; $j++) {
    echo "<a href='' id=$j class=chapter>$j</a> ";
}
echo "</div></td></tr>";
echo "</table>";
//echo"<tr><td >";
//echo "<table id=text width='100%' style='font-size:0.5em;';>";
//echo "<div style='overflow: scroll;max-width:3'>";
echo "<table border=0 id=text width='100%'>";
echo "<script>
  var id_book=$('#book').attr('class');
    	$('#chapter').html($chapter);
  			slavicChecked = $('#slavic').is(':checked');
  			synodalChecked = $('#synodal').is(':checked');
  			if (!slavicChecked&&synodalChecked) checked='synodal';
  			else if (slavicChecked&&!synodalChecked) checked='slavic';
  			else checked='all';
  			$.ajax({
  				type: 'get',
  				url: '/Bible/file.php',
 				data: {'id_book':id_book,'chapter':$chapter,'translate':checked,'verse':$verse},
 				success: function(data){
				//alert(data);
				$('#text').html(data);
				} 
			});</script>";

echo '</table>';
//echo "<a href='#verse'>Наверх</a>";
//echo "<a name='verse'>aaa</a>";
?>
<a name='interpr_onload'></a>
<div id=interpr>
    <?php
    /*for ($i=0;$i<=1000;$i++){
    if (($i%3)==0&&($i%5)>0) {
    $si=strval($i);
    if ($i/100>=1) {
    $sum_num=$si{0}+$si{1}+$si{2};
    }else if ($i/10>=1) {
    $sum_num=$si{0}+$si{1};
    }else $sum_num=$i;
    if ($sum_num<10) echo $i.' ';
    }
    }*/
    ?>
</div>
<script>
    $(document).ready(function () {
        onload = function () {
            if (location.toString().indexOf("#verse", 0) == -1) location += '#verse'
        };
        onload_interpr = function () {
            if (location.toString().indexOf("#verse", 0) != -1 && location.toString().indexOf("#interpr_onload", 0) == -1) {
                location = location.toString().replace("#verse", "") + '#interpr_onload';
            } else if (location.toString().indexOf("#verse", 0) != -1 && location.toString().indexOf("#interpr_onload", 0) != -1) {
                temp1 = location.toString().replace("#verse", "");
                temp2 = temp1.toString().replace("#interpr_onload", "");
                location = temp2 + '#interpr_onload';
            } else if (location.toString().indexOf("#verse", 0) == -1 && location.toString().indexOf("#interpr_onload", 0) == -1) {
                location += '#interpr_onload';
            } else if (location.toString().indexOf("#verse", 0) == -1 && location.toString().indexOf("#interpr_onload", 0) != -1) {
                location = location.toString().replace("#interpr_onload", "") + '#interpr_onload';
            }
        };
//onload = function () {document.getElementsByName ('verse').scrollIntoView()};
        $(".interpretation").click(function () {
            var id = $(this).attr('id');
            $(".interpretation").each(function() {
                $( this ).css('text-decoration','none');
            });
            $(this).css('text-decoration','underline');
            var id_book = $("#book").attr('class');
            var chapter = $("#chapter").text();
//alert(id);
            $.ajax({
                type: 'post',
                url: '/Bible/ajax_interpr.php',
                //url: 'Interpretations/Feof_Bolgar/1Co.htm',
                data: {'id_interpr': id, 'id_book': id_book, 'chapter': chapter},
                success: function (data) {
                    //alert("!"+data+"!");
                    if (data != '-1') {
                        /*var data = $(data);
                        //alert(data.find('#1').html());
                        glava=data.find('#'+chapter).html();
                        //$("#interpr").html(glava);
                        //var styx = glava.search(/[0-9]/);
                        var stx=4;
                        var expr = new RegExp(/p>[0-9]+([\s\S]*?)p>[0-9]+/);
                        var styx=glava.match(expr);
                        alert(styx);
                        str=styx.replace(/p>[0-9]+$/i,"!");
                        $("#interpr").html('<'+styx);
                        $("#interpr").css('color','black');*/
                        $("#interpr").html(data);
                        $("h1").remove();
                        $("#interpr").before('<' + 'h1' + '>' + 'Tолкование' + '<' + '/h1' + '>');
                        onload_interpr();
                    } else {
                        $("h1").remove();
                        $("#interpr").html('<' + 'h1' + '>' + "Нет данного толкования!" + '<' + '/h1' + '>');
                        $("#interpr h1").css("color", "red");
                        onload_interpr();
                    }
                }
            });
//$("#interpr").load("Interpretations/Feof_Bolgar/test.html"); 			
            return false;
        });
        $(".book").click(function () {
            id_book = $(this).attr('id');
            slavicChecked = $("#slavic").is(':checked');
            synodalChecked = $("#synodal").is(':checked');
            if (!slavicChecked && synodalChecked) checked = 'synodal';
            else if (slavicChecked && !synodalChecked) checked = 'slavic';
            else checked = 'all';
            //alert(id_book);
            //	alert(id_book);
            $("#book").attr('class', id_book);
            $("#chapter").html(1);
            $.ajax({
                type: 'get',
                url: '/Bible/ajax_book.php',
                data: {'id_book': id_book},
                success: function (data) {
                    //alert(data);
                    $("#book").html(data);
                }
            });
            $.ajax({
                type: 'get',
                url: '/Bible/ajax_chapters.php',
                data: {'id_book': id_book},
                success: function (data) {
                    //alert(data);
                    $("#chapters").html(data);
                }
            });
            $.ajax({
                type: 'get',
                url: '/Bible/file.php',
                data: {'id_book': id_book, 'chapter': 1, 'translate': checked},
                success: function (data) {
                    //alert(data);
                    $("#text").html(data);
                }
            });
            //alert(screen.width);
            //$("#table").css('width',"100px");
            //onload();
            //$("#text").scrollIntoView();
            chapter = $("#chapter").text();
            var text = '/index/?id_book=' + id_book + '&chapter=' + chapter;
            //alert('ok');
            title = $(this).html();
            history.pushState({}, title, text);
//		var target ='#verse';
//$('body').animate({scrollTop: $(target).offset().top}, 800);
            onload();
            return false;
        });
        $("#chapters").on("click",".chapter",function () {
            //	alert('ok');
            var id_book = $("#book").attr('class');
            //var name_book=$("#book").text();
            chapter = $(this).attr('id');
            //	$("#book").html(name_book);
            $("#chapter").html(chapter);
            //alert(chapter);
//alert(id_book);
            $.ajax({
                type: 'get',
                url: '/Bible/file.php',
                data: {'id_book': id_book, 'chapter': chapter, 'translate': checked},
                success: function (data) {
                    //alert(data);
                    $("#text").html(data);
                }
            });
            // chapter=$("#chapter").text();
            var text = 'index/?id_book=' + id_book + '&chapter=' + chapter;
            var title = $(this).html();
            history.pushState({}, title, text);
            return false;
        });
    });//ready
</script>
</div>
</body>