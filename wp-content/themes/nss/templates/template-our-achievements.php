<?php
/**
 * Template Name: Our-achievements Template
 * Template Post Type:  page
 *
 * @package WordPress
 * @subpackage nss
 * @since nss 1.0
 */

get_header();
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
?>
  <section class="home-banner smoothscroll_approx_full_js">
        <div class="wrapper">
            <div class="homebanner-inner">
                <div class="home-banner-left about-page-banner-left">
                    <div class="breadcum">
                        <ul>
                            <li><a href="<?=get_site_url();?>">Home</a></li>
                            <li><a href="javascript:;">Highlights</a></li>
                            <li>Achievements</li>
                        </ul>
                    </div>
                    <div class="home-banner-video">
                        <div class="comman-banner">
                            <img src="<?=$large_image_url[0]?>">
                        </div>
                    </div>
                </div>
                <div class="home-banner-right about-page-banner-right custom-center">
                    <div class="about-page-banner-caption">
                        <h2 data-aos="fade-up" data-aos-delay="200"><?=get_field('banner_heading')?></h2>
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



    <section class="about-page-section1">
        <div class="wrapper">
            <div class="about-page-section1-inner text-center">
                <div class="home-sectiopn-heading text-center" data-aos="fade-up"><?php echo get_the_title(); ?></div>
                <div class="woh-section1-inner">
               <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="achievements-page">
        <div class="wrapper">
            <div class="achievement-main">
                <?php 
                          $ourachilist = get_posts( array(
                             'post_type' => 'achievements',
                             'post_status' => 'publish',
                             'orderby' => 'ID', 
                             'order' =>'asc',
                             'posts_per_page' => -1,
                           ) );
                            foreach ($ourachilist as $mypost) {      
                                 $urlpost = wp_get_attachment_url( get_post_thumbnail_id($mypost->ID), 'thumbnail' );  ?>
 
                
                <div class="achive-inner">
                   <img src="<?=$urlpost?>" alt="<?=$mypost->post_title?>">
                    <div class="counter">
                        <h2><?php echo get_the_excerpt($mypost->ID); ?></h2>
                    </div>
                    <div class="ach-details"><?=$mypost->post_title?></div>
                </div>
               <?php  } ?> 
            </div>
        </div>
    </section>



    <section class="changing-living">
        <div class="wrapper">
            <div class="changing-inner">
                <div class="about-page-section1-inner text-center">
                    <div class="home-sectiopn-heading text-center" data-aos="fade-up"><?=get_field('changing_live_heading')?></div>
                    <div class="woh-section1-inner">
                        <p data-aos="fade-up" data-aos-delay="100" class="paddingtop0"><?=get_field('changing_live_sub_heading')?>
                        </p>
                    </div>
                </div>
            </div>


            <div class="changing-slider">
                <div class="owl-carousel owl-theme">
                     <?php 
                          $ourachilistc = get_posts( array(
                             'post_type' => 'changinglive',
                             'post_status' => 'publish',
                             'orderby' => 'ID', 
                             'order' =>'asc',
                             'posts_per_page' => 6,
                           ) );
                            foreach ($ourachilistc as $mypostc) {      
                                 $urlpostc = wp_get_attachment_url( get_post_thumbnail_id($mypostc->ID), 'thumbnail' );  ?>
 
                    <div class="item">
                        <div class="changing-slider-main">
                            <div class="changing-slider-th">
                                <img src="<?=$urlpostc?>" alt="<?=$mypostc->post_title?>">
                            </div>
                            <div class="changing-slider-cap">
                                <h4><?=$mypostc->post_title?></h4>
                                <div class="progress-main">
                                    <div class="proline">
                                        <div class="procover" style="width:20%;"></div>
                                    </div>
                                </div>
                                <p><?php echo get_the_excerpt($mypostc->ID); ?></p>
                            </div>
                        </div>
                        <div class="changing-over changing-slider-cap">
                            <h4><?=$mypostc->post_title?></h4>
                            <div class="progress-main">
                                <div class="proline">
                                    <div class="procover" style="width:20%;"></div>
                                </div>
                            </div>
                            <?=$mypostc->post_content?>
                            <div class="donate-btn my-button"><a href="<?php echo esc_url( get_page_link( 19 ) ); ?>">Donate</a></div>
                        </div>
                    </div>
                    
                    <?php  } ?> 
                </div>
            </div>


        </div>
    </section>

<?php get_footer(); ?>
	