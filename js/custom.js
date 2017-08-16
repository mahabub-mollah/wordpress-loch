//========================
// Footer toggle menu
//========================
if ($('.mobile_menu').length > 0) {
    $('.mobile_menu').on('click', function (evt) {
        $(this).toggleClass('active');
        $('.mobile_menu_wrap nav > ul').slideToggle('slow');
    });
    if ($(window).width() < 768)
    {
        $(".has-menu-items a").on('click', function () {
            $(this).parent().toggleClass('active');
            $(this).parent().children('.sub-menu').slideToggle('slow');
        });
    }
}
;

$(document).ready(function () {
    $(".footer_widget h3").click(function(){
        $(this).parent('.footer_widget').toggleClass('active');
    });
});