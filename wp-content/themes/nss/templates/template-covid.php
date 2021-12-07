<?php
/**
 * Template Name: Covid Template
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
                        <div id="comman-video">
                        <video width="320" height="240" poster="<?=get_stylesheet_directory_uri()?>/assets/images/covid-banner.jpg" muted loop>
                            <source src="<?=get_field('banner_video')['url']?>" type="video/mp4">
                        </video>
                    </div>
                        <div class="play play-comman"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/play-icon.png"></div>
                    </div>
                </div>
                <div class="home-banner-right about-page-banner-right">
                    <div class="about-page-banner-caption">
                        <h1 data-aos="fade-up" data-aos-delay="100"><?=get_field('banner_heading')?></h1>
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
                <div class="home-sectiopn-heading text-center" data-aos="fade-up"><?php echo get_the_title(); ?></div>
                <?php echo the_content(); ?>
               
            </div>
        </div>
    </section>
    <section class="about-page-section2" data-aos="fade-up" data-aos-delay="100">
        <picture>
            <source media="(max-width:650px)" srcset="<?=get_field('section_3_mobile_image')['url']?>">
            <img src="<?=$large_image_url?>" />
        </picture>
    </section>


    <section class="covid-page-section3 home-section4 smoothscroll_approx_full_js">
        <div class="wrapper">
            <div class="home-sectiopn-heading blue text-center" data-aos="fade-in"><?=get_field('part_2_heading')?></div>
            <div class="home-section4-inner">
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
                <div class="home-section4-inner-tiles">
                    <div class="athm ath">
                        <img src="<?=$image['url']?>" alt="<?=$title?>">
                        <div class="bg-w"></div>
                    </div>
                    <h4 class="counter"> <?=$content?></h4>
                    <p> <?=$title?></p>
                </div> <?php   $ipcj=$ipcj+1;
                         endwhile;   
                         endif;
                    ?>
            </div>
        </div>
    </section>


    <section class="covid-section5">
        <div class="wrapper">
            <div class="covid-section5-inner">
                <div class="covid-section5-left">
                    <div class="home-sectiopn-heading blue" data-aos="fade-up" data-aos-delay="100"><?=get_field('section_4_heading')?></div>
                   <?=get_field('p_description')?>
                </div>
                <div class="covid-section5-right">
                    <img src="<?=get_field('right_image')['url']?>" data-aos="fade-up" data-aos-delay="200" />
                </div>
            </div>
        </div>

    </section>



    <section class="covid-page-section5">
        <div class="home-sectiopn-heading blue text-center"  data-aos="fade-in"><?=get_field('image_gallery_heading')?></div>
        <div class="owl-carousel owl-theme">
            <?php $dimages = (get_field('images')); foreach($dimages as $img){ ?>
            <div class="item">
                <img src="<?=$img['url']?>" />
            </div>
            <?php } ?>
          
        </div>
    </section>



<?php get_footer(); ?>
