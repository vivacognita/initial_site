<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;   charset=<?php bloginfo('charset'); ?>" />
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<title><?php 
				if (function_exists('is_tag') && is_tag()) {
					single_tag_title('Tag Archive for &quot;'); echo '&quot; - '; 
				} elseif (is_archive()) { 
					wp_title(''); echo ' Archive - '; 
				} elseif (is_search()) { 
					echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
				} elseif (!(is_404()) && (is_single()) || (is_page())) { 
					wp_title(''); echo ' - '; 
				} elseif (is_404()) {
					echo 'Not Found - '; 
				} 
				if (is_home()) {
					bloginfo('name'); echo ' - '; bloginfo('description'); 
				} else { 
					bloginfo('name'); 
				} 
				if ($paged > 1) {
					echo ' - page '. $paged;
				} 
				?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/home-page.css" />
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<!--[if IE]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--
		<meta name="viewport" content="width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">	
		-->
		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>
  </head>
  <body>

  <div id="container">

	<header>
	 
		<div id="mainHeadContainer">
			<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_header.png" alt="Logo Viva Cognita" alt="Logo Viva Cognita"></div>
			<div id="hdrRight" class="flt-right">
				<div id="mnuTop" class="mnuTop">
					<ul>
						<li><a href="#Contacts">Контакти</a></li>
					</ul>  				
				</div>
				<div id="mnuTopSoc" class="mnuTopSoc"> 
					<ul>
						<li class="bdr-2px bdr-left-right"><a href="#FB"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-bot.png" alt="Viva Cognita at Facebook" width="66" height="64" border="0" /></a></li>
						<li class="bdr-2px bdr-right"><a href="#TW"><img src="<?php echo get_template_directory_uri(); ?>/images/tweet-bot.png" alt="Viva Cognita at Tweeter" width="66" height="64" border="0" /></a></li>
						<li class="bdr-2px bdr-right"><a href="#YouTube"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-bot.png" alt="Viva Cognita at YouTube" width="66" height="64" border="0" /></a></li>
					</ul>  					
				</div>
			</div>
		</div>          
	</header><!--//header-->
	  
	<div id="mainNavContainer">
		<div id="mainNav">
			<ul>
				<li><a href="#home">Начало</a></li>
				<li><a href="content.html">За проекта</a></li>
				<li><a href="#contact">Пътна карта</a></li>
				<li><a href="#about">Партньори</a></li>
			</ul>    
		</div>
	</div>


        <!-- Begin #container2 this holds the content and sidebars-->
        
        <div id="mainContentContainer" class="bg-home">
        
			<div id="sheet">
			
				<div id="grid">
					
					<div id="FirstRow">
						<div class="flt-left home-col-1-1"><div id="ForProject"><a href="#forpoject" class="homebtn"></a></div></div>
						<div class="flt-left home-col-2-1"></div>
						<div class="flt-left home-col-3-1"><div id="Partners"><a href="#fpartners" class="homebtn"></a></div></div>
					</div>
					
					<div id="SecondRow">
						<div class="flt-left home-col-1-2"></div>
						<div class="flt-left home-col-2-2"><div id="RoadMap"><a href="#roadmap" class="homebtn"></a></div></div>
						<div class="flt-left home-col-3-2"></div>				
					</div>
					
				</div>	
			
			</div>
  
			<div id="mainFooterContainer">
				<div class="clr-both ftrAck">Viva Cognita е партньорски проект на Института по математика и информатика на БАН, Съюза на математиците в България и VIVACOM</div>
			</div> 

		</div>	
  </body>
</html>