$(function(){
    $('.c-sidebar__button').click(function(){
        $('.l-sidebar').addClass('open');
        $('.main-background').addClass('open');
        $('.c-sidebar__button--close').addClass('open');
    });
    $('.c-sidebar__button--close').click(function(){
        $('.l-sidebar.open').removeClass('open');
        $('.main-background').removeClass('open');
        $('.c-sidebar__button--close.open').removeClass('open');
        
    })
});

/*
$(function(){
    $('.c-sidebar__button').click(function(){
        $('.l-sidebar').addClass('open');
        $('.l-header').addClass('open');
        $('.wrapper').addClass('open');
        $('.l-footer').addClass('open');
        $('.c-sidebar__button--close').addClass('open');
    });
    $('.c-sidebar__button--close').click(function(){
        $('.l-sidebar.open').removeClass('open');
        $('.l-header.open').removeClass('open');
        $('.wrapper.open').removeClass('open');
        $('.l-footer.open').removeClass('open');
        $('.c-sidebar__button--close.open').removeClass('open');
        
    })
});
*/
/*
$(function(){
    $('.c-sidebar__button').click(function(){
        $('.l-sidebar').addClass('open');
        $('.c-section .p-main-visual .l-footer').toggleClass('open');
    });
    $('.c-sidebar__button--close').click(function(){
        $('.l-sidebar.open').removeClass('open');
        
    })
});
*/