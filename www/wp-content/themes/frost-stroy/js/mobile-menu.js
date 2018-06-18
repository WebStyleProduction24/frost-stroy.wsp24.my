//var $ = jQuery.noConflict();
$(function() {

    var open    =   $('#open');    
    var open_post    =   $('#open-post');    
    var close   =   $('#close');       
    var close_post   =   $('#close-post');   
    var close_double   =   $('#close-1');  
    var close_double_post   =   $('#close-1-post');   
    var menu    =   $('.ul-mobile');        
    var menu_post    =   $('.ul-mobile-post');       

    $(open).on('click', function(e) {
        e.preventDefault();   
        open.slideToggle();
        close.slideToggle();
        menu.slideToggle();
        close_double.slideToggle();
    });

    $(close).on('click', function(e) {
        e.preventDefault(); 
        close_double.slideToggle();   
        close.slideToggle();
        menu.slideToggle();
        open.slideToggle();
    });

    $(close_double).on('click', function(e) {
        e.preventDefault(); 
        close_double.slideToggle();   
        close.slideToggle();
        menu.slideToggle();
        open.slideToggle();
    });;       

    $(open_post).on('click', function(e) {
        e.preventDefault();   
        open_post.slideToggle();
        close_post.slideToggle();
        menu_post.slideToggle();
        close_double_post.slideToggle();
    });

    $(close_post).on('click', function(e) {
        e.preventDefault(); 
        close_double_post.slideToggle();   
        close_post.slideToggle();
        menu_post.slideToggle();
        open_post.slideToggle();
    });

    $(close_double_post).on('click', function(e) {
        e.preventDefault(); 
        close_double_post.slideToggle();   
        close_post.slideToggle();
        menu_post.slideToggle();
        open_post.slideToggle();
    });

    
});