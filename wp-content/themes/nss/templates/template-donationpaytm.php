<?php
/**
 * Template Name: Donation via paytm Template
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
  		<div class="banner_caption dark_caption banner_captio2">
			<div class="container">
				<div class="inner">
					<span class="double_line"></span>
					<h2><b><span class="single_line"></span><?=get_field('banner_heading')?></b> <br>
						<?=get_field('banner_sub_heading')?></h2>
					<span class="bottom_line"></span>
				</div>
			</div>	
		</div>
  	</section>
	<section class="dp_section">
		<div class="container">
			<div class="inner">
				<div class="heading">
					<h2><?=get_field('title')?></h2>
				</div>
				<div class="copy">
                       <?php
                            wp_reset_query(); // necessary to reset query
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile; // End of the loop.
                        ?>
				</div>
				<div class="img_block">
					<img src="<?=get_field('section_image')['url']?>" alt="no">
				</div>
				<div class="dp_steps">
					<h3>STEPS FOR the Help THROUGH PAYTM</h3>
					<div class="owl-carousel dp_carousel">
                         <?php   wp_reset_query();
                            if (have_rows('data_repeater')):
                            while (have_rows('data_repeater')):
                            the_row();
                            $main_content= get_sub_field('title');
                            $umg= get_sub_field('image');

                           ?>
						<div class="item">
							<div class="icon">
								<img src="<?=$umg['url']?>" alt="<?=$main_content?>">
							</div>
							<p><?=$main_content?></p>
						</div>
                        
                       <?php  
                        endwhile;   
                        endif;
                        ?> 
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="dp_section2">
		<div class="container">
			<p><?=get_field('section_content')?></p>
		</div>
	</section>  
	  
<?php get_footer(); ?>
	