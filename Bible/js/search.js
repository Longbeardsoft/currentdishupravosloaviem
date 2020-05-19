$(function(){

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
        //$(".who").val(s_user).attr('disabled', 'disabled'); //деактивируем input, если нужно
        $(".search_result").fadeOut();
    })
})