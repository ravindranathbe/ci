<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css'); ?>" />
</head>
<body>

<?php $this->load->view('navlinks'); ?>
<?php echo $main_content; ?>

</body>
</html>