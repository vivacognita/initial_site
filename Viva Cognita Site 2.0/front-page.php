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
						<div class="flt-left home-col-1-2">
						<?php if ( ! is_user_logged_in() ) {
								$args = array(
								'echo'           => true,
								'redirect'       => site_url( $_SERVER['REQUEST_URI'] ), 
								'form_id'        => 'loginform',
								'label_username' => __( 'Потребител' ),
								'label_password' => __( 'Парола' ),
								'label_remember' => __( 'Запомни ме за 14 дни.' ),
								'label_log_in'   => __( 'Влез' ),
								'id_username'    => 'user_login',
								'id_password'    => 'user_pass',
								'id_remember'    => 'rememberme',
								'id_submit'      => 'wp-submit',
								'remember'       => true,
								'value_username' => NULL,
								'value_remember' => false
								); ?>
								<div class="frontpage-loginform">								
								<?php wp_login_form( $args );?>
								<div id="RegLinks">
									<a href="<?php echo wp_registration_url(); ?>" title="Register">Регистрация</a> | 
									<a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" title="Lost Password">Забравена парола?</a>
								</div>
								</div>
							<?php
							} else { 
							// If logged in:
								global $current_user;
								  get_currentuserinfo();
								  $user_meta = get_user_by( 'ID', $current_user->ID );
							?>
							<div class="frontpage-loginform">
								<div id="hdrProfile">
								<div class="profile-fp flt-left"><?php echo get_avatar( $current_user->ID, 64 );?></div>
								<div class="profile-fp"><h3><?php echo $current_user->display_name;?></h3></div>
								</div>
								<div id="mainProfile" class="mainProfile">
								<div class="profile-fp">Потребител: <?php echo $current_user->user_login;?></div>
								<div class="profile-fp">E-mail: <?php echo $current_user->user_email;?></div>
								<div class="profile-fp">User ID: <?php echo $current_user->ID;?></div>
								</div>
								<div id="RegLinks">
									<?php wp_loginout( home_url() ); ?> | <?php wp_register('', ''); ?>
								</div>	
							</div>								
							<?php	}	?>
						</div>
						<div class="flt-left home-col-2-2"><div id="RoadMap"><a href="<?php echo get_bloginfo('url'); ?>/?page_id=125" class="homebtn"></a></div></div>
							<?php 
								// The Query	
								$thePage="cat=5";
								$the_query = new WP_Query ($thePage);
								if ( $the_query->have_posts() ) {
										$the_query->the_post();
										global $more; 
										$more = 0;
										$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
										$thumb_url = $thumb['0'];
										$news_permalink = get_permalink( $post->ID ); 
							?>
							<a href="<?php echo $news_permalink; ?>">
						<div class="flt-left home-col-3-2">
							<div id="NewsContainer"  style="background-image:url('<?php echo $thumb_url; ?>');">
							<div id="NewsContent" class="news_2layer">
							<h2><?php the_title();?></h2>
							<?php /* the_date('d-m-Y', '<div class="front_page_news_date"> Дата:', '</div>'); */?>
							<div class="front_page_news_body"><?php the_excerpt(); ?><div class="front_page_more_text">Виж цялата новина...</a></div> </div>
							<?php
								} else {
										echo 'Няма открито съдържание';
								}
								/* Restore original Post Data */
								wp_reset_postdata();
							?>
							</div>
							</div>
							</a>
						</div>				
					</div>
					
				</div>	
			
			</div>
 <?php 
 get_footer(); ?>
