
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
		<title>Test project</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/myScript.js" type="text/javascript"></script>
		<script src="js/Gallery.js" type="text/javascript"></script>
	</head>
	<body>

		<?
			include("blocks/category.php");
		?>

		
				<div id="gallery">
					<div id="big"><img src="images/gal/start.jpg" alt="Старт" /></div>
					<div id="small">
					<a href="images/gal/1.jpg"><img src="images/gal/1_mini.jpg" alt="Миниатюра 1" /></a>
					<a href="images/gal/2.jpg"><img src="images/gal/2_mini.jpg" alt="Миниатюра 2" /></a>
					<a href="images/gal/3.jpg"><img src="images/gal/3_mini.jpg" alt="Миниатюра 3" /></a>
					<a href="images/gal/4.jpg"><img src="images/gal/4_mini.jpg" alt="Миниатюра 4" /></a>
					</div>
		</div>
	</body>
	</html>