<?php
/*
Template Name: About Viva Cognita
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @package WordPress
 * @subpackage Viva Cognita
 * @since Viva Cognita 2.0
 */

get_header(); ?>


        <!-- Begin #container2 this holds the content and sidebars-->
        
         <div id="mainContentContainer" class="bg-content">
        
			<div id="sheet">
				
				<div id="contentHeader">
					<img src="<?php echo get_template_directory_uri(); ?>/images/buhal_png.png" width="78px" height="81px" alt="Бухал" class="flt-left img-padd-lite"/>
					<h1> <?php wp_title(''); ?> </h1>
				</div>	
	
				<div id="contentAbstract">
						<div id="projectHeaderBg"> </div>
							<div id="projectLogoCong">
								<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/vivacong-ver.png">
							</div>
						<div id="projectMenuSchool" class="buttnAbstract flt-left">
							<a href="<?php echo get_bloginfo('url'); ?>/?page_id=223"></a>
						</div>
						<div id="projectMenuStudent" class="buttnAbstract flt-left">
							<a href="<?php echo get_bloginfo('url'); ?>/?page_id=225"></a>
						</div>
						<div id="projectMenuPrepo" class="buttnAbstract flt-left">
							<a href="<?php echo get_bloginfo('url'); ?>/?page_id=228"></a>
						</div>
						<div id="projectMenuBusiness" class="buttnAbstract flt-left">
							<a href="<?php echo get_bloginfo('url'); ?>/?page_id=231"></a>
					</div>
				</div>	

				<div id="contentMain" class="singlearticle">

					<?php 
					// The Query	
					$thePage="page_id=".get_the_ID();
					$the_query = new WP_Query( $thePage );

					if ( $the_query->have_posts() ) {
							$the_query->the_post();
							echo '<div>' . the_content() . '</div>';
					} else {
							echo 'Няма открито съдържание';
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div>					
				
			</div>
 <?php get_footer(); ?>
