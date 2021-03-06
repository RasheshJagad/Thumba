
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Thumba Demonstration : MyjQueryPlugins.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/Thumba.jquery.css" type="text/css" />
	
	
	<style type="text/css">
		*{margin:0;padding:0}
		body{margin:50px 30px;font-family:Arial}
		.help {
			border-top:2px dashed #fff;
			border-bottom:2px dashed #fff;
			color:#fff;background-color:#2b2b2b;width:680px;font-size:11px;padding:10px;text-align:left;
		}
		
	</style>
</head>

<body>
<ul>
	<li>Full documentation on <a href="http://www.myjqueryplugins.com/Thumba">MyjQueryPlugins.com/Thumba</a></li>
	<li>Live demonstration on <a href="http://www.myjqueryplugins.com/Thumba/demo">Thumba demonstration page</a></li>
</ul>
<h1>Thumba plugin</h1>
	<div class="ThumbaGallery">
		<ul class="thumba">
			<li><a href="images/big/picasso1.jpg" class="thumba_default" title="Legend of the image"><img src="images/thumbs/picasso1.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso2.jpg" title="Legend of the second image"><img src="images/thumbs/picasso2.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso3.jpg" title="Picasso was a great man !"><img src="images/thumbs/picasso3.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso4.jpg" title="What a fabulous jQuery plugin : Thumba Plugin !"><img src="images/thumbs/picasso4.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso5.jpg" title="Legend of the image"><img src="images/thumbs/picasso5.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso6.jpg" title="Legend of the image"><img src="images/thumbs/picasso6.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso7.jpg" title="Legend of the image"><img src="images/thumbs/picasso7.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso8.jpg" title="Legend of the image"><img src="images/thumbs/picasso8.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso1.jpg"><img src="images/thumbs/picasso1.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso2.jpg" title="Legend of the image"><img src="images/thumbs/picasso2.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso3.jpg"><img src="images/thumbs/picasso3.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso4.jpg" title="Legend of the image"><img src="images/thumbs/picasso4.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso5.jpg"><img src="images/thumbs/picasso5.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso6.jpg" title="Legend of the image"><img src="images/thumbs/picasso6.jpg" alt="Picasso Maestro" /></a></li>
			<li><a href="images/big/picasso7.jpg"  title="This is a very very very very very very very very very very very very very very very very very very very very very long legend !! :)"><img src="images/thumbs/picasso7.jpg" alt="Picasso Maestro" /></a></li>
		</ul>
	</div>
	
	<div class="help">
		<strong>HOW TO USE THUMBA ?</strong><br /><br />
		1. You can use "Left" &amp; "Right" arrows to navigate and move Thumba box (with Mozilla, mouse must be out of the gallery. This bug will be fixed later..)<br />
		2. Thumba box moves on the keyUp event (not on keyPress or keyDown) when you use keyboard navigation.<br />
		3. Press "Enter" or click on a thumbnail to start the lightbox.<br />
		4. When Thumba lightbox is running, use "Enter" or click onto the overlay or click onto the image to close it.<br />
		5. When Thumba lightbox is running, use "Left" &amp; "Right" arrows to close the lightbox.<br />
	</div>
	

	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="jquery/Thumba.jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.ThumbaGallery').Thumba({});
		});
	</script>
	

</body>
</html>
