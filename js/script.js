
jQuery(window).on('scroll', function($){
    if(jQuery(this).scrollTop() > 100){
        jQuery('.page-top').fadeIn(300);
    } else{
        jQuery('.page-top').fadeOut(300);
    };
});

jQuery('.page-top').on('click', function(){
    jQuery('html, body').animate({
        scrollTop: 0
    },
    500);

    return false;
});

jQuery('a[href^="#"]').on('click', function(){
    let header = jQuery('header').innerHeight();
    let speed = 500;
    let id = jQuery(this).attr("href");
    let target = jQuery("#" == id ? "html" : id);
    let position = jQuery(target).offset().top - header;

    jQuery('html, body').animate(
        {
        scrollTop: position
        },
        speed
    );

    return false;
});

jQuery('.drawer-icon').on('click', function(e){
    e.preventDefault;

    jQuery('.drawer-icon').toggleClass('is-click');
    jQuery('.drawer-content').toggleClass('is-click');
});

jQuery('.drawer-dropdown-icon').on('click', function(e){
    e.preventDefault;

    jQuery(this).toggleClass('is-dropdown');
    jQuery(this).next().slideToggle();
});

jQuery('.news-modal').on('click', function(){
    jQuery('#js-modal').addClass('open');
    jQuery('#js-overlay').addClass('open');
});

jQuery('.modal-close').on('click', function(){
    jQuery('#js-modal').removeClass('open');
    jQuery('#js-overlay').removeClass('open');
});

