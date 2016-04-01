<!--Start footer-->
	<script type="text/javascript">
		$(document).ready(function(e) {
			var ms;
			Today = new Date();
			ms = Today.getMilliseconds();
			$("#timer").html(ms)
        });
	</script>
  <div class="bgg_footer">
    <div> 2015 All Right Reserved by Tung Mobile. Head Office: 117 Pham Ngu Lao - TP. Hai Duong - Thời gian xử lý: 0.<span id="timer"></span> giây
  </div>
  <!--end footer-->
  
  
  <script type="text/javascript">
	$(function() {
	$(window).scroll(function() {
	if($(this).scrollTop() != 0) {
		$('#bttop').fadeIn();
		} else {
		$('#bttop').fadeOut();
		}
	});
	
	$('#bttop').click(function() {
		$('body,html').animate({scrollTop:0},300);
	});
	});
	</script>

  <div id="bttop" title="Lên đầu trang" style=""><img src="<?php echo base_url()."public/admin/images/scoll_top.png"; ?>" alt="Scroll"></div>
  
  <!--menu-->