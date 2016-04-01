<link href="<?php echo base_url();?>public/styles/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/library.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/common.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/jquery.lazyload.min.js"></script>

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