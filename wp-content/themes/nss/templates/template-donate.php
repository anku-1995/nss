<?php
/**
 * Template Name: Donate Template
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
					<span class="single_line"></span>
					<h2><?=get_field('banner_heading')?>
						</h2>
					<h4><?=get_field('banner_sub_heading')?></h4>
				</div>
			</div>	
		</div>
  	</section>
	<section class="our_causes">
		<div class="container">
			<div class="heading">
				<h2><?=get_field('title')?></h2>
			</div>
			<div class="copy_block donate_copy">
				<?php
                    wp_reset_query(); // necessary to reset query
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; // End of the loop.
                ?>
			</div>
			<div class="owl-carousel causes_carousel donate_carousel2">
                  <?php   wp_reset_query();
            if (have_rows('data')):
            while (have_rows('data')):
            the_row();
            $main_content= get_sub_field('title');
            $umg= get_sub_field('image');
            $content= get_sub_field('content');
            
                ?>
				<div class="item">
					<div class="inner">
						<div class="img_block">
							<img src="<?=$umg['url']?>" alt="">
						</div>
						<div class="copy">
							<h3><?=$main_content?></h3>
							<p><?=$content?></p>
						</div>
					</div>
				</div>
        
            <?php  
            endwhile;   
            endif;
            ?> 
			</div>
			<div class="donate_copy">
				<p><?=get_field('bottom_content')?></p>
			</div>
		</div>
	</section>
	<section class="bank_details">
		<div class="container">
			<div class="heading">
				<h2>Bank <span>Details</span></h2>
			</div>
			<div class="owl-carousel bank_carousel">
                 <?php   wp_reset_query();
            if (have_rows('data_repeater')):
            while (have_rows('data_repeater')):
            the_row();
            $main_content= get_sub_field('title');
            $umg= get_sub_field('image');
            
                ?>
				<div class="item">
					<div class="icon">
						<img src="<?=$umg['url']?>" alt="">
					</div>
					<p><?=$main_content?>
					</p>
				</div>
                  <?php  
            endwhile;   
            endif;
            ?> 
			
			</div>
			<div class="text-center">
				<a href="#" class="btn">DONATE NOW</a>
			</div>
		</div>
	</section> 
<?php get_footer(); ?>
	