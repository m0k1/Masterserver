<?php
	include 'master/config.php';
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>MasterServer Panel</title>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link type="text/css" rel="StyleSheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-alert.js"></script>
	<script src="js/bootstrap-button.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bystolen.js"></script>
</head>
<body>
 <div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div style="margin:0 20px 0 20px;">
			<a class="brand" href="index.php">Control Panel</a>
			<ul class="nav">
				<li><a href="">Stats</a></li>
				<li><a href="">Black List</a></li>
				<li><a onclick="location.reload()" href="#"><i class="icon-refresh"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="content">
	<legend>Basic settings</legend>
		<div class="well sidebar-nav">
			<div id="message"></div>
			<form action="" id="settings" name="settings" method="post">
				<table class="table table-bordered">
					<tr><td>Host</td><td><input type="text" name="host" id="host" size="15" value="<?php echo $settings['host']; ?>"></td></tr>
					<tr><td>Port</td><td><input type="text" name="port" id="port" size="5" value="<?php echo $settings['port']; ?>"></td></tr>
					<tr><td>Sort by ping</td><td>
						<select id="sort">
							<option value="1" <?php if($settings['sort']){echo 'selected';} ?>>Enabled</option>
							<option value="0" <?php if(!$settings['sort']){echo 'selected';} ?>>Disabled</option>
						</select>
					</td></tr>
				</table>
				<input id="button" class="btn btn-primary" onClick="set();" value="Refresh">
			 </form>
		</div>
			<table class="table table-bordered">
				<tr>
					<td><button class="btn btn-primary" onClick="ms(1);">Start</button></td>
					<td><button class="btn btn-primary" onClick="ms(2);">Stop</button></td>
					<td><button class="btn btn-primary" onClick="ms(3);">Restart</button></td>
				</tr>
			</table>
	<span class="label label-info">Powered by Stolen</span>
</div>
</body>
</html>
