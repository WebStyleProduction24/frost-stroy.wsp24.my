// var $ = jQuery.noConflict();

$(function(){
    var h_hght = $('.header-blog').outerHeight(true) + 7;
    $(window).scroll(function() {
        var top = $(document).scrollTop();
        if (top <= (h_hght-10)){
            $(".tablet").css({top: '0', position: 'relative', 'padding-top': '0', 'border': 'none', '-webkit-box-shadow': 'none',
    '-moz-box-shadow': 'none'});}
        else {
            $(".tablet").css({top: '0', position: 'fixed', 'padding-top': '10px', 'border-bottom': '3px solid #3b3273', '-webkit-box-shadow': '0 5px 15px 0 rgba(59, 50, 115, .15)',
    '-moz-box-shadow': '0 5px 15px 0 rgba(59, 50, 115, .15)'});
        }
    });
});