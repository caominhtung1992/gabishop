<?php 
	if(!isset($_SESSION['ulogin']) && $info['set_pass'] != NULL){
		redirect(base_url()."close");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="ACX-yCidhQdR6LFQpQnEbXqEUOSEYG_p9gA14zHifhI" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="600" />
<title><?php echo $title ; ?></title>
<link rel="canonical" href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" />
<meta name="keywords" content="<?php echo $config['config_key']; ?>" />
<meta name="description" content="<?php echo $config['config_des']; ?>" />
<meta property="og:type" content="blog" />
<meta property="og:title" content="<?php echo $config['config_title']; ?>" />
<meta property="og:description" content="<?php echo $config['config_des']; ?>" />
<meta property="og:url" content="<?php echo base_url(); ?>" />
<meta property="og:site_name" content="<?php echo $config['config_title']; ?>" />
<meta property="og:image" content="<?php echo base_url()."public/images/logo.png"; ?>" />
<meta property="fb:admins" content="100003809560252"/>
<meta name="twitter:card" content="summary" />
<?php $this->load->view("scripts");?>
</head>

<body style="position: relative; min-height: 100%; top: 0px;">
	<?php $this->load->view("header");?>
    <?php $this->load->view("content"); ?>
    <?php $this->load->view("footer"); ?>
</body>
</html>
<!-- Powered by Northstar / Website: www.NorthStar.vn -->