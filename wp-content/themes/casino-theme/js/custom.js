jQuery(document).ready(function($){
    $(".navbar-toggler").on('click', function(event) {
        $('header nav').fadeToggle();
    });
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 350) {
            $("#to-top").fadeIn();
        } else {
            $("#to-top").fadeOut();
        }
    });
    $('.search-toggle').click(function(){
        $('.search-form form').slideToggle();
    })
    $("#to-top").click(function () {
        $('html, body').animate({
            scrollTop: 0
        });
    })
    $('.toggller').click(function () {
        var c = $(this).closest('.faq-item').find('.faq-answer');
        $(this).toggleClass('open');
        $(this).closest('.faq-item').toggleClass('open');
        c.slideToggle();
    });
    if ($(window).width() < 992) {
        $('.menu-item-has-children').click(function (e) {
            e.preventDefault();
            $(this).find('.sub-menu').fadeToggle();
            $(this).toggleClass('opened');
        })
    } else {
        $('.menu-item-has-children').mouseover(function () {
            $(this).find('.sub-menu').fadeIn();
        }).mouseleave(function () {
            $(this).find('.sub-menu').fadeOut();
        })
    }
    $("body").on('click', '[href*="#"]', function(e){
        if ($(this.hash).length != 0) {
            e.preventDefault();
            $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top }, 700);
        }
	})
    let toc = $('.wp-block-gutenberg-blocks-toc');
	let position;
	if (toc.length) {
		position = toc.position().top
	}
    $(window).resize(function() {
		if (toc.length) {
			position = toc.position().top
		}
	})
})
function toggle(el) {
    var c = jQuery(el).closest('.tgf-box');
    jQuery(el).toggleClass('closed');
    c.find('.box-content').slideToggle()
}
