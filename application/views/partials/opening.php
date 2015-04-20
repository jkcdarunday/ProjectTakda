<!doctype html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url('resources/css/pure-min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('resources/css/grids-responsive-min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('resources/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('resources/css/font-awesome.min.css'); ?>">
		<script src="<?php echo base_url('resources/js/schedule-renderer.js'); ?>"></script>
	</head>
	<body>
		<div class="pure-g">
			<div class="menubar pure-u-1 pure-u-md-1-5">
				<div class="menu">
					<div class="logo"><img id="logo" src="<?php echo base_url('resources/images/takda.png'); ?>"></div>
					<div class="title">TaKDa</div>

					<nav class="nav">
						<a class="pure-button" href="<?php echo site_url('Home'); ?>">Home</a>
						<a class="pure-button" href="<?php echo site_url('Schedule'); ?>">Schedule</a>
						<a class="pure-button" href="<?php echo site_url('Room'); ?>">Rooms</a>
						<a class="pure-button" href="<?php echo site_url('Course'); ?>">Courses</a>
						<a class="pure-button" href="<?php echo site_url('Section'); ?>">Sections</a>
					</nav>
				</div>
			</div>
		<div class="content pure-u-1 pure-u-md-4-5">