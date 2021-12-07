<?php
/**
 * Template Name: Other Support Template
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
						<a href="#" class="btn">DONATE NOW</a>
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
	
	<section class="donation_item">
		<div class="container">
			<div class="heading">
                <h2><?=get_field('section_title')?></h2>
            </div>
			<div class="owl-carousel di_carousel">
                 <?php   wp_reset_query();
                            if (have_rows('items')):
                            while (have_rows('items')):
                            the_row();
                            $main_content= get_sub_field('item_name');
                            $umg= get_sub_field('item_image');

                           ?>
				<div class="item">
					<div class="img_block">
                        <img src="<?=$umg['url']?>" alt="<?=$main_content?>">
                    </div>
					<h3><?=$main_content?></h3>
				</div>
                <?php  
                        endwhile;   
                        endif;
                        ?> 
			</div>
		</div>
	</section> 
	  
	<section class="registration_from">
		<div class="container">
			<div class="heading">
				<h2><?=get_field('section_content')?></h2>
			</div>
            <?=do_shortcode('[contact-form-7 id="803" title="Other Support Registration Form"]')?>
			<?php /* <form>
				<div class="row">
					<div class="col-3 form-group">
						<label>Name</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-3 form-group">
						<label>Email Id</label>
						<input type="email" class="form-control">
					</div>
					<div class="col-3 form-group">
						<label>Phone No</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-3 form-group">
						<label>Profession</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-3 form-group">
						<label>Address</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-4 form-group">
								<label>City</label>
								<div class="styled_select">
									<select class="form-control">
										<option selected></option>
										<option>City 1</option>
										<option>City 2</option>
										<option>City 3</option>
										<option>City 4</option>
									</select>
								</div>
							</div>
							<div class="col-4 form-group">
								<label>State</label>
								<div class="styled_select">
									<select class="form-control">
										<option selected></option>
										<option>State 1</option>
										<option>State 2</option>
										<option>State 3</option>
										<option>State 4</option>
									</select>
								</div>
							</div>
							<div class="col-4 form-group">
								<label>Pincode</label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-3 form-group">
						<label>Country</label>
						<div class="styled_select">
                            <select class="form-control">
                                <option selected></option>
                                <option>Country 1</option>
                                <option>Country 2</option>
                                <option>Country 3</option>
                                <option>Country 4</option>
                            </select>
                        </div>
					</div>
					<div class="col-5 form-group">
						<label>Description</label>
						<textarea class="form-control"></textarea>
					</div>
					<div class="col-7 form-group">
						<label>Aadhar Card Number</label>
						<div class="browse_form">
							<div class="inpt">
								<input type="text" class="form-control">
							</div>	
							<div class="browse_field">
								<!--<input type="file" class="form-control">-->
								<div class="input-group input-file" name="fileupload">
                                    <span class="input-group-btn">
                                        <button class="btn btn-choose" type="button">Choose File</button>
                                    </span>
                                    <input type="text" class="form-control" placeholder="No file Choosen." />
                                </div>
							</div>
							<p>Note: Type gif, jpeg, jpg, png only allowed</p>
						</div>
						<input type="button" class="btn" value="Submit">
					</div>
				</div>
			</form> */ ?>
		</div>
	</section>  
	  
	<section class="center_carousel">
		<div class="container">
			<div class="heading">
				<h2><?=get_field('main_heading')?></h2>
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
	