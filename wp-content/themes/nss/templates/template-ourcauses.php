<?php
/**
 * Template Name: Our Causes Template
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
					<h3><span class="single_line"></span> <?=get_field('banner_heading')?></h3>
					<h2><?=get_field('banner_sub_heading')?></h2>
					<span class="bottom_line"></span>
				</div>
			</div>	
		</div>
  	</section>
	<section class="our_causes">
		<div class="container">
			<div class="heading">
				<h2><?=get_field('title')?></h2>
			</div>
			<div class="copy_block">
				<?php
                    wp_reset_query(); // necessary to reset query
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; // End of the loop.
                ?>
			</div>
			<div class="owl-carousel causes_carousel">
                <?php 
                          $ourachilist = get_posts( array(
                             'post_type' => 'ourcauses',
                             'post_status' => 'publish',
                             'orderby' => 'ID', 
                             'order' =>'asc',
                             'posts_per_page' => -1,
                           ) );
                            foreach ($ourachilist as $mypost) {      
                                 $urlpost = wp_get_attachment_url( get_post_thumbnail_id($mypost->ID), 'thumbnail' );  ?>
 


				<div class="item">
					<div class="inner">
						<div class="img_block">
							<img src="<?=$urlpost?>" alt="<?=$mypost->post_title?>">
						</div>
						<div class="copy">
							<h3><?=$mypost->post_title?></h3>
							<?=$mypost->post_content?>
							<a href="<?=get_field('link',$mypost->ID)['url']?>" class="know_more">Know more</a>
						</div>
						<a href="#" class="btn">DONATE NOW</a>
					</div>
				</div>
              
          <?php  } ?> 
			</div>
		</div>
	</section>
	<section class="our_causes2">
		<div class="container">
			<div class="owl-carousel oc_carousel">
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
	</section>  	
<?php get_footer(); ?>
	