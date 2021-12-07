<?php
/**
 * Template Name: Channel-Telecast Template
 * Template Post Type:  page
 *
 * @package WordPress
 * @subpackage nss
 * @since nss 1.0
 */

get_header();
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

?>

  	<section class="innerpage_banner">
  		<img class="banner_desktop" src="<?=$large_image_url[0]?>" alt="">
  		<img class="banner_mobile" src="<?=get_field('mobile_banner')['url']?>" alt="">
  		<div class="banner_caption light_caption banner_captio2">
			<div class="container">
				<div class="inner">
					<span class="double_line"></span>
                    <h2><b><span class="single_line"></span><?=get_field('banner_heading')?> <br></b>
						<span><?=get_field('banner_sub_heading')?></span> 
					</h2>	
					<span class="bottom_line"></span>
				</div>
			</div>	
		</div>
  	</section>
	
	  
	<section class="national_programs">
		<div class="container">
			<div class="heading">
				<h2><?=get_field('title')?></h2>
			</div>
			<div class="owl-carousel np_carousel">
                 <?php
                  $post_lists = get_posts( array(
                         'post_type' => 'channelprogram',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                          'tax_query' => array(
                            array(
                                'taxonomy' => 'channelcategories', // the custom vocabulary
                                'field'    => 'term_id',          // term_id, slug or name  (Define by what you want to search the below term)    
                                'terms'    => 18,      // provide the term slugs
                            ),
                        ),
                    ) );
                foreach($post_lists as $posts){ 
                    $urla = wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>


				<div class="item">
					<div class="inner">
						<div class="img_block">
							<img src="<?=$urla?>" alt="<?=$posts->post_title?>">
						</div>
						<div class="copy">
							<h3><?=$posts->post_title?></h3>
							<h4>Program Timing</h4>
                             <?php   wp_reset_query();
                                        if (have_rows('timing',$posts->ID)):
                                        while (have_rows('timing',$posts->ID)):
                                        the_row();
                                        $main_content= get_sub_field('time');

                            ?>
							<p><?=$main_content?></p>
                      
                           <?php  
                            endwhile;   
                            endif;
                            ?> 
						</div>
					</div>
				</div>
                <?php } ?>
			</div>
		</div>
	</section>
	  
	<section class="international_programs">
		<div class="container">
			<div class="heading">
				<h2><?=get_field('section_title')?></h2>
			</div>
			<div class="owl-carousel ip_carousel">
                <?php
                  $post_lists = get_posts( array(
                         'post_type' => 'channelprogram',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                          'tax_query' => array(
                            array(
                                'taxonomy' => 'channelcategories', // the custom vocabulary
                                'field'    => 'term_id',          // term_id, slug or name  (Define by what you want to search the below term)    
                                'terms'    => 19,      // provide the term slugs
                            ),
                        ),
                    ) );
                foreach($post_lists as $posts){ 
                    $urla = wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>

				<div class="item">
					<div class="inner">
						<div class="img_block">
							<img src="<?=$urla?>" alt="<?=$posts->post_title?>">
						</div>
						<ul>
                            <?php   wp_reset_query();
                                        if (have_rows('timing',$posts->ID)):
                                        while (have_rows('timing',$posts->ID)):
                                        the_row();
                                        $main_content= get_sub_field('title');
                                        $main_content2= get_sub_field('time');

                            ?>
  
							<li>
								<h3><?=$main_content?></h3>
								<p><span>Timing :</span> <?=$main_content2?></p>
							</li>
                            <?php  
                            endwhile;   
                            endif;
                            ?>
							
						</ul>
					</div>
				</div>
                
                <?php } ?>
			</div>
		</div>
	</section>  
	
	 
<?php get_footer(); ?>
	