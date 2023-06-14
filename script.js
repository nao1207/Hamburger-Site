//$(function(){
    //Menuボタンを押した時の処理
    jQuery(function($){
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

//サイドバー表示時にPC版になった時の動作
jQuery(function($){
    $(window).on('load resize',function(){
        if((window.matchMedia('(min-width: 1025px)').matches) && $('.main-watermark_bg').hasClass('open')){
            $('.l-sidebar.open').removeClass('open');
            $('.main-watermark_bg.open').removeClass('open');
            $('body.open').removeClass('open');
        }})
});