<?php
/**
 *  Front Page
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @package WordPress
 * @subpackage Viva Cognita
 * @since Viva Cognita 2.0
 */

get_header(); ?>


        <!-- Begin #container2 this holds the content and sidebars-->
        
        <div id="mainContentContainer" class="bg-home">
        
			<div id="sheet">
			
				<div id="grid">
					
					<div id="FirstRow">
						<div class="flt-left home-col-1-1"><div id="ForProject"><a href="<?php echo get_bloginfo('url'); ?>/?page_id=129" class="homebtn"></a></div></div>
						<div class="flt-left home-col-2-1"></div>
						<div class="flt-left home-col-3-1"><div id="Partners"><a href="<?php echo get_bloginfo('url'); ?>/?page_id=127" class="homebtn"></a></div></div>
					</div>
					
					<div id="SecondRow">
						<div class="flt-left home-col-1-2"></div>
						<div class="flt-left home-col-2-2"><div id="RoadMap"><a href="<?php echo get_bloginfo('url'); ?>/?page_id=125" class="homebtn"></a></div></div>
						<div class="flt-left home-col-3-2"></div>				
					</div>
					
				</div>	
			
			</div>
 <?php 
 get_footer(); ?>
