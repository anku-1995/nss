<?php
/**
 * Template Name: Mass Wedding Template
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
					<h3><span class="single_line"></span><?=get_field('banner_heading')?> </h3>
					<h2><?=get_field('banner_sub_heading')?></h2>
					<span class="bottom_line"></span>
				</div>
			</div>	
		</div>
  	</section>
	<section class="donate_setion para_nss">
		<div class="container">
			<div class="heading">
				<h2><?=get_field('title')?></h2>
			</div>
			<div class="row">
				<div class="col-7">
					<div class="donate_copy">
						
                    <?php
                    wp_reset_query(); // necessary to reset query
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; // End of the loop.
                ?>
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
	<section class="mass_wedding_couple">
		<div class="container">
			<div class="inner">
				<div class="img_block">
					<img src="<?=get_field('section_image')['url']?>" alt="">
				</div>
				<div class="copy">
					<div class="heading">
						<h2><?=get_field('section_title')?></h2>
					</div>
					<div class="text">
						<p><?=get_field('section_content')?> </p>
					</div>
				</div>
			</div>
		</div>	  
	</section>  
	  
	<section class="center_carousel">
		<div class="container">
			<div class="heading">
				<h2>glimpse of <span>Para Sports</span></h2>
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
	  
	<section class="media_coverage">
		<div class="container">
			<div class="heading">
				<h2>Media <span>Coverage</span></h2>
			</div>
			<div class="owl-carousel media_carousel">
                <?php
                  $post_lists = get_posts( array(
                         'post_type' => 'mediacoverage',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                          'tax_query' => array(
                            array(
                                'taxonomy' => 'mediacategories', // the custom vocabulary
                                'field'    => 'term_id',          // term_id, slug or name  (Define by what you want to search the below term)    
                                'terms'    => 9,      // provide the term slugs
                            ),
                        ),
                    ) );
                foreach($post_lists as $posts){ ?>
                  

				<div class="item">
					<div class="inner">
						<div class="img_block">
                             <?php $urla = wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>
						  <img src="<?php echo $urla ?>" alt="<?php echo $posts->post_title; ?>" >
							
						</div>
						<div class="copy">
							<div class="logo_icon">
								<img src="<?=get_field('logo',$posts->ID)['url']?>" alt="">
							</div>
							<p><?php echo $posts->post_content; ?></p>
						</div>
					</div>
				</div>
                
                <?php } ?>
			</div>
		</div>
	</section>  
	<section class="sec sec-05 inner_ss">
  		<h1 class="text-center bg-white">Success <span>stories</span></h1>
  		<div class="sec-bg">
  			<div class="container">
				<div class="owl-carousel success_stories">
                    <?php
                  $post_lists = get_posts( array(
                         'post_type' => 'successstories',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                          'tax_query' => array(
                            array(
                                'taxonomy' => 'categories', // the custom vocabulary
                                'field'    => 'term_id',          // term_id, slug or name  (Define by what you want to search the below term)    
                                'terms'    => 8,      // provide the term slugs
                            ),
                        ),
                    ) );
                foreach($post_lists as $posts){ ?>
                  

					<div class="item">
						<div class="card card-tesimoinal">
  							<div class="card-body p-0 text-center card-body-tesimoinal">
                  <div class="position-relative">
                    <div class="img-placeholder">
                         <?php $urla = wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>
						<img src="<?php echo $urla ?>" alt="<?php echo $posts->post_title; ?>" class="img-fluid">
                    </div>
                    <div class="quote-icon"></div>
                  </div>
  								<div class="user-title"><?php echo $posts->post_title; ?></div>
  								<div class="star-img">
  									<i class="fa fa-star"></i>
  									<i class="fa fa-star"></i>
  									<i class="fa fa-star"></i>
  									<i class="fa fa-star"></i>
  									<i class="fa fa-star"></i>
  								</div>
  								<div class="user-desc"><?php echo $posts->post_excerpt; ?></div>
  								<p>
  									<?php echo $posts->post_content; ?>
  								</p>
  							</div>
  						</div>
					</div>
                    
                     <?php } ?>
				</div>
  			</div>
  		</div>
  	</section>  
<?php get_footer(); ?>
	