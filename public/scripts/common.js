$(document).ready(function(){$("#support_online").hover(function(){$("#content_support").show()},function(){$("#content_support").hide()})});$(document).ready(function(a){$("#cat_left li").hover(function(){$(this).addClass("hover")},function(){$(this).removeClass("hover")})});$(document).ready(function(a){$(".list_product li").hover(function(){$(this).addClass("hover")},function(){$(this).removeClass("hover")})});var currentImage;var currentIndex=-1;var interval;function showImage(b){if(b<$("#bigPic img").length){var a=$("#bigPic img")[b];if(currentImage){if(currentImage!=a){$(currentImage).css("z-index",2);clearTimeout(myTimer);$(currentImage).fadeOut(250,function(){myTimer=setTimeout("showNext()",10000);$(this).css({display:"none","z-index":1})})}}$(a).css({display:"block",opacity:1});currentImage=a;currentIndex=b;$("#thumbs li").removeClass("active");$($("#thumbs li")[b]).addClass("active")}}function showNext(){var a=$("#bigPic img").length;var b=currentIndex<(a-1)?currentIndex+1:0;showImage(b)}var myTimer;$(document).ready(function(){myTimer=setTimeout("showNext()",14000);showNext();$("#thumbs li").bind("click",function(b){var a=$(this).attr("rel");showImage(parseInt(a)-1)})});var currentImage2;var currentIndex2=-1;var interval2;function showImage2(b){if(b<$("#bigPic_list_pro img").length){var a=$("#bigPic_list_pro img")[b];if(currentImage2){if(currentImage2!=a){$(currentImage2).css("z-index",2);clearTimeout(myTimer2);$(currentImage2).fadeOut(250,function(){myTimer2=setTimeout("showNext2()",3000);$(this).css({display:"none","z-index":1})})}}$(a).css({display:"block",opacity:1});currentImage2=a;currentIndex2=b;$("#thumbs_list_pro li").removeClass("active");$($("#thumbs_list_pro li")[b]).addClass("active")}}function showNext2(){var a=$("#bigPic_list_pro img").length;var b=currentIndex2<(a-1)?currentIndex2+1:0;showImage2(b)}var myTimer2;$(document).ready(function(){myTimer2=setTimeout("showNext2()",3000);showNext2();$("#thumbs_list_pro li").bind("click",function(b){var a=$(this).attr("rel");showImage2(parseInt(a)-1)})});$(window).load(function(h){var d=$(".tooltip").width();var a=0;var b=10;var i=0;var c=0;var j=0;var g=0;var f=0;var k=0;$(".list_product li").mousemove(function(l){j=$(this).parent().offset().left;f=$(this).parent().offset().top;k=$(this).parent().offset().top+$(this).parents(".list_product").height();i=l.pageX-$(this).offset().left;c=l.pageY-$(this).offset().top;a=$(this).children(".tooltip").height();$(".tooltip").hide();if($(this).offset().left-b-d>j){$(this).children(".tooltip").css("left",0-(d+b)+i)}else{$(this).children(".tooltip").css("left",b+i)}if(l.pageY+a>=$(window).height()+$(window).scrollTop()){$(this).children(".tooltip").css("top",c-a-b)}else{$(this).children(".tooltip").css("top",b+c)}$(this).children(".tooltip").show()});$(".list_product li").mouseout(function(){$(".tooltip").hide()})});
//Menu dropdown
$(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
});


//slick-slide-index
$(document).ready(function(){
	$('#slick-slide').slick({
	    dots: true,
	    infinite: true,
	    autoplay: true,
	    autoplaySpeed: 3000,
	    slidesToShow: 1,
	    adaptiveHeight: true
	});

	//slick-pd
	$('#slick-pd').slick({
	    dots: true,
	    infinite: true,
	    autoplay: true,
	    autoplaySpeed: 3000,
	    slidesToShow: 1,
	    adaptiveHeight: true
	});
	//slick-product-detail
	$('#slick-product-detail').slick({
	    dots: false,
	    infinite: true,
	    autoplay: true,
	    autoplaySpeed: 3000,
	    slidesToShow: 4,
	    adaptiveHeight: true
	});
});

