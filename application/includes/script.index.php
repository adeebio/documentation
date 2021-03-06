<!DOCTYPE html>

<html>

<head>
<title>AAL & ACTLab Documentation</title>
<link rel="SHORTCUT ICON" href="application/images/ico/favicon.16x16-01.png"/>
<link rel="stylesheet" type="text/css" href="application/styles/styles.css" />
<script type="text/javascript" src="application/scripts/scripts.js"></script>
</head>

<body onload="content.initial();">

<div class="index">
	<div id="header" class="header font_header">
		AAL&nbsp;&&nbsp;ACTLab&nbsp;Documentation
	</div>
	<div id="menu" class="menu font_menu">
		<?php
			
			buildMenu();
			
		?>
	</div>
	<div id="border" class="border" onmousedown="border.down();"></div>
	<div id="content" class="content font_normal">
		<div class="index">
			<div class="center">
				<div class="block"></div>
				<div id="body" class="body font_normal"></div>
				<div class="block"></div>
			</div>
		</div>
	</div>
</div>

</body>

</html>