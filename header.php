<?php 
// CONNECT TO MYSQL DATABASE
require(__DIR__.'/config.php');
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">

<head>
	<!-- Website Title -->
	<title>Carden Trader</title>
	
	<!-- Website Icon -->
	<link rel="shortcut icon" href="<?php echo IMAGES_DIR; ?>/logo-tiny.ico" />
	
	<!-- CSS Link -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo CSS_DIR; ?>/main.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo CSS_DIR; ?>/form_elements.css" />
	
	<!-- Description -->
	<meta name="description" content="Find volunteer opertunities easily." />
	
	<!-- Keywords -->
	<meta name="keywords" content="volunteer hours" />
	
	<!-- Author -->
	<meta name="author" content="Peter Veerman, Andrew Ortegaray" />
	
	<!-- Character Set -->
	<meta charset="UTF-8" />
	
	<!-- JQuery Reference (Don't worry about this) -->
	<script src="<?php echo LIB_DIR; ?>/jquery.min.js" ></script>
	<script src="<?php echo LIB_DIR; ?>/jquery.form.js"></script>
	<script src="<?php echo LIB_DIR; ?>/jquery.filedrop.js"></script>
	<script src="<?php echo LIB_DIR; ?>/unslider2.min.js"></script>
	
</head>

<body>

<div id="header_bar">
	<div class="wrapper">
		<h1 id="logo">Volunteer Finder</h1>
		<input id="big-search-top" type='text' placeholder='Search For Volunteer Opertunity' />
		<button class="big-search-btn" title="Search">&nbsp;</button>
		<button class="plus-btn" title="Create New Job">&nbsp;</button>
	</div>
</div>

<div style='margin-bottom: 52px;'></div>