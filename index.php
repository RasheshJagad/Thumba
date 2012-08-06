<?php
	require_once(dirname(__FILE__)."/../../../scripts/init.inc.php");
	$oMysql = MySQL::getInstance();
	$aNews = $oMysql->getNews(NB_NEWS);
	
	if(Tools::getValue('btSubmit'))
	{
		$effectThumba = $_POST['effectThumba'];
		$effectDuration = $_POST['effectDuration'];
		$keyNav = $_POST['keyNav'];
		$mouseNav = $_POST['mouseNav'];
		$coeffZoom = $_POST['coeffZoom'];
		$speedOpenLightBox = $_POST['speedOpenLightBox'];
		$legendPadding = $_POST['legendPadding'];
		$legendOpacity = $_POST['legendOpacity'];
		$thumba_default = $_POST['thumba_default'];

	}
	else
	{
		$thumba_default = 1;
		$effectThumba = 'easeOutBack';
		$effectDuration = 450;
		$keyNav ='true';
		$mouseNav = 'true';
		$coeffZoom = 2.5;
		$speedOpenLightBox = 100;
		$legendPadding = 5;
		$legendOpacity = 0.8;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Thumba demonstration page : jquery plugin | thumbnails gallery like Google images : MyjQueryPlugins.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Language" content="en" />
	<base href="<?php echo URL_SITE; ?>" />
	<link rel="shortcut icon" href="<?php echo URL_SITE; ?>favicon.ico" />
	<meta name="description" content="BackToTop : a very light jQuery plugin. When you scroll your page, a Back to top link appearing into your page everytime you scroll down the page.  With MyjQueryPlugins, it's very easy to animate your website with jQuery and jQuery UI !" />
	<meta name="robots" content="index, follow, all" />
	<link rel="alternate" type="application/rss+xml" href="<?php echo URL_SITE; ?>rss.xml" title="RSS feeds" />
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo URL_SITE; ?><?php echo URL_DEMO_THUMBA; ?>jquery/Thumba.jquery.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/content.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/648.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/336.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css' />
</head>

<body id="demopage">


	<?php require_once(dirname(__FILE__)."/../../../includes/header.inc.php");?>

	<div id="main">
		<div class="breadcrumb">
			<a href="index" class="backTo">Home</a>
			<a href="Thumba" class="backTo">Thumba Homepage</a>
			<div class="clr"></div>
		</div>
		
		<div id="left_col">

			<h1>Thumba demonstration : thumbnails gallery</h1>
			<p><span class="important">Works on IE8+ </span></p>
			
			<div class="ThumbaGallery">
				<ul class="thumba">
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso1.jpg" <?php if ($thumba_default == 1) echo 'class="thumba_default"';?> title="Legend of the image"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso1.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso2.jpg" <?php if ($thumba_default == 2) echo 'class="thumba_default"';?> title="Legend of the second image"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso2.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso3.jpg" <?php if ($thumba_default == 3) echo 'class="thumba_default"';?> title="Picasso was a great man !"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso3.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso4.jpg" <?php if ($thumba_default == 4) echo 'class="thumba_default"';?> title="What a fabulous jQuery plugin : Thumba Plugin !"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso4.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso5.jpg" <?php if ($thumba_default == 5) echo 'class="thumba_default"';?> title="Legend of the image"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso5.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso6.jpg" <?php if ($thumba_default == 6) echo 'class="thumba_default"';?> title="Legend of the image"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso6.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso7.jpg" <?php if ($thumba_default == 7) echo 'class="thumba_default"';?> title="Legend of the image"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso7.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso8.jpg" <?php if ($thumba_default == 8) echo 'class="thumba_default"';?> title="Legend of the image"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso8.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso1.jpg" <?php if ($thumba_default == 9) echo 'class="thumba_default"';?>><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso1.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso2.jpg" <?php if ($thumba_default == 10) echo 'class="thumba_default"';?> title="Legend of the image"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso2.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso3.jpg" <?php if ($thumba_default == 11) echo 'class="thumba_default"';?>><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso3.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso4.jpg" <?php if ($thumba_default == 12) echo 'class="thumba_default"';?> title="Legend of the image"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso4.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso5.jpg" <?php if ($thumba_default == 13) echo 'class="thumba_default"';?>><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso5.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso6.jpg" <?php if ($thumba_default == 14) echo 'class="thumba_default"';?> title="Legend of the image"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso6.jpg" alt="Picasso Maestro" /></a></li>
					<li><a href="<?php echo URL_DEMO_THUMBA; ?>images/big/picasso7.jpg" <?php if ($thumba_default == 15) echo 'class="thumba_default"';?> title="This is a very very very very very very very very very very very very very very very very very very very very very long legend !! :)"><img src="<?php echo URL_DEMO_THUMBA; ?>images/thumbs/picasso7.jpg" alt="Picasso Maestro" /></a></li>
				</ul>
			</div>
		
			<div class="help">
				<strong>HOW TO USE THUMBA ?</strong><br /><br />
				1. You can use "Left" &amp; "Right" arrows to navigate and move Thumba box <span>(with Mozilla, mouse must be out of the gallery. This bug will be fixed later..)</span><br />
				2. Thumba box moves on the keyUp event (not on keyPress or keyDown) when you use keyboard navigation.<br />
				3. Press "Enter" or click on a thumbnail to start the lightbox.<br />
				4. When Thumba lightbox is running, use "Enter" or click onto the overlay or click onto the image to close it.<br />
				5. When Thumba lightbox is running, use "Left" &amp; "Right" arrows to close the lightbox.
			</div>
			
			<h2>Change options</h2>
			<form method="post" action="">
				<fieldset>
					<label>Put the <em><strong>thumba_default</strong></em> class to the thumbnail number :</label>
					<select name="thumba_default">
						<option value="1" <?php if($thumba_default == 1) echo 'selected="selected"';?>>1</option>
						<option value="2" <?php if($thumba_default == 2) echo 'selected="selected"';?>>2</option>
						<option value="3" <?php if($thumba_default == 3) echo 'selected="selected"';?>>3</option>
						<option value="4" <?php if($thumba_default == 4) echo 'selected="selected"';?>>4</option>
						<option value="5" <?php if($thumba_default == 5) echo 'selected="selected"';?>>5</option>
						<option value="6" <?php if($thumba_default == 6) echo 'selected="selected"';?>>6</option>
						<option value="7" <?php if($thumba_default == 7) echo 'selected="selected"';?>>7</option>
						<option value="8" <?php if($thumba_default == 8) echo 'selected="selected"';?>>8</option>
						<option value="9" <?php if($thumba_default == 9) echo 'selected="selected"';?>>9</option>
						<option value="10" <?php if($thumba_default == 10) echo 'selected="selected"';?>>10</option>
						<option value="11" <?php if($thumba_default == 11) echo 'selected="selected"';?>>11</option>
						<option value="12" <?php if($thumba_default == 12) echo 'selected="selected"';?>>12</option>
						<option value="13" <?php if($thumba_default == 13) echo 'selected="selected"';?>>13</option>
						<option value="14" <?php if($thumba_default == 14) echo 'selected="selected"';?>>14</option>
						<option value="15" <?php if($thumba_default == 15) echo 'selected="selected"';?>>15</option>
					</select>
					<em>(on above which thumbnail the Thumba div will move ?)</em>
					
					<br /><br />
					
					<label>effectThumba</label>
					<select name="effectThumba">
						<option value="linear" <?php if($effectThumba == 'linear') echo 'selected="selected"';?>>linear</option>
						<option value="easeOutQuad" <?php if($effectThumba == 'easeOutQuad') echo 'selected="selected"';?>>easeOutQuad</option>
						<option value="easeInCubic" <?php if($effectThumba == 'easeInCubic') echo 'selected="selected"';?>>easeInCubic</option>
						<option value="easeOutQuart" <?php if($effectThumba == 'easeOutQuart') echo 'selected="selected"';?>>easeOutQuart</option>
						<option value="easeInOutQuart" <?php if($effectThumba == 'easeInOutQuart') echo 'selected="selected"';?>>easeInOutQuart</option>
						<option value="easeOutBounce" <?php if($effectThumba == 'easeOutBounce') echo 'selected="selected"';?>>easeOutBounce</option>
						<option value="easeInBounce" <?php if($effectThumba == 'easeInBounce') echo 'selected="selected"';?>>easeInBounce</option>
						<option value="easeInOutBounce" <?php if($effectThumba == 'easeInOutBounce') echo 'selected="selected"';?>>easeInOutBounce</option>
						<option value="easeOutBack" <?php if($effectThumba == 'easeOutBack') echo 'selected="selected"';?>>easeOutBack</option>
					</select>
					<em>(<a href="http://jqueryui.com/docs/effect/#easing">all UI effects availables</a>)</em>
					
					<br /><br />
					
					<label>effectDuration</label>
					<select name="effectDuration">
						<option value="150" <?php if($effectDuration == 150) echo 'selected="selected"';?>>150 ms</option>
						<option value="300" <?php if($effectDuration == 300) echo 'selected="selected"';?>>300 ms</option>
						<option value="450" <?php if($effectDuration == 450) echo 'selected="selected"';?>>450 ms</option>
						<option value="600" <?php if($effectDuration == 600) echo 'selected="selected"';?>>600 ms</option>
						
					</select>
					<em>(speed of the Thumba div)</em>
					
					<br /><br />
					
					<label>keyNav</label>
					<select name="keyNav">
						<option value="true" <?php if($keyNav == 'true') echo 'selected="selected"';?>>Y</option>
						<option value="false" <?php if($keyNav == 'false') echo 'selected="selected"';?>>N</option>
					</select>
					<em>(Allow navigation with left & right arrows or not)</em>
					
					<br /><br />
					
					<label>mouseNav</label>
					<select name="mouseNav">
						<option value="true" <?php if($mouseNav == 'true') echo 'selected="selected"';?>>Y</option>
						<option value="false" <?php if($mouseNav == 'false') echo 'selected="selected"';?>>N</option>
					</select>
					<em>(Allow navigation with mouse or not)</em>
					
					<br /><br />
					
					<label>coeffZoom</label>
					<select name="coeffZoom">
						<option value="1.5" <?php if($coeffZoom == 1.5) echo 'selected="selected"';?>>x 1.5</option>
						<option value="2.5" <?php if($coeffZoom == 2.5) echo 'selected="selected"';?>>x 2.5</option>
						<option value="3.5" <?php if($coeffZoom == 3.5) echo 'selected="selected"';?>>x 3.5</option>
						
					</select>
					<em>(coefficent of the image Zoom)</em>
					
					<br /><br />
					
					<label>speedOpenLightBox</label>
					<select name="speedOpenLightBox">
						<option value="100" <?php if($speedOpenLightBox == 100) echo 'selected="selected"';?>>100</option>
						<option value="300" <?php if($speedOpenLightBox == 300) echo 'selected="selected"';?>>300</option>
						<option value="500" <?php if($speedOpenLightBox == 500) echo 'selected="selected"';?>>500</option>
						
					</select>
					<em>(speed in ms of the opening of Thumba LightBox)</em>
					
					<br /><br />
					
					<label>legendPadding</label>
					<select name="legendPadding">
						<option value="0" <?php if($legendPadding == 0) echo 'selected="selected"';?>>0 px</option>
						<option value="5" <?php if($legendPadding == 5) echo 'selected="selected"';?>>5 px</option>
						<option value="10" <?php if($legendPadding == 10) echo 'selected="selected"';?>>10 px</option>
						
					</select>
					<em>(padding of the paragraph containing the image legend)</em>
					
					<br /><br />
					
					<label>legendOpacity</label>
					<select name="legendOpacity">
						<option value="0.3" <?php if($legendOpacity == 0.3) echo 'selected="selected"';?>>0.3</option>
						<option value="0.5" <?php if($legendOpacity == 0.5) echo 'selected="selected"';?>>0.5</option>
						<option value="0.8" <?php if($legendOpacity == 0.8) echo 'selected="selected"';?>>0.8</option>
						
					</select>
					<em>(opacity of the legend container)</em>
					
					<br /><br />	
					
					<input type="submit" name="btSubmit" value="Change options">
				</fieldset>
			</form>
			<div class="clr"></div>

			<h2>JS code</h2>
			<div class="sourceCode">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
$(document).ready(function(){
 $(\'.ThumbaGallery\').Thumba({
  effectThumba : \''.$effectThumba.'\', /** all effects http://jqueryui.com/docs/effect/#easing */
  effectDuration : '.$effectDuration.',
  keyNav : '.$keyNav.',
  mouseNav : '.$mouseNav.',
  coeffZoom : '.$coeffZoom.',
  speedOpenLightBox : '.$speedOpenLightBox.',
  legendPadding : '.$legendPadding.',
  legendOpacity : '.$legendOpacity.'
 });
});
</script>
');
?>
</pre>
			</div>
			
			
			
			<!-- Advertise Bottom -->
			<?php require_once(dirname(__FILE__)."/../../../includes/pub.inc.php");?>
		</div>

		<!-- RIGHT COLUMN -->
		<?php require_once(dirname(__FILE__)."/../../../includes/col_right.inc.php");?>
				
		<div class="clr"></div>

	</div>
		
		
	<!-- FOOTER -->
	<?php require_once(dirname(__FILE__)."/../../../includes/footer.inc.php");?>

	<script type="text/javascript" src="<?php echo URL_SITE; ?><?php echo URL_DEMO_THUMBA; ?>jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL_SITE; ?><?php echo URL_DEMO_THUMBA; ?>jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo URL_SITE; ?><?php echo URL_DEMO_THUMBA; ?>jquery/Thumba.jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.ThumbaGallery').Thumba({
				effectThumba : '<?php echo $effectThumba;?>',
				effectDuration : <?php echo $effectDuration;?>,
				keyNav : <?php echo $keyNav;?>,
				mouseNav : <?php echo $mouseNav;?>,
				coeffZoom :  <?php echo $coeffZoom;?>,
				speedOpenLightBox :  <?php echo $speedOpenLightBox;?>,
				legendPadding :  <?php echo $legendPadding;?>,
				legendOpacity :  <?php echo $legendOpacity;?>
			});
		});
	</script>
	
	<?php require_once dirname(__FILE__)."/../../../includes/analytics.inc.php"; ?>
</body>
</html>