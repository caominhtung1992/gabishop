<link href="<?php echo base_url();?>public/styles/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>public/styles/slick.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>public/styles/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>public/styles/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>public/styles/responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>public/styles/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/library.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/common.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/main.js"></script>

<script type="text/javascript">
	var links = "<?php echo base_url();?>";
</script>

<script type="text/javascript">
	document.write('<div id="fb-root"></div>');
	(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=199828456846777";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("img.lazy").lazyload({
			placeholder: "<?php echo base_url(); ?>public/images/grey.gif",
			effect: "fadeIn"
		});
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54219966-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
$(document).ready(function () {
    if (window.outerWidth > 769) {
        //Scroll fix Menu
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 110) {
                    $('.navbar-default').addClass("fixed");
                } else {
                    $('.navbar-default').removeClass("fixed");
                }
            });
        });
    }
});
</script>

    <script src="http://bananashop.com.vn/public/js/bootstrap.min.js"></script>
    <script src="http://bananashop.com.vn/public/js/slick.min.js"></script>
    <script src="http://bananashop.com.vn/public/js/jquery-scrolltofixed-min.js"></script>
    <script src="http://bananashop.com.vn/public/js/main.js"></script> 
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'vi',layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
  }
</script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> <script>
        (function () {
			$('#tiengviet').click(function () {
				var lang = 'Vietnamese';
				var langg = 'Tiếng Việt';
				var $frame = $('.goog-te-menu-frame:first');
				if($frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0)){
					$frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
					$frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
				}
				else{
					$frame.contents().find('.goog-te-menu2-item span.text:contains('+langg+')').get(0).click();
					$frame.contents().find('.goog-te-menu2-item span.text:contains('+langg+')').get(0).click();
				}
				return false;
				  })  
			$('#tienganh').click(function () {
				var lang = 'English';
				var langg = 'Tiếng Anh';
				var $frame = $('.goog-te-menu-frame:first');
				if($frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0)){
					$frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
					$frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
				}
				else{
					$frame.contents().find('.goog-te-menu2-item span.text:contains('+langg+')').get(0).click();
					$frame.contents().find('.goog-te-menu2-item span.text:contains('+langg+')').get(0).click();
				}
				return false;
				  })  				  
        })(jQuery);
    </script>