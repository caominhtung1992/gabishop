	<!--meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php
		if($popup['pop_status'] == 1){
	?>
    <script type="text/javascript" src="<?php echo base_url();?>public/scripts/session.js"></script>
    <script>
	  $(document).ready(function(){ 
	  if($.session.get('popup')!='true'){
	  $.session.set('popup','true');
	  }else{
	  $("#box-promotion").remove();
	  }
	  });
	</script>
    <div id="box-promotion">
	    <div id="popupContact">
	      <div id="popupContactClose" href="javascript:void(0);"> <a style="cursor:pointer; font-size:24px; color:white;" onClick="closePop();">[X]</a> </div>
	      <p id="contactArea"><a href="<?php echo $popup['pop_link']; ?>" target="_blank"><img src="<?php echo base_url()."uploads/popup/".$popup['pop_images']; ?>" alt="popup" /></a></p>
	    </div>
	    <div id="backgroundPopup"></div>
    </div>
	<?php
		} //else{
	?>
    <!--script type="text/javascript" src="<?php echo base_url();?>public/scripts/session.js"></script>
    <script>
	  $(document).ready(function(){ 
	  if($.session.get('popup')!='true'){
	  $.session.set('popup','true');
	  }else{
	  $("#box-promotion").remove();
	  }
	  });
	</script>
    <div id="box-promotion">
	    <div id="popupContact">
	      <div id="popupContactClose" href="javascript:void(0);"> 
	      	<a style="cursor:pointer; font-size:24px; color:white;position: relative;right: -200px;top: -5px;" onClick="closePop();">[X]</a> 
	      </div>
	      <div id="contactArea">
	        <div id="popup_order"  class="support-online">
	        <h3 style="text-align: center;font-size: 18px;margin-bottom: 10px;text-transform: uppercase;color:#0193de">Đăng ký nhận bộ quà tặng hấp dẫn từ Tung Mobile</h3>
	        <div style="margin:5px 0px;line-height: 18px;text-align: center;">Quý khách vui lòng nhập đầy đủ thông tin</div>
	        <form method="post" enctype="multipart/form-data" action="javascript:void(0)">
	          <table style="margin: 0px auto;">
	            <tbody>
	              <tr>
	                <td>Họ và tên<span class="require">*</span></td>
	                <td><input class="txt_input_" type="text" size="40" placeholder="Họ và tên" id="name_newsletter" /></td>
	              </tr>
	              <tr>
	                <td>Email<span class="require">*</span></td>
	                <td><input class="txt_input_" type="text" size="40" placeholder="Email" id="mail_newsletter" /></td>
	              </tr>
	              <tr>
	                <td>Số điện thoại<span class="require">*</span></td>
	                <td><input class="txt_input_" type="text" size="40" placeholder="Số điện thoại" id="phone_newsletter" /></td>
	              </tr>
	               <tr>
	                <td>Địa chỉ<span class="require">*</span></td>
	                 <td><input class="txt_input_" type="text" size="40" placeholder="Địa chỉ" id="address_newsletter" /></td>
	              </tr>
	              <tr>
	                <td></td>
	                <td>
	                  <input class="txt_submib_" type="submit" onclick="subscribe_newsletter()" value="Đăng ký ngay"  style="padding: 10px;background-color:#0193de;color: #FFF;font-weight: bold;border: none;border-radius: 5px;cursor: pointer;" />
	                </td>
	              </tr>
	            </tbody>
	          </table>
	        </form>
	        <script type="text/javascript">
			  function subscribe_newsletter(){
				  var name = document.getElementById('name_newsletter').value;
				  var email = document.getElementById('mail_newsletter').value;
				  var phone = document.getElementById('phone_newsletter').value;
				  var address = document.getElementById('address_newsletter').value;
				  if(email.length > 10 && name.length > 5 && phone.length > 9 && address.length > 2){
				  $.post("<?php echo base_url(); ?>home/index/subscribe_newsletter", {name:name,email:email,phone:phone,address:address}, function(data){
				  if(data == 'success'){
					  alert("Quý khách đã đăng ký thành công "); 
					  $("#name_newsletter").val("");$("#mail_newsletter").val("");
					  $("#phone_newsletter").val("");$("#address_newsletter").val("");
					  disablePopup();
				  }
				  else if(data == 'exist'){ alert("Email này đã tồn tại");}
				  });
					}else{alert('Vui lòng nhập đầy đủ thông tin !');
				  }  
			  }
			</script>
	      </div>
	      </div>
	    </div>
    	<div id="backgroundPopup"></div>
    </div>
    <style type="text/css">
    .txt_input_{border:1px solid #ccc !important;height:25px;outline:none;box-shadow:0px 0px 6px 0px #ccc inset;padding-left: 5px;}
    #popup_order{padding: 10px 0px;width: 500px;background: #fff;text-align: left !important;margin: 0px auto;}
    .require{color:#f00;font-weight:bold;}
	#popupContact div {text-align: inherit;}
    </style>
    <?php //} ?>
	
    
    <?php $this->load->view("column_left"); ?>
    <div id="slide">
    <script type="text/javascript" src="<?php echo base_url();?>public/scripts/nivo.js"></script>
        <div class="hbanner-live">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                <?php 
                  if(isset($slide) && !empty($slide)){
                    foreach($slide as $value){
                      echo '<a href="'.$value['slide_link'].'"><img src="'.base_url()."uploads/banner/".$value['slide_image'].'" alt="'.$value['slide_title'].'" title="'.$value['slide_title'].'" /></a>';
                    }
                  }
                ?>
                </div>
            </div>
        </div>
    </div>
   
    <div id="deal_home" class="bg"> 
      <div class="price_deal"><strong class="black font18">TIN TỨC</strong>&nbsp;&nbsp;<span class="line_through"></span></div>
      <table>
      	<?php
			if(isset($list_news) && $list_news != NULL){
				foreach($list_news as $value){
		?>
        <tr class="tr_news_home_page">
          <td>
          	<a title="<?php echo $value['news_title']; ?>" href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>" class="img_pro_12">
          	<img class="img_first_top" src="<?php echo base_url()."uploads/news/thumb/".$value['news_images']."";?>" alt="<?php echo $value['news_title']; ?>"/></a>
          </td>
          <td>
          	<a title="<?php echo $value['news_title']; ?>" href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>"><strong class="font12"><?php echo $value['news_title']; ?></strong></a>
            <p style="color:#A2A2A2"><strong class="font12"><?php echo $value['news_date']; ?></strong></p>
          </td>
        </tr>
        <?php
			}
		}
		?>
        
      </table>
    </div>
    
    <div class="clear"></div>
    <div id="content"> 
      <div class="title_box_left">
        <h2><span>Sản phẩm khuyến mãi »</span></h2>
        <div class="title_tab khuyenmaitrian"> 
        	<a style="color:#f00" title="Sản phẩm khuyến mãi" href="<?php echo base_url()."san-pham-khuyen-mai.html"; ?>">Xem tất cả</a>
        </div>
      </div>
      
      <div class="clear"></div>
      <div class="list_product khuyenmaitrian border" style="margin-top:-7px; border-top:none;width: 1104px;height: auto;float: left;">
        <div class="clear"></div>
        <ul class="cf current" id="laptopcu">
          <?php 
			if(isset($pro_saleoff) && $pro_saleoff != NULL){
				$stt = 0;
				foreach($pro_saleoff as $value){
					@$images = unserialize($value['pro_images']);
					$stt++;
		  ?>
          <li style="height:auto" class="">
            <div class="tooltip">
              <div class="protip-title"> <span class="cssName"><?php echo $value['pro_name']; ?></span> </div>
              <div class="protip-content">
                <p class="price_product">Giá: <b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; } ?></b></p>
                <p><strong>Bảo hành: </strong><span><?php if($value['pro_war'] == NULL){echo "Liên hệ";}else{echo $value['pro_war']; }?></span></p>
                <p><b>Tình trạng: <?php if($value['pro_qty'] > 0){echo "Còn hàng";}else{echo "Hết hàng";}?></b></p>
                <p> <?php if($value['pro_info'] == NULL){echo "-";}else{echo "<b>Thông tin sản phẩm</b><br />";echo $value['pro_info'];}?></p>
              </div>
            </div>
            <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="img_pro"> 
            <img class="lazy" alt="<?php echo $value['pro_name']; ?>" src="<?php echo base_url(); ?>public/images/grey.gif" data-original="<?php if($value['pro_images'] == NULL){echo base_url()."public/images/no-images.jpg";}else{echo base_url()."uploads/products/thumb/".$images[0]."";}?>" />
            <?php
				if($value['pro_market'] != 0){
					$temp = 100 - ($value['pro_price']*100/(int)$value['pro_market']);
					$percent = round($temp);
					echo '<span class="is_saleoff bg"><span>-'.$percent.'%</span></span>';
				}
			?>
            </a>
            <h3 class="h3_pro_name">
            	<a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="name_pro" title="<?php echo $value['pro_name']; ?>"><?php echo $this->string->cut($value['pro_name'],90); ?></a>
            </h3>
            <p class="price_pro"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></p>
            <p class="old_price"><?php if($value['pro_market'] == 0){echo "";}else{echo @number_format($value['pro_market'])." d"; }?></p>
            <a href="<?php echo base_url()."home/cart/addcart/".$value['pro_id'].""; ?>" class="btn_datmua"></a> 
            </li>
            <?php
			if($stt % 5 == 0){
				echo '<div class="clear"></div>';
			}
			}
			}else{
				echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
      </div>
      
      <div class="clear"></div>
      <p>&nbsp;</p>
      <div class="list_product border" style="border:none;margin-bottom:5px;"> 
        <?php 
          if(isset($slide2) && !empty($slide2)){
            foreach($slide2 as $value){
              echo '<a href="'.$value['slide_link'].'"><img class="img_qc_635" src="'.base_url()."uploads/banner/".$value['slide_image'].'" alt="'.$value['slide_title'].'" title="'.$value['slide_title'].'" /></a>';
            }
          }
        ?>
      </div>
      <div class="title_box_left title_box_left_1">
        <h2><span>Sản phẩm mới</span></h2>
        <div class="title_tab khuyenmaitrian"> 
        	<a style="color:#f00" title="Sáº£n pháº©m má»›i" href="<?php echo base_url()."san-pham-moi.html"; ?>">Xem tất cả</a>
        </div>
      </div>
      
      <div class="clear"></div>
      <div class="list_product xt border" style="margin-top:-7px; border-top:none;">
        <div class="clear"></div>
        <ul class="cf current" id="laptopcu_new">
          <?php 
			if(isset($pro_new) && $pro_new != NULL){
				$stt = 0;
				foreach($pro_new as $value){
					@$images = unserialize($value['pro_images']);
					$stt++;
		  ?>
          <li style="height:auto" class="">
            <div class="tooltip">
              <div class="protip-title"> <span class="cssName"><?php echo $value['pro_name']; ?></span> </div>
              <div class="protip-content">
                <p class="price_product">Giá: <b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; } ?></b></p>
                <p><strong>Bảo hành: </strong><span><?php if($value['pro_war'] == NULL){echo "Liên hệ";}else{echo $value['pro_war']; }?></span></p>
                <p><b>Tình trạng: <?php if($value['pro_qty'] > 0){echo "Còn hàng";}else{echo "Hết hàng";}?></b></p>
                <p> <?php if($value['pro_info'] == NULL){echo "-";}else{echo "<b>Thông tin sản phẩm</b><br />";echo $value['pro_info'];}?></p>
              </div>
            </div>
            <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="img_pro"> 
            <img class="lazy" alt="<?php echo $value['pro_name']; ?>" src="<?php echo base_url(); ?>public/images/grey.gif" data-original="<?php if($value['pro_images'] == NULL){echo base_url()."public/images/no-images.jpg";}else{echo base_url()."uploads/products/thumb/".$images[0]."";}?>" />
            <?php
				if($value['pro_market'] != 0){
					$temp = 100 - ($value['pro_price']*100/(int)$value['pro_market']);
					$percent = round($temp);
					echo '<span class="is_saleoff bg"><span>-'.$percent.'%</span></span>';
				}
			?>
            </a>
            <h3 class="h3_pro_name">
            	<a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="name_pro" title="<?php echo $value['pro_name']; ?>"><?php echo $this->string->cut($value['pro_name'],90); ?></a>
            </h3>
            <p class="price_pro"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></p>
            <p class="old_price"><?php if($value['pro_market'] == 0){echo "";}else{echo @number_format($value['pro_market'])." d"; }?></p>
            <a href="<?php echo base_url()."home/cart/addcart/".$value['pro_id'].""; ?>" class="btn_datmua"></a> 
            </li>
            <?php
			if($stt % 5 == 0){
				echo '<div class="clear"></div>';
			}
			}
			}else{
				echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
        <div class="clear"></div>
      </div>
      
      <div class="clear"></div>
      <p>&nbsp;</p>
      <div class="title_box_left title_box_left_2">
        <h2><span>Sản phẩm bán chạy</span></h2>
        <div class="title_tab khuyenmaitrian"> 
        	<a style="color:#f00" title="Sáº£n pháº©m bÃ¡n cháº¡y" href="<?php echo base_url()."san-pham-ban-chay.html"; ?>">Xem tất cả</a>
        </div>
      </div>
    
      <div class="clear"></div>
      <div class="list_product hot border" style="margin-top:-7px; border-top:none;">
        <div class="clear"></div>
        <ul class="cf current" id="laptopcu_hot">
          <?php 
			if(isset($pro_bestsale) && $pro_bestsale != NULL){
				$stt = 0;
				foreach($pro_bestsale as $value){
					@$images = unserialize($value['pro_images']);
					$stt++;
		  ?>
          <li style="height:auto" class="">
            <div class="tooltip">
              <div class="protip-title"> <span class="cssName"><?php echo $value['pro_name']; ?></span> </div>
              <div class="protip-content">
                <p class="price_product">Giá: <b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; } ?></b></p>
                <p><strong>Bảo hành: </strong><span><?php if($value['pro_war'] == NULL){echo "Liên hệ";}else{echo $value['pro_war']; }?></span></p>
                <p><b>Tình trạng: <?php if($value['pro_qty'] > 0){echo "Còn hàng";}else{echo "Hết hàng";}?></b></p>
                <p> <?php if($value['pro_info'] == NULL){echo "-";}else{echo "<b>Thông tin sản phẩm</b><br />";echo $value['pro_info'];}?></p>
              </div>
            </div>
            <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="img_pro"> 
            <img class="lazy" alt="<?php echo $value['pro_name']; ?>" src="<?php echo base_url(); ?>public/images/grey.gif" data-original="<?php if($value['pro_images'] == NULL){echo base_url()."public/images/no-images.jpg";}else{echo base_url()."uploads/products/thumb/".$images[0]."";}?>" />
            <?php
				if($value['pro_market'] != 0){
					$temp = 100 - ($value['pro_price']*100/(int)$value['pro_market']);
					$percent = round($temp);
					echo '<span class="is_saleoff bg"><span>-'.$percent.'%</span></span>';
				}
			?>
            </a>
            <h3 class="h3_pro_name">
            	<a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="name_pro" title="<?php echo $value['pro_name']; ?>"><?php echo $this->string->cut($value['pro_name'],90); ?></a>
            </h3>
            <p class="price_pro"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></p>
            <p class="old_price"><?php if($value['pro_market'] == 0){echo "";}else{echo @number_format($value['pro_market'])." d"; }?></p>
            <a href="<?php echo base_url()."home/cart/addcart/".$value['pro_id'].""; ?>" class="btn_datmua"></a> 
            </li>
            <?php
			if($stt % 5 == 0){
				echo '<div class="clear"></div>';
			}
			}
			}else{
				echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
        <div class="clear"></div>
      </div>
     
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
      <p>&nbsp;</p>
      <div class="list_product border" style="border:none;margin-bottom:5px;"> 
        <?php 
          if(isset($slide3) && !empty($slide3)){
            foreach($slide3 as $value){
              echo '<a href="'.$value['slide_link'].'"><img src="'.base_url()."uploads/banner/".$value['slide_image'].'" alt="'.$value['slide_title'].'" title="'.$value['slide_title'].'" /></a>';
            }
          }
        ?>
      </div-->

      <div id="Render-Body" class="container">
        <div id="slick-slide">
            <img width="960" height="640" src="http://bananashop.com.vn/public/admin/images/slide-32.jpg" /><img width="960" height="640" src="http://bananashop.com.vn/public/admin/images/slide-12.jpg" /><img width="960" height="640" src="http://bananashop.com.vn/public/admin/images/slide-21.jpg" />        </div>

        <div class="list-product">
           <div class="break"></div><h3 class="title-rbl-04"><span><a href="http://bananashop.com.vn/quan">Quần</a></span></h3><div class="row">  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/quan-tay-den--7.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana10422797651571204439.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/quan-tay-den--7.html"><p class="name-product">Quần Tây Đen </p></a>
              <span class="price">400.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/quan-tay--xam-long-soi-8.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana165660742759719269.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/quan-tay--xam-long-soi-8.html"><p class="name-product">Quần Tây  Xám Lông Sói</p></a>
              <span class="price">520.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/quan-tay-vang-dat-9.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana1588254436441256719.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/quan-tay-vang-dat-9.html"><p class="name-product">Quần Tây Vàng Đất</p></a>
              <span class="price">520.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/quan-tay-xam-trang-1-10.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana1726111364575587433.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/quan-tay-xam-trang-1-10.html"><p class="name-product">Quần Tây Xám Trắng 1</p></a>
              <span class="price">580.000 đ</span>
            </div><a class="box-f" href="http://bananashop.com.vn/quan" style="float: right; margin: 15px;">Xem thêm >></a></div><div class="break"></div><h3 class="title-rbl-04"><span><a href="http://bananashop.com.vn/giay">Giầy</a></span></h3><div class="row">  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/giay-moi-xam-ni--14.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana7401536492100917554.jpg" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/giay-moi-xam-ni--14.html"><p class="name-product">Giày Mọi Xám Nỉ </p></a>
              <span class="price">1.250.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/giay-moi-den-ni--15.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana1706345421171026839.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/giay-moi-den-ni--15.html"><p class="name-product">Giày Mọi Đen Nỉ </p></a>
              <span class="price">1.250.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/giay-da-bong-den--16.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana21391818101561433640.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/giay-da-bong-den--16.html"><p class="name-product">Giày da bóng đen </p></a>
              <span class="price">1.250.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/giay-da-nau--go-bong-17.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana111516621475486069.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/giay-da-nau--go-bong-17.html"><p class="name-product">Giày da nâu  gỗ bóng</p></a>
              <span class="price">1.250.000 đ</span>
            </div><a class="box-f" href="http://bananashop.com.vn/giay" style="float: right; margin: 15px;">Xem thêm >></a></div><div class="break"></div><h3 class="title-rbl-04"><span><a href="http://bananashop.com.vn/so-mi">Sơ Mi</a></span></h3><div class="row">  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/so-mi-xanh-lam-sang-mau-25.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana1242165923676779547.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/so-mi-xanh-lam-sang-mau-25.html"><p class="name-product">Sơ mi xanh lam sáng màu</p></a>
              <span class="price">350.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/so-mi-xanh-bien-sau-26.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana16445506951530913366.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/so-mi-xanh-bien-sau-26.html"><p class="name-product">Sơ mi xanh biển sâu</p></a>
              <span class="price">350.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/so-mi-trang-truyen-thong--28.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana10217487861272776525.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/so-mi-trang-truyen-thong--28.html"><p class="name-product">Sơ mi trắng truyền thống </p></a>
              <span class="price">350.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/so-mi-trang-nut-29.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana14120105431912677206.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/so-mi-trang-nut-29.html"><p class="name-product">Sơ mi trắng nút</p></a>
              <span class="price">350.000 đ</span>
            </div><a class="box-f" href="http://bananashop.com.vn/so-mi" style="float: right; margin: 15px;">Xem thêm >></a></div><div class="break"></div><h3 class="title-rbl-04"><span><a href="http://bananashop.com.vn/vest">Vest</a></span></h3><div class="row"> <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/vest-den-ca-tinh-39.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana25330645178396139.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/vest-den-ca-tinh-39.html"><p class="name-product">Vest đen cá tính</p></a>
              <span class="price">950.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/vest-den-reu-phoi-mau-41.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana4936517751649645348.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/vest-den-reu-phoi-mau-41.html"><p class="name-product">Vest Đen Rêu Phối Màu</p></a>
              <span class="price">950.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/vest--vang-dong-sang-trong-42.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana2434099041765143295.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/vest--vang-dong-sang-trong-42.html"><p class="name-product">Vest  Vàng Đồng Sang Trọng</p></a>
              <span class="price">950.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/vest-xam-hoa-tiet-duong-thang-43.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana6683618721029422959.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/vest-xam-hoa-tiet-duong-thang-43.html"><p class="name-product">Vest Xám Họa Tiết Đường Thẳng</p></a>
              <span class="price">950.000 đ</span>
            </div><a class="box-f" href="http://bananashop.com.vn/vest" style="float: right; margin: 15px;">Xem thêm >></a></div><div class="break"></div><h3 class="title-rbl-04"><span><a href="http://bananashop.com.vn/ao-len-det">Áo len dệt</a></span></h3><div class="row">  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/ao-len-det-vang-ho-phach-1.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana715376325199889362.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/ao-len-det-vang-ho-phach-1.html"><p class="name-product">Áo len dệt Vàng Hổ Phách</p></a>
              <span class="price">300.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/ao-len-det-xanh-coban-2.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana9627844191783082143.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/ao-len-det-xanh-coban-2.html"><p class="name-product">Áo len dệt xanh Coban</p></a>
              <span class="price">300.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/ao-len-det-trang-3.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana1216971565828522279.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/ao-len-det-trang-3.html"><p class="name-product">Áo len dệt Trắng</p></a>
              <span class="price">300.000 đ</span>
            </div>  <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
              <a href="http://bananashop.com.vn/ao-len-det-do-sori-4.html">
                <img src="http://bananashop.com.vn/uploads/title_img/banana220110661996184252.JPG" >
                <span class="iconnew" title="New">&nbsp;</span>
              </a>
              <a href="http://bananashop.com.vn/ao-len-det-do-sori-4.html"><p class="name-product">Áo len dệt Đỏ sơri</p></a>
              <span class="price">300.000 đ</span>
            </div><a class="box-f" href="http://bananashop.com.vn/ao-len-det" style="float: right; margin: 15px;">Xem thêm >></a></div>        
</div>