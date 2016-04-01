<div id="header"> <a href="<?php echo base_url();?>" id="logo" title="Sửa chữa laotop lấy ngay"><img style="max-width:190px;" src="<?php echo base_url();?>public/images/logo.png" alt="Sửa chữa laotop lấy ngay" /></a>
      <div class="header_support">
        <ul>
          <li class="bg icon_support"  id="support_online">
            <div id="content_support">
              <p style="border-bottom:solid 1px #ddd; padding-bottom:6px;">Thời gian từ 8h đến 22h tất cả các ngày trong tuần. Cam kết giải quyết trong 24h<br/>
                <a href="index.html" class="blue"></a> hoặc liên hệ trực tiếp cho chúng tôi qua số Hotline: 0966.887.444</p>
              <div class="space clear"></div>
              <ul>
              <?php
    			  	if(isset($list_support) && $list_support != NULL){
    					foreach($list_support as $value){
      			  ?>
                      <li>
                        <p class="red"><strong><?php echo $value['sup_name']; ?></strong></p>
                        <p><strong>Mobile:</strong> <?php echo $value['sup_phone']; ?></p>
                        <p>
                          <strong style="float: left;margin: 8px;">Facebook:</strong> 
                          <a target="_blank" rel="nofollow" href="<?php echo $value['sup_yahoo']; ?>" title="<?php echo $value['sup_name']; ?>"> 
                            <img src="<?php echo base_url();?>public/images/facebook.png" alt="facebook" />
                          </a> 
                        </p>
                      </li>
                      <?php
      					}
      				}
  				    ?>
              </ul>
              <div class="space clear"></div>
              <p style="padding-top:6px; border-top:solid 1px #ddd;"><strong>Mỗi lời phàn nàn góp ý với chúng tôi là 1 món quà, mọi liên hệ vui lòng gửi qua email <br/>
                <center>
                  <span class="blue">tungmobilehd@gmail.com</span>
                </center>
                </strong></p>
            </div>
            <!--content_support--> 
          </li>
        </ul>
        <p class="red font18_phone"><i class="bg icon_phone"></i>0966.887.444</p>
      </div>
      <div id="header_right">
        <div id="menu_top">
          <ul>
            <li><a href="<?php echo base_url() ; ?>gioi-thieu.html">Giới thiệu</a></li>
            <li><a href="<?php echo base_url() ; ?>tin-tuc.html">Tin tức</a></li>
            <li><a href="<?php echo base_url() ; ?>lien-he.html">Liên hệ</a></li>
            <li><a href="<?php echo base_url() ; ?>sitemap.xml">Sitemap</a></li>
          </ul>
        </div>
        <div class="social_detail_pro_top"> 
        	
        </div>
      </div>
      <!--header_right--> 
    </div>
    <!--header-->
    
    <div id="nav">
      <div id="title_cat_left" class="bg"></div>
      <!--title_cat_left-->
      <div class="l font15" style="color:white; line-height:39px; margin-left:10px;">
        <div id="search" class="bg">
          <form method="get" action="<?php echo base_url()."tim-kiem.html"; ?>" enctype="multipart/form-data">
            <input type="text" class="cssText ui-autocomplete" name="keywords" id="autocomplete-ajax" class="ui-autocomplete-input" autocomplete="off" value="" placeholder="Gõ từ khóa tìm kiếm"  />
            <input type="submit" class="cssSubmit" value="" />
          </form>                        
        </div>
        <!--search--> 
      </div>
      <a href="<?php echo base_url(); ?>san-pham-khuyen-mai.html" class=" l bg deal_shop"></a> 
      <div id="login_header"> 
      	<?php
  			if(isset($_SESSION['username'])){
  		?>
        	<i class="bg icon_login"></i> <a href="<?php echo base_url(); ?>tai-khoan.html">Tài khoản</a> | <i class="bg icon_register"></i> <a href="<?php echo base_url(); ?>home/users/logout">Thoát</a> 
          <?php
  			}else{
          ?>
          <i class="bg icon_login"></i> <a href="<?php echo base_url(); ?>dang-nhap.html">Đăng nhập</a> | <i class="bg icon_register"></i> <a href="<?php echo base_url(); ?>dang-ky.html">Đăng ký</a> 
          <?php
  			}
  		?>
      </div>
      <!--login_header-->
      
      <div id="cart"  onclick="window.location='<?php echo base_url()."gio-hang.html"; ?>'" style="cursor:pointer;"> <i class="bg icon_cart"></i> <strong style="position: relative;top: -5px;">Giỏ hàng</strong><br />
        <strong class="yellow yellow_yellow"><span id="count_shopping_cart_store">
        	<?php
				if($this->cart->total_items()){
					echo $this->cart->total_items();
				}else{
					echo "0";
				}
			?>
        </span> sản phẩm</strong> </div>
      <!--cart--> 
    </div>
    <!--nav-->
    <div class="clear"></div>