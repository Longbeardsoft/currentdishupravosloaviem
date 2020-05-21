$(function(){
    onload_search = function () {
        if (location.toString().indexOf("#verse_search", 0) == -1) location += '#verse_search';
    };
//Живой поиск
   $('.who').bind("change keyup input click", function() {
        if (this.value.length >= 3){
           $.ajax({
                type: 'get',
                url: "/Bible/search.php", //Путь к обработчику
                data: {'referal':this.value},
                response: 'text',
                //cache: false,
                success: function(data){
                    $(".search_result").html(data).fadeIn(); //Выводим полученые данные в списке
                },
                error: function(error) {
                    alert(error);
                }
            })
        }
    })

    $(".search_result").hover(function(){
        $(".who").blur(); //Убираем фокус с input
    })

//При выборе результата поиска, прячем список и заносим выбранный результат в input
    $(".search_result").on("click", "li", function(){
        s_user = $(this).text();
        str = $(this).attr('id').split('-');
        id_book=str[0];
        chapter_id=str[1];
        verse_id=str[2];
       //$(".who").val(s_user).attr('disabled', 'disabled'); //деактивируем input, если нужно
        $(".search_result").fadeOut();
        $("#book").attr('class', id_book);
        $("#chapter").html(chapter_id);
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
            data: {'id_book': id_book, 'chapter': chapter_id, 'translate': checked, 'verse':verse_id },
            success: function (data) {
                //alert(data);
                $("#text").html(data);
                onload_search();
                //onload();
            }
        });
        chapter = $("#chapter").text();
        var text = '/index/?id_book=' + id_book + '&chapter=' + chapter;
        title = $(this).html();
        history.pushState({}, title, text);
        return false;
    })
})