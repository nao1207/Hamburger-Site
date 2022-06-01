$(function(){
    $('.c-button--sidebar').click(function(){
        $('.l-sidebar').addClass('open');
        $('.main-watermark_bg').addClass('open');
        $('body').addClass('open');
    })
    $('.c-sidebar__button--close').click(function(){
        $('.l-sidebar.open').removeClass('open');
        $('.main-watermark_bg.open').removeClass('open');
        $('body.open').removeClass('open');
    })
});

$(window).on('load resize',function(){
    if((window.matchMedia('(min-width: 1025px)').matches) && $('.main-watermark_bg').hasClass('open')){
        $('.l-sidebar.open').removeClass('open');
        $('.main-watermark_bg.open').removeClass('open');
        $('body.open').removeClass('open');
    }
});

/*
$(function(){
    $('.c-button--sidebar').click(function(){
    if($('.l-sidebar__section').hasClass('close')){
        //$('.l-sidebar__section').removeClass('close');
        $('.l-sidebar').addClass('open');
        $('.c-sidebar__button--close').addClass('open');
        $('.l-sidebar__section').animate({'marginRight':'1px'},500);
        $('.main-watermark_bg').addClass('close');
        $('body').addClass('open');
    }
    });
    $('.c-sidebar__button--close').click(function(){
        $('.l-sidebar__section').addClass('close');
        $('.l-sidebar.open').removeClass('open');
        $('.c-sidebar__button--close.open').removeClass('open');
        $('l-sidebar__section').animate({'marginRight':'0'},500);
        $('.main-watermark_bg').removeClass('close');
        $('body.open').removeClass('open');
    })
});
*/