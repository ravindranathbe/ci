<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css'); ?>" />
</head>
<body>
	<div id="mainBody">
		<div id="header">
			<h1><?php echo 'Blog'; ?></h1>
			<?php $this->load->view('navlinks'); ?>
		</div>
		<div id="mainContent"><?php echo $main_content; ?></div>
		<div id="footer"><?php $this->load->view('footer'); ?></div>
	</div>
</body>
</html>