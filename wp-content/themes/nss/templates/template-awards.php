<?php
/**
 * Template Name: awards template
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
                            <li>Awards</li>
                        </ul>
                    </div>
                    <div class="home-banner-video">
                        <div class="comman-banner">
                            <img src="<?=$large_image_url[0]?>">
                        </div>
                    </div>
                </div>
                <div class="home-banner-right about-page-banner-right custom-center flex-center">
                    <div class="about-page-banner-caption">
                        <h2 data-aos="fade-up" data-aos-delay="100"><?php echo get_the_excerpt(); ?></h2>
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



    <section class="about-page-section1 paddingtop0">
        <div class="wrapper">
            <div class="about-page-section1-inner text-center">
                <div class="home-sectiopn-heading text-center" data-aos="fade-up"><?php echo get_the_title(); ?></div>
                <div class="woh-section1-inner">
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    </section>





    <section class="causes-section4">
        <div class="wrapper">
             <?php 
                          $ourachilistaw = get_posts( array(
                             'post_type' => 'awards',
                             'post_status' => 'publish',
                             'orderby' => 'ID', 
                             'order' =>'asc',
                             'posts_per_page' => 3,
                           ) );
                            foreach ($ourachilistaw as $hik => $mypost) {      
                                 $urlpost = wp_get_attachment_url( get_post_thumbnail_id($mypost->ID), 'thumbnail' );  ?>
 
                
            <div class="causes-section4-main">
                <div class="causes-section4-main-banner" <?php if($hik==0 || $hik==2){ ?> data-aos="fade-left" <?php }else{ ?> data-aos="fade-right" <?php } ?> data-aos-delay="100">
                    <img src="<?=$urlpost?>" alt="<?=$mypost->post_title?>">
                </div>
                <div class="causes-section4-main-text"<?php if($hik==0 || $hik==2){ ?> data-aos="fade-right" <?php }else{ ?> data-aos="fade-left" <?php } ?> data-aos-delay="100">
                    <div class="home-sectiopn-heading blue"><?=$mypost->post_title?></div>
                    <?=$mypost->post_content?>
                </div>
            </div>
           <?php  } ?> 
        </div>
    </section>

    <section class="aboutpagesection3 awardpage-section3">
        <div class="wrapper">
            <div class="about-page-section1-inner text-center">
                <div class="home-sectiopn-heading text-center" data-aos="fade-up">other Awards</div>
            </div>

                <div id="awardpage-section3-slider">
                <div class="owl-carousel owl-theme">
                     <?php 
                          $ourachilistaw = get_posts( array(
                             'post_type' => 'awards',
                             'post_status' => 'publish',
                             'orderby' => 'ID', 
                             'order' =>'asc',
                             'posts_per_page' => -1,
                           ) );
                            foreach ($ourachilistaw as $hik => $mypost) {  
                                if($hik>2){
                                 $urlpost = wp_get_attachment_url( get_post_thumbnail_id($mypost->ID), 'thumbnail' );  ?>
 
                
                    <div class="item">
                        <div class="aboutpagesection3-slider-main">
                            <div class="aboutpagesection3-section1">
                                <div class="aboutpagesection3-section1-th">
                                         <img src="<?=$urlpost?>" alt="<?=$mypost->post_title?>">
                                </div>
                                <div class="aboutpagesection3-section1-content">
                                    <h4><?=$mypost->post_title?></h4>
                                    <p><?php echo get_the_excerpt($mypost->ID); ?></p>
                                </div>
                            </div>
                            <div class="aboutpagesection3-section2">
                                <div class="aboutpagesection3-section2-inner">
                                <h4><?=$mypost->post_title?></h4>
                                  <?=$mypost->post_content?>
                          
                            </div>
                            </div>
                        </div>
                    </div>

                 <?php }  } ?> 
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>