<?php
/**
 * Template Name: Physiotherapy Center Template
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
					<h2><?=get_field('banner_heading')?>
					</h2>
					<h5><?=get_field('banner_sub_heading')?></h5>
					<span class="bottom_line"></span>
				</div>
			</div>	
		</div>
  	</section>
	<section class="donate_setion rkf_top">
		<div class="container">
			<div class="row">
				<div class="col-7">
					<div class="donate_copy">
						<div class="heading">
                            <h2><?=get_field('title')?></h2>
                        </div>
						<?php
                            wp_reset_query(); // necessary to reset query
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile; // End of the loop.
                        ?>
						<a href="<?php echo esc_url( get_page_link( 19 ) ); ?>" class="btn">DONATE NOW</a>
					</div>
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
	
	<section class="facilities_section">
		<div class="container">
			<div class="heading">
                <h2><?=get_field('benefits_title')?></h2>
            </div>
			<div class="owl-carousel facility_carousel bpc_carousel">
                 <?php   wp_reset_query();
                            if (have_rows('listing')):
                            while (have_rows('listing')):
                            the_row();
                            $main_content= get_sub_field('heading');
                            $main_content2= get_sub_field('content');
                            $umg= get_sub_field('image');

                           ?>
				           <div class="item">
					<div class="img_block">
                        <img src="<?=$umg['url']?>" alt="<?=$main_content?>">
                    </div>
					<div class="copy">
                        <h3><?=$main_content?></h3>
                        <p><?=$main_content2?></p>
                    </div>
				</div>
                
                          <?php  
                                endwhile;   
                                endif;
                                ?> 
			</div>
		</div>
	</section> 
	<section class="bpc_section">
		<div class="container">
			<div class="inner">
				<div class="img_block">
					<img src="<?=get_field('section_image')['url']?>" alt="<?=get_field('section_title')?>">
				</div>
				<div class="copy">
					<h3><?=get_field('section_title')?></h3>
					<ul class="normal_list">
						<?=get_field('section_content')?>
					</ul>
				</div>
			</div>
		</div>
	</section>  
	<section class="registration_from bpc_reg">
		<div class="container">
			<div class="heading">
				<h2>REGISTRATION <span>FORM</span></h2>
			</div>
			<?=do_shortcode('[contact-form-7 id="655" title="Physiotherapy Registration Form"]')?>
		</div>
	</section>  
	  
	<section class="center_carousel">
		<div class="container">
			<div class="heading">
				<h2>glimpse of <span>PHYSIOTHERAPY CENTRE</span></h2>
			</div>
			<div class="article_wrap">
				<div class="article_slide">
                     <?php foreach(get_field('multiple_images') as $mm ){
                    
                    ?>
                    <div>
                        <div class="block">
                            <div class="img_block">
                               <img src="<?=$mm['url']?>" alt="">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
				</div>	
				<ul class="list_corner">
					<li><img src="<?=get_stylesheet_directory_uri()?>/assets/images/corner-left-top.png" alt=""></li>
					<li><img src="<?=get_stylesheet_directory_uri()?>/assets/images/corner-right-top.png" alt=""></li>
					<li><img src="<?=get_stylesheet_directory_uri()?>/assets/images/corner-left-bottom.png" alt=""></li>
					<li><img src="<?=get_stylesheet_directory_uri()?>/assets/images/corner-right-bottom.png" alt=""></li>
				</ul>
			</div>
		</div>
	</section> 
<?php get_footer(); ?>
	