<style type="text/css">
  .column_right{
  float: left;
  width: 697px;
  margin:0px 10px;
  }
  .box_column_right .list_product li{
  width: 209px;
  }
  .box_column_right .img_pro img {
  max-width: 200px;
  }
  #banner_product_list {
  width: 697px;
  float: left;
  }
  #banner_product_list img {
  width: 745px;
  }
  .img_pro {
  width: 209px;
  display: table-cell;
  height: 150px;
  vertical-align: middle;
  }
</style>
<!--div class="content_full">
  <?php $this->load->view("column_left"); ?>
  <div class="column_right"> 
    <div id="location"><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a> » <a href=""><?php echo $title; ?></a> </div>
    <div class="clear"></div>
    <div class="clear"></div>
    <div class="box_column_right">
      <div class="title_box_right">
        <h1><?php echo $title; ?></h1>
        <div class="r" style="float: left !important;width:100%">
          <div class="paging r" style="float: left !important;margin: 10px 0px auto !important;position: relative;left: 10%;">
          </div>
        
          <div id="sort" class="l" style="float: right !important;">

          </div>
        </div>
      </div>
      
      <div class="clear"></div>
      <hr size="1" color="#ccc" style="margin:0;">
      <div class="list_product">
        <?php
			if(isset($config) && $config['cate_display'] == 'static_html'){
				echo '<div id="comment_fb" style="margin-top:10px;padding:0px 10px;">
                <div id="cmt_face" class="fb-comments" data-href="'.base_url().uri_string().'.html" data-width="677" data-num-posts="100"></div>
              </div>';
			}else{
		?>
        <ul id="style_grid">
        <?php 
			if(isset($list_pro) && $list_pro != NULL){
				$stt = 0;
				foreach($list_pro as $value){
					@$images = unserialize($value['pro_images']);
					$stt++;
		  ?>
          <li style="height:auto" class="">
            <div class="tooltip">
              <div class="protip-title"> 
              	<span class="cssName"><?php echo $value['pro_name']; ?></span> 
              </div>
              <div class="protip-content">
                <p class="price_product">Giá: <b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></b> </p>
                <p><strong>Bảo hành: </strong><span><?php if($value['pro_war'] == NULL){echo "Liên hệ";}else{echo $value['pro_war']; }?></span></p>
                <p><b>Tình trạng: <?php if($value['pro_qty'] == 0){echo "Hết hàng";}else{echo "Còn hàng";}?></b></p>
                <p> <?php if($value['pro_info'] == NULL){}else{echo "<b>Thông tin sản phẩm</b><br />";echo $value['pro_info'];}?></p>
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
            	<a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="name_pro"><?php echo $this->string->cut($value['pro_name'],90); ?></a>
            </h3>
            <p class="price_pro"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></p>
            <p class="old_price"><?php if($value['pro_market'] == 0){echo "";}else{echo @number_format($value['pro_market'])." đ"; }?></p>
            <a href="<?php echo base_url()."home/cart/addcart/".$value['pro_id'].""; ?>" class="btn_datmua"></a> 
            </li>
            <?php
			if($stt % 3 == 0){
				echo '<div class="clear"></div>';
			}
			}
			}else{
				echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
        <?php
			}
		?>
      </div>
     
      <div class="clear"></div>
      <hr size="1" color="#ccc" style="margin:0;">
      <div class="pagination page-top">
      <div id="pagination" class=""><?php  echo $this->pagination->create_links();?></div>
		</div>
     
    </div>
    
  </div>
  <?php $this->load->view("column_right"); ?>
</div-->

<div id="Render-Body" class="container">
  <div class="head-cat">
      <h1><?php echo $title; ?></h1>
  </div>
    <div class="list-product">
      <div class="row">
      <?php 
        if(isset($list_pro) && $list_pro != NULL){
          $stt = 0;
          foreach($list_pro as $value){
            @$images = unserialize($value['pro_images']);
            $stt++;
      ?>
      <div class="box col-md-3 col-sm-4 col-xs-6 item-pd" id="7">
        <a href="http://bananashop.com.vn/quan-tay-den--7.html">
            <img src="http://bananashop.com.vn/uploads/title_img/banana10422797651571204439.JPG" alt="<?php echo $value['pro_name']; ?>" />
            <span class="iconnew" title="New">&nbsp;</span>
        </a>
        <a href="#">
            <p class="name-product">Quần Tây Đen </p>
        </a>
        <span class="price">400.000 đ</span>
      </div>
      <?php
          }
        }else{
          echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
        }
      ?>                 
        <div id="last_msg_loader"></div>
      </div>
    </div>
  </div>