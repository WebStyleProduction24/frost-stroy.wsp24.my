// var $ = jQuery.noConflict();

var h_hght = 76; // высота шапки
var h_mrg = 0;    // отступ когда шапка уже не видна

$(function(){

    var elem = $('.tablet');
    var top = $(this).scrollTop();

    var elem_tablet = $('.tablet').css('height');
    var elem_margin = $('.tablet-content');

    elem_margin.css('margin-top', elem_tablet);

    if(top > h_hght){
        elem.css('top', h_mrg);
        elem.css('padding-top', '10px');
    }           

    $(window).scroll(function(){
        top = $(this).scrollTop();

        if (top+h_mrg < h_hght) {
            elem.css('top', (h_hght-top));
            elem.css('padding-top', '0');
        } else {
            elem.css('top', h_mrg);
            elem.css('padding-top', '10px');
        }
    });

});