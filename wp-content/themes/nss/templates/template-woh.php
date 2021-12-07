<?php
/**
 * Template Name: World Of Humanity Template
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
					<h2><?=get_field('banner_heading')?> <br>
						<?=get_field('banner_sub_heading')?></h2>
					<span class="bottom_line"></span>
				</div>
			</div>	
		</div>
  	</section>
	<section class="abt_woh">
		<div class="container">
			<div class="heading">
                <h2><?=get_field('title')?></h2>
            </div>
			<div class="row">
				<div class="col-7">
<?php
                            wp_reset_query(); // necessary to reset query
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile; // End of the loop.
                        ?>
				</div>
				<div class="col-5">
					<div class="video">
						<img src="<?=get_field('section_image')['url']?>" alt="">
						<a href="#" class="play-icon"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/play-btn.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="facilities_section">
		<div class="container">
			<div class="heading">
                <h2><?=get_field('section_title')?></h2>
            </div>
			<div class="owl-carousel facility_carousel">
                
                <?php   wp_reset_query();
                            if (have_rows('facilities_listing')):
                            while (have_rows('facilities_listing')):
                            the_row();
                            $title= get_sub_field('title');
                            $imaeg= get_sub_field('image');
                            $content= get_sub_field('content');

                           ?>
               
				<div class="item">
					<div class="img_block">
                        <img src="<?=$imaeg['url']?>" alt="<?=$title?>">
                    </div>
					<div class="copy">
                        <h3><?=$title?></h3>
                        <p><?=$content?></p>
                    </div>
				</div>
                
                 <?php  
                        endwhile;   
                        endif;
                        ?> 
			</div>
		</div>
	</section>
	<section class="founder_section">
		<div class="container">
			<div class="owl-carousel founder_carousel">
                
                <?php   wp_reset_query();
                            if (have_rows('appeal_listing')):
                            while (have_rows('appeal_listing')):
                            the_row();
                            $matent= get_sub_field('name');
                            $ing= get_sub_field('image');
                            $pos= get_sub_field('position');
                            $about= get_sub_field('about');

                           ?>
				<div class="item">
					<div class="inner">
						<h2>Appeal</h2>
						<div class="header">
							<h3><?=$matent?></h3>
							<h4><?=$pos?></h4>
							<img src="<?=$ing['url']?>" alt="<?=$matent?>">
						</div>
						<div class="copy">
							<p><?=$about?></p>
						</div>
					</div>	
				</div>
               
                 <?php  
                        endwhile;   
                        endif;
                        ?> 
                
			</div>
		</div>
	</section>  
	<section class="brick_section">
		<div class="container">
			<div class="heading">
                <h2><?=get_field('section_content')?></h2>
            </div>
			<div class="owl-carousel brick_carousel">
                 <?php   wp_reset_query();
                            if (have_rows('brick_listing')):
                            while (have_rows('brick_listing')):
                            the_row();
                            $main_content= get_sub_field('title');
                            $umg= get_sub_field('image');
                            $price= get_sub_field('price');
                            $about= get_sub_field('about');

                           ?>
				<div class="item">
					<div class="inner">
						<div class="img_block">
							<img src="<?=$umg['url']?>" alt="no image">
						</div>
						<div class="copy">
							<h3><?=$main_content?></h3>
							<h4><span>₹</span> <?=$price?></h4>
							<p><?=$about?></p>
							<a href="#" class="btn">DONATE NOW</a>
						</div>
					</div>	
				</div>
                
                 <?php  
                        endwhile;   
                        endif;
                        ?> 
			</div>
		</div>
	</section>
	  	
<?php get_footer(); ?>
	