<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage nss
 * @since nss 1.0
 */

get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
?>
    <section class="home-banner smoothscroll_approx_full_js">
        <div class="wrapper">
            <div class="homebanner-inner">
                <div class="home-banner-left">
                    <div class="home-banner-video">
                        <video width="320" height="240" autoplay muted loop>
                            <source src="<?=get_field('banner_video')['url']?>" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="home-banner-right">
                    <div class="home-banner-caption">
                        <h1 class="typed"></h1>
                        <h2 class="typed1"></h2>
                        <div class="donate-btn my-button"><a href="<?php echo esc_url( get_page_link( 19 ) ); ?>">Donate</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="chat">
       <?php $header_whatsapp_phone_no = get_field('header_whatsapp_phone_no','options'); ?>
        <a href="https://wa.me/<?=$header_whatsapp_phone_no?>?text=I'm%20interested%20" target="_blank">
            <img src="<?=get_stylesheet_directory_uri()?>/assets/images/chat.png" alt="" title="">
            <span>Start Chat</span>
        </a>
    </div>


    <section class="home-section1 smoothscroll_approx_full_js">
        <div class="white-bg1"></div>
        <div class="white-bg2"></div>
        <div class="wrapper">
            <div class="home-section1-inner">
                <h3 class="h3 text-center" data-aos="fade-up" data-aos-delay="200"><?=get_field('section_2_heading');?></h3>
                <div class="home-section1-tiles">
                    <div class="owl-carousel owl-theme smoothscroll_approx_full_js ">
                        <div class="item">
                            <div class="home-section1-animation1">
                                <div class="home-section1-tile">
                                    <div class="wh1"></div>
                                    <img src="<?=get_stylesheet_directory_uri()?>/assets/images/heal.gif">
                                    <div class="home-section1title-defult">HEAL</div>
                                    <div class="home-section1-tile-hover">
                                        <div class="home-section1-tile-hover-inner">
                                            <h4>HEAL</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus
                                                nulla
                                                a ligula
                                                malesuada, sed rutrum urna rutrum. </p>
                                            <div class="read-more">
                                                <a href="javascript:;">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="home-section1-animation1">
                                <div class="home-section1-tile">
                                    <div class="wh1"></div>
                                    <img src="<?=get_stylesheet_directory_uri()?>/assets/images/enrich.gif">
                                    <div class="home-section1title-defult">Enrich</div>
                                    <div class="home-section1-tile-hover">
                                        <div class="home-section1-tile-hover-inner">
                                            <h4>Enrich</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus
                                                nulla
                                                a ligula
                                                malesuada, sed rutrum urna rutrum. </p>
                                            <div class="read-more">
                                                <a href="javascript:;">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="home-section1-animation1">
                                <div class="home-section1-tile">
                                    <div class="wh1"></div>
                                    <img src="<?=get_stylesheet_directory_uri()?>/assets/images/empower.gif">
                                    <div class="home-section1title-defult">Empower</div>
                                    <div class="home-section1-tile-hover">
                                        <div class="home-section1-tile-hover-inner">
                                            <h4>Empower</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus
                                                nulla
                                                a ligula
                                                malesuada, sed rutrum urna rutrum. </p>
                                            <div class="read-more">
                                                <a href="javascript:;">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="home-section91 smoothscroll_approx_full_js">
        <div class="wrapper">
            <div class="home-sectiopn-heading text-center" data-aos="fade-up" data-aos-delay="200"><?=get_field('section_3_heading');?>
            </div>
            <div class="home-section91-inner">

                <div class="connecting-line-outer">
                    <div class="connect-line-j1-outer"> <span class="connect-line-j1"></span></div>
                    <div class="connect-line-j2-outer"> <span class="connect-line-j2"></span></div>
                    <div class="connect-line-j3-outer"> <span class="connect-line-j3"></span></div>
                    <div class="connect-line-j4-outer"> <span class="connect-line-j4"></span></div>
                </div>
                <?php 
                            wp_reset_query();
                            if (have_rows('journey')):
                            $ip=1;
                            while (have_rows('journey')):
                            the_row();
                            $banner_image= get_sub_field('journey_image');
                            $journey_description= get_sub_field('journey_description');
                            $journey_title= get_sub_field('journey_title');
                            ?>
                          
                <div class="home-j1 home-j1<?=$ip?>">
                    <div class="home-j-th"><img src="<?=$banner_image['url']?>" class="a" alt="<?=$ip?>" title="<?=$ip?>">
                        <div class="rotar-ball"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/circl2-bg.png"></div>
                    </div>
                    <div class="home-j-content">
                        <h1><?=$journey_title?> </h1>
                        <p><?=$journey_description?></p>
                    </div>
                </div>
                
                <?php       $ip=$ip+1;
                            endwhile;   
                            endif;
                            ?> 
            </div>

            <div class="mobile-view">
                <div class="mobile-view-home-section91-inner">
                    <div class="owl-carousel owl-theme smoothscroll_approx_full_js">
                          <?php 
                            wp_reset_query();
                            if (have_rows('journey')):
                            $ip=1;
                            while (have_rows('journey')):
                            the_row();
                            $journey_mobile_image= get_sub_field('journey_mobile_image');
                            $journey_description= get_sub_field('journey_description');
                            $journey_title= get_sub_field('journey_title');
                            ?>
                        <div class="item">
                            <div class="mobile-section91-grid">
                                <div class="mobile-section91-grid-inner">
                                    <img src="<?=$journey_mobile_image['url']?>">
                                    <h1><?=$journey_title?> </h1>
                                    <p><?=$journey_description?></p>
                                </div>
                            </div>
                        </div>
                        
                         <?php       $ip=$ip+1;
                            endwhile;   
                            endif;
                            ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="home-sucess-story-outer  smoothscroll_approx_full_js">
        <div class="white-bg4"></div>
        <div class="white-bg5"></div>
        <section class="home-section2-banner smoothscroll_approx_full_js">
            <div class="bg-animation"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/bg1.png" /></div>
            <img src="<?=get_stylesheet_directory_uri()?>/assets/images/l1.png" class="man_donate">
        </section>

        <div class="mobile-view">
            <img src="<?=get_stylesheet_directory_uri()?>/assets/images/home-section2-banner-mobile.jpg">
        </div>


        <section class="home-sucess-story ">
            <div class="home-sectiopn-heading white text-center" data-aos="fade-up" data-aos-delay="200"><?=get_field('section_4_heading');?>
            </div>

            <div class="home-succes-story-slider">

                <div class="owl-carousel owl-theme smoothscroll_approx_full_js">
                     <?php
                  $post_lists = get_posts( array(
                         'post_type' => 'successstories',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => 5,
                    ) );
                foreach($post_lists as $posts){
                   $urla = wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); 
                    //echo $posts->post_excerpt; ?>
                    <div class="item">
                        <div class="home-succes-story-slider-outer story2" data-aos="fade-right" data-aos-delay="300">
                            <div class="home-succes-story-slider-right">
                                <img src="<?php echo $urla ?>" alt="<?php echo $posts->post_title; ?>">
                            </div>
                            <div class="home-succes-story-slider-left">
                                <h4><?php echo $posts->post_title; ?></h4>
                                <?php echo $posts->post_content; ?>
                                <div class="read-more">
                                    <a href="javascript:;">Read Story</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                 <?php } ?>
                </div>
                <div class="home-sucess-left"></div>
                <div class="home-sucess-right"></div>
            </div>
        </section>
    </section>





    <section class="home-section4 smoothscroll_approx_full_js">
        <div class="wrapper">
            <div class="home-sectiopn-heading blue text-center" data-aos="fade-up" data-aos-delay="100"><?=get_field('section_5_heading');?></div>
            <div class="home-section4-inner">
                 <?php 
                            wp_reset_query();
                            if (have_rows('achieved')):
                            $ipc=1;
                            while (have_rows('achieved')):
                            the_row();
                            $ajourney_mobile_image= get_sub_field('achieved_image');
                            $ajourney_description= get_sub_field('achieved_description');
                            $ajourney_title= get_sub_field('achieved_title');
                            ?>
 
                
                <div class="home-section4-inner-tiles">
                    <div class="athm <?php if($ipc==1){ echo "ath"; }else{ echo "ath".($ipc-1); } ?> ">
                        <img src="<?=$ajourney_mobile_image['url']?>">
                        <div class="bg-w"></div>
                    </div>
                    <h4 class="counter"><?=$ajourney_title?></h4>
                    <p><?=$ajourney_description?></p>
                </div>
                 <?php   $ipc=$ipc+1;
                         endwhile;   
                         endif;
                ?>
            </div>
        </div>
        <div class="home-section4-banner ">
            <picture>
                <source media="(max-width:600px)" srcset="<?=get_stylesheet_directory_uri()?>/assets/images/home-section4-banner-mobile.jpg">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/images/home-section4-banner.jpg" alt="footer">
            </picture>
        </div>
    </section>



    <section class="home-testimonial smoothscroll_approx_full_js">
        <div class="wrapper">
            <div class="home-testimonial-slider">
                <div class="home-sectiopn-heading blue text-center"><?=get_field('section_6_heading');?>
                </div>
                <div class="owl-carousel owl-theme smoothscroll_approx_full_js">
                     <?php
                     $post_list = get_posts( array(
                         'post_type' => 'testimonials',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                    ) );
                    foreach($post_list as $post){
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                    <div class="item">
                        <div class="home-testimonial-slider-inner sak1">
                            <div class="home-testimonial-th">
                                <img src="<?php echo $url ?>" alt="<?php echo $post->post_title; ?>">
                            </div>
                            <div class="home-testimonial-details-outer">
                                <div class="home-testimonial-details">
                                    <div class="dec-test">
                                        <h4><?php echo $post->post_title; ?>
                                            <span><?php echo $post->post_excerpt; ?></span>
                                        </h4>
                                       <?php echo $post->post_content; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php         
                }
                wp_reset_query();
                ?> 
                </div>
            </div>
        </div>
    </section>

<?php /*

  	<div class="banner position-relative">
        <?php if(!empty($featured_img_url)){ ?> 
  		<img src="<?=esc_url($featured_img_url)?>" alt="" title="" class="img-fluid">
        <?php }else{ ?> 
  		<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/banner.jpg" alt="" title="" class="img-fluid">
        <?php } ?>
  		<div class="container banner-content">
  			<div class="d-flex justify-content-center align-items-center flex-column h-100">
  				<a href="javascript:void(0)" class="icon-play"><i class="sprite play-icon"></i></a>
  				<h4><?php echo the_content(); ?></h4>
  				<a href="<?php echo esc_url( get_page_link( 19 ) ); ?>" class="btn btn-primary">Donate Now</a>
  			</div>
  		</div>
  	</div>

  	<section class="sec sec-00" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="false">
  		<div class="container">
			<ul class="nav nav-tabs heal_tabs" id="myTab" role="tablist">
                <?php $categories = get_categories(array(
                            'orderby' => 'ID',
                            'order'   => 'ASC',
                            'exclude' => array('23'),
                        ) );
                foreach($categories as $kk =>  $category) {
                    
                $image = get_field('image',$category->taxonomy . '_' . $category->term_id);
                ?> 

				<li class="nav-item" role="presentation">
					<button class="nav-link <?php if($kk==0){ ?> active <?php } ?> " id="<?=$category->slug?>-tab" data-bs-toggle="tab" data-bs-target="#<?=$category->slug?>">
						<img src="<?=$image['url']?>" alt="<?=$category->name?>">
						<span><?=$category->name?></span>
					</button>
				</li>
                <?php } ?> 
                
			</ul>
		</div>
		<div class="tab-content" id="myTabContent">
            <?php foreach($categories as $kk => $category) { ?> 
			<div class="tab-pane fade <?php if($kk==0){ ?> show active <?php } ?> " id="<?=$category->slug?>" role="tabpanel" aria-labelledby="<?=$category->slug?>-tab">
				<div class="owl-carousel heal_carousel">
                    <?php //print_r($category);
                                                         //   die;
                          $myposts = get_posts(array(
                              'showposts' => 8, //add -1 if you want to show all posts
                              'post_type' => 'post',
                              'tax_query' => array(
                                          array(
                                                'taxonomy' => 'category',
                                                'field' => 'slug',
                                                'terms' => $category->slug //pass your term name here
                                                  )
                                                ))
                                               );

                            foreach ($myposts as $mypost) {      
                                 $urlpost = wp_get_attachment_url( get_post_thumbnail_id($mypost->ID), 'thumbnail' );  ?>
					<div class="item">
						<div class="inner">
							<div class="img_block">
								<img src="<?php echo $urlpost ?>" alt="<?=$mypost->post_title?>">
							</div>
							<div class="cont">
								<h3><?=$mypost->post_title?></h3>
								<p><?=$mypost->post_content?> </p>
							</div>
						</div>
					</div>
                    <?php  } ?> 
                    
				</div>
			</div>
            <?php } ?> 
		</div>
  	</section>
  	<section class="sec sec-02" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200" data-aos-once="false">
  		<div class="container">
  			<h1 class="text-center"><?=get_field('section_2_heading');?></h1>
			<div class="owl-carousel carousel_two">
                
                    <?php
                  $work_list = get_posts( array(
                         'post_type' => 'narayanwork',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                    ) );
                $wkk=1;
                foreach($work_list as $works){
                  
                   $urlw = wp_get_attachment_url( get_post_thumbnail_id($works->ID), 'thumbnail' ); 
                    if($wkk%2!=0){ ?>
				<div class="item ">
					<div class="cont">
						<div class="icon">
							<img src="<?=get_field('logo',$works->ID)['url']?>" alt="">
							<?=get_field('name',$works->ID)?>
						</div>
						<h3><?=$works->post_title?> </h3>
						<?=$works->post_content?>
					</div>
					<div class="img_block">
						<img src="<?=$urlw?>" alt="<?=$works->post_title?> ">
					</div>
				</div>
               <?php }else{ ?>  
                
				<div class="item even">
					<div class="img_block">
						<img src="<?=$urlw?>" alt="<?=$works->post_title?> ">
					</div>
					<div class="cont">
						<div class="icon">
							<img src="<?=get_field('logo',$works->ID)['url']?>" alt="">
							<?=get_field('name',$works->ID)?>
						</div>
						<h3><?=$works->post_title?> </h3>
						<?=$works->post_content?>
					</div>
				</div>
                
                
                 <?php } $wkk = $wkk+1;  } ?>
                
                
				<div class="item">
					<div class="cont">
						<div class="icon">
							<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/logo-icon.png" alt="">
							NARAYAN <span>Hospitals</span>
						</div>
						<h3>HEALING diﬀerently abled </h3>
						<h6>Providing diagnosis, treatment, and performing corrective surgeries</h6>
						<p>Till date performed more than <span>417500</span> life transforming surgeries & still counting..</p>
					</div>
					<div class="img_block">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/c-3.jpg" alt="">
					</div>
				</div>
				<div class="item even">
					<div class="img_block">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/c-1.jpg" alt="">
					</div>
					<div class="cont">
						<div class="icon">
							<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/logo-icon.png" alt="">
							NARAYAN <span>Vocational Academy</span>
						</div>
						<h3>ENRICHING diﬀerently abled </h3>
						<h6>Providing training for Computer, mobile phone repairing, arts & crafts and sewing</h6>
						<p>Till date performed vocational training to <br>more than <span>2437</span> persons & still counting..   </p>
					</div>
				</div>
				<div class="item">
					<div class="cont">
						<div class="icon">
							<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/logo-icon.png" alt="">
							NARAYAN <span>EMPOWERMENT CENTER</span>
						</div>
						<h3>EMPOWERING differenlty abled</h3>
						<h6>Performing mass wedding ceremonies, girls & women empowerment and rehabilitation activities</h6>
						<p>Till date performed mass wedding, of more than <br><span>2098</span> divyang couples or empoverished & still counting..</p>
					</div>
					<div class="img_block">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/c-2.jpg" alt="">
					</div>
				</div>
				<div class="item even">
					<div class="img_block">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/c-4.jpg" alt="">
					</div>
					<div class="cont">
						<div class="icon">
							<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/logo-icon.png" alt="">
							NARAYAN <span>Hospitals</span>
						</div>
						<h3>HEALING diﬀerently abled </h3>
						<h6>Providing diagnosis, treatment, and <br>performing corrective surgeries</h6>
						<p>Till date performed more than <span>417500</span> life transforming surgeries & still counting..</p>
					</div>
				</div>
				<div class="item">
					<div class="cont">
						<div class="icon">
							<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/logo-icon.png" alt="">
							NARAYAN <span>Hospitals</span>
						</div>
						<h3>HEALING diﬀerently abled </h3>
						<h6>Providing diagnosis, treatment, and <br>performing corrective surgeries</h6>
						<p>Till date performed more than <span>417500</span> life transforming surgeries & still counting..</p>
					</div>
					<div class="img_block">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/c-5.jpg" alt="">
					</div>
				</div>
				<div class="item even">
					<div class="img_block">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/c-6.jpg" alt="">
					</div>
					<div class="cont">
						<div class="icon">
							<img src="<?=get_stylesheet_directory_uri()?>/assets/<?=get_stylesheet_directory_uri()?>/assets/images/logo-icon.png" alt="">
							NARAYAN <span>Hospitals</span>
						</div>
						<h3>HEALING diﬀerently abled </h3>
						<h6>Providing diagnosis, treatment, and <br>performing corrective surgeries</h6>
						<p>Till date performed more than <span>417500</span> life transforming surgeries & still counting..</p>
					</div>
				</div>
			</div>
  		</div>
  	</section>

  	<section class="sec sec-03" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500" data-aos-once="false">
  		<div class="container">
  			<h1 class="text-center"><?=get_field('section_3_heading');?></h1>
  			<div class="row">
                  <?php
                  $work_listbb = get_posts( array(
                         'post_type' => 'needhelp',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                    ) );
                $wkk=1;
                foreach($work_listbb as $works){
                  
                   $urlw = wp_get_attachment_url( get_post_thumbnail_id($works->ID), 'thumbnail' ); ?> 
  				<div class="col-md-3">
  					<div class="card card-custom">
  						<div class="card-body p-0">
  							<div class="card-img">
  								<img src="<?=$urlw?>" alt="<?=$works->post_title?> " title="<?=$works->post_title?>" class="img-fluid">
  							</div>
  							<div class="card-title">
  								URGENT
  							</div>
  							<div class="card-custom-wrap">
  								<p><?=$works->post_title?></p>
  								<h3><?=get_the_excerpt($works->ID)?></h3>
  								<div class="px-4">
  									<input type="text" class="js-range-slider" name="my_range" value="" />
  								</div>
  								<a href="#" class="btn btn-primary">Donate Now</a>
  							</div>
  						</div>
  					</div>
  				</div>
                <?php } ?>
  			</div>
  		</div>
  	</section>
  	<section class="sec sec-04" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700" data-aos-once="false">
  		<div class="d-flex flex-column flex-md-row">
  			<div class="accordion order-2 order-md-1" id="accordionExample">
  			  <div class="accordion-item">
  			    <h2 class="accordion-header" id="headingOne">
  			      <button class="accordion-button rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
  			        <?=get_field('heading');?>
  			      </button>
  			    </h2>
  			    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
  			      <div class="accordion-body">
  			      	<ul class="list-group list-group-flush" id="content_1">
                        <?php 
                            wp_reset_query();
                            if (have_rows('repeater')):
                            while (have_rows('repeater')):
                            the_row();
                            $banner_image= get_sub_field('logo');
                            $content= get_sub_field('place');
                            ?>
  			      		<li class="list-group-item"><img src="<?=$banner_image['url']?>" alt="" title="<?=$content?>"><?=$content?></li>
                          <?php  
                            endwhile;   
                            endif;
                            ?> 
  			      	</ul>
  			      </div>
  			    </div>
  			  </div>
  			  <div class="accordion-item">
  			    <h2 class="accordion-header" id="headingTwo">
  			      <button class="accordion-button rounded-0 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  			        <?=get_field('branch_heading');?>
  			      </button>
  			    </h2>
  			    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
  			      <div class="accordion-body">
  			      	<ul class="list-group list-group-flush" id="content_2">
                        <?php 
                            wp_reset_query();
                            if (have_rows('branch_repeater')):
                            while (have_rows('branch_repeater')):
                            the_row();
                            $banner_image1= get_sub_field('image');
                            $content1= get_sub_field('name');
                            ?>
  			      		<li class="list-group-item"><img src="<?=$banner_image1['url']?>" alt="<?=$content1?>" title="<?=$content1?>"><?=$content1?></li>
                         <?php  
                            endwhile;   
                            endif;
                            ?> 
  			      	</ul>
  			      </div>
  			    </div>
  			  </div>
  			</div>
  			<div class="sec-04-right w-100  order-1 order-md-2">
  				<h1 class="text-center"><?=get_field('section_4_heading');?></h1>
  				<img src="<?=get_field('register_office_image')['url'];?>" alt="<?=get_field('section_4_heading');?>" title="<?=get_field('section_4_heading');?>" class="img-fluid img-map">
  			</div>
  		</div>
  	</section>
  	<section class="sec sec-05" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="900" data-aos-once="false">
  		<h1 class="text-center bg-white mb-4"><?=get_field('section_5_heading');?></h1>
  		<div class="sec-bg">
  			<div class="container">
  				<div class="row g-0">
                    <?php
                  $post_lists = get_posts( array(
                         'post_type' => 'successstories',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => 3,
                    ) );
                foreach($post_lists as $posts){
                  
                        ?> 
  					<div class="col-md-4 position-relative">
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
	<section class="sec sec-06" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="900" data-aos-once="false">
  		<div class="container">
			<h1 class="text-center"><?=get_field('section_6_heading');?></h1>
			<div class="owl-carousel testimonial_carousel">
                
                <?php
                  $post_list = get_posts( array(
                         'post_type' => 'testimonials',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                    ) );
                foreach($post_list as $post){
                  
                        ?> 

				<div class="item">
					<div class="inner">
						<div class="user_area">
							<div class="relative_div">
								<div class="pic">
                                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
									<img src="<?php echo $url ?>" alt="<?php echo $post->post_title; ?>">
								</div>
								<h4><?php echo $post->post_title; ?> <span><?php echo $post->post_excerpt; ?> </span></h4>
							</div>
						</div>
						<div class="cont_area">
							<?php echo $post->post_content; ?>
						</div>
					</div>
				</div>
                  <?php       
                        
                }
                wp_reset_query();
                ?>
                
			</div>
		</div>
  	</section>  
*/ ?>
<?php
get_footer();
