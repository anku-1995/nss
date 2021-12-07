<?php
/**
 * Template Name: Donation Causes Template
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
					<h2><b><span class="single_line"></span><?=get_field('banner_heading')?></b> <br>
						<?=get_field('banner_sub_heading')?></h2>
					<span class="bottom_line"></span>
				</div>
			</div>	
		</div>
  	</section>
	<section class="donation_cause">
		<div class="container">
			<div class="row">
				<div class="col-7">
					<div class="heading">
						<h2><?=get_field('title')?></h2>
					</div>
                  <?php
                            wp_reset_query(); // necessary to reset query
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile; // End of the loop.
                        ?>
				</div>
				<div class="col-5">
					<div class="owl-carousel donate_carousel">
                         <?php   wp_reset_query();
                            if (have_rows('data_repeater')):
                            while (have_rows('data_repeater')):
                            the_row();
                            $main_content= get_sub_field('title');
                            $umg= get_sub_field('image');

                           ?>
						  <div class="item">
							<img src="<?=$umg['url']?>" alt="<?=$main_content?>">
							<a href="#" class="play_btn"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/play-btn.png" alt=""></a>
							<div class="carousel_caption">
								<h3><?=$main_content?></h3>
							</div>
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
	  
	<section class="help_section">
		<div class="container">
			<div class="inner">
				<div class="heading">
					<h2><?=get_field('help_title')?></h2>
				</div>
				<div class="img_block">
					<img src="<?=get_field('section_image')['url']?>" alt="no">
				</div>
				<ul>
                     <?php   wp_reset_query();
                            if (have_rows('help_listing')):
                            while (have_rows('help_listing')):
                            the_row();
                            $main_content= get_sub_field('heading');
                            $umg= get_sub_field('image');
                            $content= get_sub_field('content');
                            $unit= get_sub_field('unit');

                           ?>
					<li>
						<div class="icon">
							<img src="<?=$umg['url']?>" alt="<?=$main_content?>">
						</div>
						<div class="copy">
							<h3><?=$main_content?></h3>
							<p><?=$content?></p>
							<h4><?=$unit?> <span>Units</span></h4>
						</div>
					</li>
                     <?php  
                        endwhile;   
                        endif;
                        ?> 
				</ul>
			</div>
		</div>
	</section>  
	  
	<section class="donate_setion donate_setion2">
		<div class="container">
			<div class="row">
				<div class="col-5">
					<div class="carousel_wrap">
						<div class="owl-carousel donate_carousel">
                             <?php foreach(get_field('multiple_images') as $mm ){
                               ?>

							<div class="item">
								<img src="<?=$mm['url']?>" alt="no">
							</div> 
                            <?php } ?>
						</div>
					</div>
				</div>
				<div class="col-7">
					<div class="donate_copy">
						<div class="heading">
							<h2><?=get_field('section_title')?></h2>
						</div>
						<h5><?=get_field('main_heading')?></h5>
						<?=get_field('section_content')?>
						<a href="#" class="btn">DONATE NOW</a>
					</div>
				</div>
			</div>
		</div>
	</section>  
	
<?php get_footer(); ?>
	