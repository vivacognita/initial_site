<?php
/*
Template Name: News Viva Cognita
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
	
				<?php 
					// The Query	
						$theCat="cat=5";
						$the_query = new WP_Query ('cat=5&posts_per_page=3');
						while ($the_query->have_posts()) : $the_query->the_post();
										global $more; 
										$more = 0;
										$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
										$thumb_url = $thumb['0'];
										$news_permalink = get_permalink( $post->ID ); 
										$pfx_date = get_the_date( 'd-m-Y');
										$post_author = get_the_author(); 
							?>
					<div id="contentList" class="singlearticle">
							<div class="flt-right"><img src="<?php echo $thumb_url; ?>" alt="Post Thumbnail" /></div>
							<h2><?php the_title();?></h2>
							<div><?php the_content('<div class="front_page_more_text">Виж цялата новина...</div>'); ?> </div>
							<div id="ArticleDetails" class="articledetails"> <img src="<?php echo get_template_directory_uri();?>/images/calendar_clear.png" width="26px" height="26px" alt="icocal" class="flt-left artbit"/><div class="front_page_news_date flt-left"><?php echo $pfx_date;?></div> <img src="<?php echo get_template_directory_uri();?>/images/pensils.png" width="26px" height="26px" alt="icocal" class="flt-left artbit"/><?php echo $post_author;?></div>
					</div>			
							<?php
								endwhile; 
								/* Restore original Post Data */
								wp_reset_postdata();
							?>
			</div>
 <?php get_footer(); ?>
