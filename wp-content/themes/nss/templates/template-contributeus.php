<?php
/**
 * Template Name: Contribute Template
 * Template Post Type:  page
 *
 * @package WordPress
 * @subpackage nss
 * @since nss 1.0
 */

get_header();
$large_image_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
?>


    <section class="home-banner smoothscroll_approx_full_js">
        <div class="wrapper">
            <div class="homebanner-inner">
                <div class="home-banner-left about-page-banner-left">
                    <div class="breadcum">
                        <ul>
                            <li><a href="<?=get_site_url();?>;">Home</a></li>
                            <li><a href="<?php echo esc_url( get_page_link( 19 ) ); ?>">Donate</a></li>
                            <li><?php echo get_the_title(); ?></li>
                        </ul>
                    </div>
                    <div class="home-banner-video">
                        <div class="comman-banner">
                            <img src="<?=$large_image_url?>" alt="no-banner">
                        </div>
                    </div>
                </div>
                <div class="home-banner-right about-page-banner-right custom-center">
                    <div class="about-page-banner-caption">
                        <h1 data-aos="fade-up" data-aos-delay="200"><?=get_field('banner_heading')?></h1>
                        <h2 data-aos="fade-up" data-aos-delay="200"><?=get_field('banner_sub_heading')?></h2>
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
                <div class="home-sectiopn-heading text-center" data-aos="fade-up"><?php echo get_the_excerpt(); ?></div>
                <div class="woh-section1-inner">
                     <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="about-page-section1">
        <div class="wrapper">
            <div class="about-page-section1-inner text-center">
                <div class="home-sectiopn-heading text-center" data-aos="fade-up"><?=get_field('part_2_heading')?></div>
                <div class="woh-section1-inner">
                    <p data-aos="fade-up" data-aos-delay="100"><?=get_field('part_2_sub_heading')?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="causes-section3 home-section4 smoothscroll_approx_full_js is-visible">
        <div class="wrapper">
            <div class="causes-section3-slider">
                <div class="owl-carousel owl-theme">
                     <?php 
                            wp_reset_query();
                            if (have_rows('repeater_data')):
                            $ipcj=1;
                            while (have_rows('repeater_data')):
                            the_row();
                            $title= get_sub_field('title');
                            $content= get_sub_field('content');
                            $image= get_sub_field('image');
                            ?>
                    <div class="item">
                        <div class="home-section4-inner-tiles">
                            <div class="athm ath2">
                                <img src="<?=$image['url']?>" alt="<?=$title?>">
                            </div>
                            <h4 class="counter" <?php if($ipcj>1){  ?> data-counter-time="2000" data-counter-delay="10" <?php } ?> > <?=$content?></h4>
                            <p><?=$title?></p>
                        </div>
                    </div>
                     <?php   $ipcj=$ipcj+1;
                         endwhile;   
                         endif;
                    ?>
                </div>
            </div>
        </div>
    </section>



    <section class="changing-living">
        <div class="wrapper">
            <div class="changing-inner">
                <div class="about-page-section1-inner text-center">
                    <div class="home-sectiopn-heading text-center" data-aos="fade-up"><?=get_field('changing_live_heading')?></div>
                    <div class="woh-section1-inner">
                        <p data-aos="fade-up" data-aos-delay="100" class="paddingtop0">
<?=get_field('changing_live_sub_heading')?></p>
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

>

<?php get_footer(); ?>
