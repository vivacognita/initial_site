<?php
/**
 *  Default Page Template
 *
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
					<h1 class="singlepage"> <?php wp_title(''); ?> </h1>
				</div>

				<?php if ( has_post_thumbnail() ) { ?>
				<div id="contentAbstract">				
				<?php	the_post_thumbnail(); ?>
				</div>					
				<?php }	?>		

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
 <?php 
 get_footer(); ?>
