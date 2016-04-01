<div class="paddings">
  <div id="action-links">
    <!--ul>
      <li id="add-prod"><a href="<?php echo base_url()."admin/customer/add" ?>">Thêm khách hàng mới</a></li>
    </ul-->
  </div>
  <script type="text/javascript">
	function download_excel(){
		window.location = "ajax/excel_download.php" + "?action=download-customer-newsletter";
	}
</script>
  <table width="100%" id="tb_padding" border="1" bordercolor="#CCCCCC" style="border-collapse:collapse;">
    <tbody>
      <tr style="background-color:#EEE; font-weight:bold">
        <td width="4%" style="text-align:center">STT</td>
        <td width="14%">Họ tên</td>
        <td width="19%">Email</td>
        <td width="9%">Số điện thoại</td>
        <td width="29%">Địa chỉ</td>
        <td width="16%">Ngày tham gia</td>
        <td width="9%">Chỉnh sửa</td>
      </tr>
      <?php
	  	if(isset($list_newsletter) && $list_newsletter != NULL){
			$stt = 0;
			foreach($list_newsletter as $value){
				$stt++;
	  ?>
      <tr id="row_<?php echo $value['letter_id']; ?>" onMouseOver="this.className='row-hover'" onMouseOut="this.className=''" class="">
        <td style="text-align:center"><?php echo $stt; ?></td>
        <td><span id="name_<?php echo $value['letter_id']; ?>"><?php echo $value['letter_name']; ?></span></td>
        <td><span id="email_<?php echo $value['letter_id']; ?>"><?php echo $value['letter_email']; ?></span></td>
        <td><span id="phone_<?php echo $value['letter_id']; ?>"><?php echo $value['letter_phone']; ?></span></td>
        <td><span id="address_<?php echo $value['letter_id']; ?>"><?php echo $value['letter_address']; ?></span></td>
        <td><?php echo $value['letter_date']; ?></td>
        <td><span id="form_<?php echo $value['letter_id']; ?>"><a href="javascript:change_form(<?php echo $value['letter_id']; ?>,'<?php echo $value['letter_name']; ?>','<?php echo $value['letter_email']; ?>','<?php echo $value['letter_phone']; ?>','<?php echo $value['letter_address']; ?>')">Chỉnh sửa</a> | <a href="javascript:delete_cus_newsletter(<?php echo $value['letter_id']; ?>)">Xóa</a></span></td>
      </tr>
      <?php
		} }else{
			echo "<tr><td colspan='7'>Không có email nào</td></tr>";
		}
	  ?>
    </tbody>
  </table>
  <br />
  <div id="pagination"><?php  echo $this->pagination->create_links();?></div>
  
  <script>
	function change_form(id, name, email,phone,address){
		$("#name_"+id).html("<input type='text' size=30 value='"+name+"' id='change_name_"+id+"' >");
		$("#email_"+id).html("<input type='text' size=40 value='"+email+"' id='change_email_"+id+"' >");
		$("#phone_"+id).html("<input type='text' size=20 value='"+phone+"' id='change_phone_"+id+"' >");
		$("#address_"+id).html("<input type='text' size=70 value='"+address+"' id='change_address_"+id+"' >");
		$("#form_"+id).html("<input type='button' value='Cập nhật' onclick='update_cus_newsletter("+id+")' >");
	}
	
	function update_cus_newsletter(id){
		$("#form_"+id).html("...đang xử lý");
		var new_name = $("#change_name_"+id).val();
		var new_email = $("#change_email_"+id).val();
		var new_phone = $("#change_phone_"+id).val();
		var new_address = $("#change_address_"+id).val();
		$.post("<?php echo base_url()."admin/customer_newsletter/update"; ?>"
			   , {action : "update-customer-newsletter" , name:new_name,email:new_email,phone:new_phone,address:new_address,id:id}
			   , function(data){
				   if(data == 'error'){
					   alert("Email này đã tồn tại !"); return false;
				   }else{
					   $("#name_"+id).html(new_name);$("#email_"+id).html(new_email);$("#phone_"+id).html(new_phone);$("#address_"+id).html(new_address);$("#form_"+id).html("Xong");
				   }
		});
	}
	
	function delete_cus_newsletter(id){
		if(confirm('Bạn chắc chắn muốn xóa ?')) {
			$.post("<?php echo base_url()."admin/customer_newsletter/del"; ?>"
				   , {action : "delete-customer-newsletter", id : id}
				   , function(data){ $("#row_"+id).fadeOut(); });
		}
	}
</script> 
</div>
