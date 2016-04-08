<div class="clear"></div>
<style type="text/css">
  .box_column_right{width:auto;}
  .column_right{
  float: left;
  width: 697px;
  margin:0px 10px;
  }
  .box_column_right .img_pro img {
  max-width: 203px;
  }
  #banner_product_list {
  width: 745px;
  float: left;
  }
  #banner_product_list img {
  width: 697px;
  }
  .img_pro {
  width: 195px;
  display: table-cell;
  height: 150px;
  vertical-align: middle;
  }
  #overview_product{
  width:323px;
  }
  .box_column_right .list_product li {
  width: 203px;
  }
  #tab_detail_product .content_tab #phukien li {
  width: 195px;
  }
  #tab_detail_product .content_tab #phukien li .img_pro img {
  max-width: 195px;
  }

</style>
<!--link rel="stylesheet" href="<?php echo base_url(); ?>public/styles/magiczoom.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/magiczoom.js"></script> 
<script type="text/javascript">
  MagicZoom.options = {
    'disable-zoom' : false,
    'selectors-change' : 'click',
    'zoom-align' : 'center'
  }
</script> 
<script>
$(document).ready(function(e) {
$("#tab_detail_product .title_tab a").click(function(){
  $("#tab_detail_product .title_tab a").removeClass("current");
  $(this).addClass("current");
  $("#tab_detail_product .content_tab .cf").hide();
  $($(this).attr("href")).show();
  
  return false;
});
  $(".show_lightbox_img a").lightBox(); 
});
</script>
<div class="content_full">
  <?php $this->load->view("column_left"); ?>
  <div class="column_right">
    <div id="location">
    <a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a> &raquo; <a href=""><?php echo $detail['pro_name']; ?></a></div>
    <div class="clear"></div>
    <div class="box_column_right" style="padding:10px;">
      <div id="detail_product">
        <div class="clear"></div>
        <p>&nbsp;</p>
        <div id="img_product">
          <div id="img_large" style="border: 1px solid #ccc;width: 348px;">
          <?php
    			@$images = unserialize($detail['pro_images']);
    		  ?>
            <div class='zoomp' style="height:309px; width:317px; display:table-cell; vertical-align:middle;"> 
            <a class="MagicZoom" id="Zoomer" rel="selectors-effect-speed: 600" href="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" title="<?php echo $detail['pro_name']; ?>" > 
            <img src="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" title="<?php echo $detail['pro_name']; ?>" alt="<?php echo $detail['pro_name']; ?>" /> 
            </a> 
            </div>
          </div>
       
          
          <div class="show_lightbox_img"> 
          <a id="view_large" class="bg" href="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>"></a> 
          	<?php
      				if($detail['pro_images'] != NULL){
      					foreach($images as $value){
      						echo "<a  href='".base_url()."uploads/products/".$detail['pro_folderimg']."/".$value."'></a> ";
      					}
      				}
      			?>
          </div>
          <div id="rate"> </div>
     
          <div class="clear space2"></div>
          <ul id="img_thumb">
          	<?php
      				if($detail['pro_images'] != NULL){
      					foreach($images as $img){
      						echo "<li> ";
      						echo "<a class='img_thumb'  href='".base_url()."uploads/products/".$detail['pro_folderimg']."/".$img."' title='".$detail['pro_name']."' rel='zoom-id:Zoomer;' rev='".base_url()."uploads/products/".$detail['pro_folderimg']."/".$img."'>";
      							echo "<img src= '".base_url()."uploads/products/thumb/".$img."' alt='".$detail['pro_name']."' /> ";
      						echo "</a> ";
      						echo "</li>";
      					}
      				}
      			?>
            
          </ul>
        </div>
        
        <div id="overview_product">
          <h1 class="detail_title"><?php echo $detail['pro_name']; ?></h1>
          <p class="detail_des">
          	<?php 
              $detail_ex = nl2br($detail['pro_info']);
              echo $detail_ex;
            ?>
          </p>


          <p class="right_pro_pro_code" style="width:323px"><span style="color:black;font-weight:bold">Mã sp: </span><?php if($detail['pro_code'] == NULL){echo $detail['pro_id'];}else{echo $detail['pro_code'].""; } ?></p>
          <p class="warranty"><span style="font-weight:bold;">Bảo hành:</span> <?php if($detail['pro_war'] == NULL){echo " - ";}else{echo $detail['pro_war'].""; } ?></p>
          <p class="promotions"><span style="text-decoration:underline;font-weight:bold;">Khuyến mãi:</span> <?php if($detail['pro_promotion'] == NULL){echo " - ";}else{echo $detail['pro_promotion'].""; } ?></p>
          <p class="status">Trạng thái: <span style="color:#f00;"> <?php if($detail['pro_qty'] == NULL){echo "Hết hàng";}else{echo "Còn hàng";}?></span></p>
          <p class="price">Giá: <span style="color:#f00;font-size:16px;"> <?php if($detail['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($detail['pro_price'])." đ"; } ?></span></p>
          <p class="market_price">Giá thị trường: <span style="text-decoration:line-through;color:#666;"> <?php if($detail['pro_market'] == 0){echo "";}else{echo @number_format($detail['pro_market'])." đ"; } ?> </span></p>
          <p class="market_price" style="margin-top:0px;">
          	<a style="color:#0a62ac" href="javascript:user_like_content(<?php echo $detail['pro_id']; ?>,'pro');">Thêm vào yêu thích <img style="max-width: 25px;position: relative;top: 5px;" src="<?php echo base_url(); ?>public/images/icons_user_like.png" alt="Thêm vào yêu thích" title="Thêm vào yêu thích"></a>
          </p>
          
          <div class="synthesis">
          <form action="<?php echo base_url()."home/cart/addcart/".$detail['pro_id'].""; ?>" method="post">
            <div class="cssOrder" style="float:left;"><span style="font-size:14px">Số lượng</span>
              <select id="s_quantity" name="s_quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="cssOrder" style="float:right;"> 
            <input style="position:relative;left:17px;top:-5px;border: none;cursor:pointer;" type="submit" value="" class="btn_datmua_to bg" />
            </div>
            </form>
          </div>
          <div class="share_this"> <span class='st_facebook' displayText=''></span> <span class='st_twitter' displayText=''></span> <span class='st_googleplus' displayText=''></span> <span class='st_sharethis' displayText=''></span> 
            <script type="text/javascript">var switchTo5x=true;</script> 
            <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script> 
            <script type="text/javascript">stLight.options({publisher: "a7e862b4-2800-4bf5-9a3a-015522fcf16b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> 
          </div>
        </div>
        
        <div class="clear"></div>
      </div>
      
      <div class="clear"></div>
      <div id="tab_detail_product">
        <div class="title_tab">
        <a href="#dacdiem" class="nobdr_l current">Đặc điểm</a>
        <a href="#thongsokythuat" class="">Thông số kỹ thuật</a> 
        <a href="#binhluan" class="">Bình luận</a>
        </div>
        
        <div class="content_tab">
          <div id="dacdiem" class="cf current">
            <?php if($detail['pro_description'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_description'].""; } ?>
          </div>
         
          <div id="thongsokythuat" class="cf">
            <?php if($detail['pro_full'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_full'].""; } ?>
          </div>
          
          <div id="binhluan" class="cf">
          	<div id="comment_fb" style="margin-top:10px;">
                <div id="cmt_face" class="fb-comments" data-href="<?php echo base_url().uri_string().".html";?>" data-width="651" data-numposts="90"></div>
            </div>
          </div>
          
        </div>
        
      </div>
      
      <div class="clear"></div>
      <p>&nbsp;</p>
      <div class="clear"></div>
    </div>
     
  </div>
  
  <?php $this->load->view("column_right"); ?>
</div>
<script type="text/javascript">
// User like product
function user_like_content(a,b){
	$.post("<?php echo base_url()."home/users/user_like_content"; ?>",{pro_id:a,user_id:b},
		function(c){
			//alert(c);
			//return false;
			if(c == 1){
				if(confirm("Để sử dụng chức năng này bạn cần đăng nhập. Click OK để đăng nhập")){
					window.location="/dang-nhap.html?returnTo="+window.location
				}
			}else{
				if(c == 2){
					alert("Bạn đã lưu rồi")
				}else{
					alert("Bạn đã lưu thành công")
				}
			}
		}
	)
}
</script-->
<script type="text/javascript" src="http://bananashop.com.vn/public/js/jquery.elevatezoom.js"></script>
<div id="Render-Body" class="container">
        <div class="product-detail">
            <ul class="top-img">
                <li><img src="http://bananashop.com.vn/public/images/foot_doi-tra.png" /></li>
                <li><img src="http://bananashop.com.vn/public/images/foot_giao-hang.png" /></li>
                <li><img src="http://bananashop.com.vn/public/images/foot_hoan-tien.png" /></li>
                <li><img src="http://bananashop.com.vn/public/images/foot_thanh-toan.png" /></li>
                <li><img src="http://bananashop.com.vn/public/images/foot_logo.png" /></li>
            </ul>
            <div class="title_home"><a href="http://bananashop.com.vn/">Trang chủ</a> <span>/ <?php echo $detail['pro_name'] ?></span></div>
            <div class="row">
                <div class="col-lg-4">
                <div class="product-images">
                    <div class="big-image">
                            <div class="image">
                            <?php
                            @$images = unserialize($detail['pro_images']);
                            ?>
                                <img id="zoom_01" src="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" data-zoom-image="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" alt="<?php echo $detail['pro_name'] ?>" title="<?php echo $detail['pro_name'] ?>" />
                            </div>
                            <script>
                            $("#zoom_01").elevateZoom();
                            </script> 
                            <div class="video">

                            </div>
                    </div>
                    <div id="image-list" class="flexslider">
                        <ul class="slides">                            
                            
                        </ul>
                    </div>
                </div>
            </div>
                <div class="col-lg-8">
                <h1><?php echo $detail['pro_name'] ?></h1>

                <ul class="summary-detail">
                    
                    <li>
                        <label>Giá bán:</label>
                        <span class="sold-price"><?php echo @number_format($detail['pro_price'])." đ"; ?></span>

                    </li>
                    <li>
                        <label>Tồn kho:</label>
                            <span class="in-stock"><?php echo $detail['pro_qty'] ?> sản phẩm</span> 
                    </li>                   
                </ul>
                <ul class="summary-detail">
                        <li><label>Thương hiệu:</label><span>Gabi Shop</span></li>
                    <li><label>Mã sản phẩm:</label><span><?php echo $detail['pro_code'] ?></span></li>
                        <li>
                                 <label>Kích thước:</label>

                                <span> </span>
                         </li>
                         <li>
                                 <label>Màu:</label>

                                <span></span>
                         </li>
                </ul>
                <form action="<?php echo base_url()."home/cart/addcart/".$detail['pro_id'].""; ?>" class="product-commands" novalidate="novalidate" method="post">
                    <p class="note">Chọn số lượng</p>

                    <table border="0" cellpadding="0" cellspacing="0" class="shopping-cart-detail">
                        <tbody>
                            <tr>
                                <td width="78" align="left" class="deal-image">
                                    <a>
                                      <?php
                            @$images = unserialize($detail['pro_images']);
                            ?>
                                        <img src="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" alt="<?php echo $detail['pro_name'] ?>" title="<?php echo $detail['pro_name'] ?>" height="60" width="60">
                                    </a>
                                </td>
                                <td width="221" align="left" class="product-name">
                                    <span style="color: #f70337;"><?php echo $detail['pro_name'] ?></span>
                                </td>

                                <td width="126" align="left" valign="top" class="product-price">
                                    <span class="sale-price"><?php echo @number_format($detail['pro_price'])." đ"; ?></span>
                                </td>

                                <td width="75">
                                    <input type="hidden" name="code" value="B149420">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="deal-extras clearfix">
                        <div class="extra-item">
                            <input type="submit" name="add" class="add-to-cart-button btn-big" value="Mua ngay">
                        </div>
                    </div>
                </form>

            </div>
            </div>
            <div class="clear"></div>
            <div class="product-info">
                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông tin</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Đặc điểm sản phẩm</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Bình luận</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <?php if($detail['pro_description'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_description'].""; } ?>
                        </div>
         
                        <div role="tabpanel" class="tab-pane" id="messages">
                          <?php if($detail['pro_full'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_full'].""; } ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <div id="cmt_face" class="fb-comments" data-href="<?php echo base_url().uri_string().".html";?>" data-width="651" data-numposts="90"></div>
                        </div>
                    </div>

                </div>
            </div>
            <!--div class="list-product">
                <h3 class="title-rbl-04"><span>sản phẩm liên quan</span></h3>
                <div class="row">
                    <div id="slick-product-detail">
                      <div class="col-md-3 col-sm-4 col-xs-6 item-pd">
                        <a href="quan-tay-den--7.html">
                          <img src="http://bananashop.com.vn/uploads/title_img/banana10422797651571204439.JPG" />
                            <span class="iconnew" title="New">&nbsp;</span>
                          </a>
                          <a href="quan-tay-den--7.html"<p class="name-product">Quần Tây Đen </p></a>
                        <span class="price">400.000 đ</span>
                      </div>
                    </div>
                </div>
            </div-->
        </div>
    </div>   
