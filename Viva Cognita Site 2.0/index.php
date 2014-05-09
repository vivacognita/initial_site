<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>


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
  
 <?php 
 get_footer(); ?>