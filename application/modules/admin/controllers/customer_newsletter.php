<?php
	require("libraries/student.php");
	class Customer_newsletter extends Student{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->model("mcustomer_newsletter");
		}
		public function index(){
			$data['title'] = "Khách hàng nhận bản tin";
			$data['act'] = "3";
			$config['base_url'] 	= base_url()."admin/customer_newsletter/index";
			$config['total_rows'] 	= $this->mcustomer_newsletter->count_all();
			$config['per_page'] 	= "10";
			$config['uri_segment'] 	= "4";
			$config['next_link'] 	= "Next";
			$config['prev_link'] 	= "Prev";
			$config['first_link'] 	= "First";
			$config['last_link'] 	= "Last";
			$this->load->library("pagination");
			$this->pagination->initialize($config);
			$start = $this->uri->segment(4);
			$data['list_newsletter'] = $this->mcustomer_newsletter->list_newsletter($config['per_page'],$start);
			//$this->debug($data['list_contact']);
			$data['template'] = "customer_newsletter/list_newsletter";
			$this->load->view("layout",$data);
		}
		public function update(){
			$id = $this->input->post("id");
			$data['act'] 		= "3";
			$email = $this->mcustomer_newsletter->check_email($this->input->post("email"),$id);
			if($email == FALSE){
				echo "error";
				die();
			}else{
				$db = array(
					"letter_name" 	=> $this->fillter($this->input->post("name")),
					"letter_email" => $this->fillter($this->input->post("email")),
					"letter_phone" 	=> $this->fillter($this->input->post("phone")),
					"letter_address" 	=> $this->fillter($this->input->post("address"))
				);
				$this->mcustomer_newsletter->update($db,$id);
			}
		}
		public function del(){
			$id = $this->input->post('id');
			$this->mcustomer_newsletter->del_newsletter($id);
		}
	}