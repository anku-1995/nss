<?php
/**
 * Template Name: About Template
 * Template Post Type:  page
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
                <div class="home-banner-left about-page-banner-left">
                    <div class="breadcum">
                        <ul>
                            <li><a href="<?=get_site_url();?>">Home</a></li>
                            <li>about Us</li>
                        </ul>
                    </div>
                    <div class="home-banner-video">
                        <div id="hindi-video">
                        <video width="320" height="240" poster="<?=get_stylesheet_directory_uri()?>/assets/images/video1place.jpg" muted loop>
                            <source src="<?=get_field('hindi_video')['url']?>" type="video/mp4">
                        </video>
                        <div class="play play1"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/play-icon.png"></div>
                    </div>
                    <div id="english-video">
                        <video width="320" height="240" poster="<?=get_stylesheet_directory_uri()?>/assets/images/poster2.jpg" muted loop>
                            <source src="<?=get_field('english_video')['url']?>" type="video/mp4">
                        </video>
                        <div class="play play2"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/play-icon.png"></div>
                    </div>
                    </div>
                    <div class="switch-languge" data-aos="fade-up">
                        <a href="javascript:;" class="hindivideo active">Hindi</a>
                        <a href="javascript:;" class="englishvideo">English</a>
                    </div>
                </div>
                <div class="home-banner-right about-page-banner-right">
                    <div class="about-page-banner-caption">
                        <h1 data-aos="fade-up" data-aos-delay="100"><?=get_field('heading')?></h1>
                        <h2 data-aos="fade-up" data-aos-delay="200"><?=get_field('sub_heading')?></h2>
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
                <div class="home-sectiopn-heading text-center" data-aos="fade-up"><?php echo get_the_title(); ?> </div>

               <?php echo the_content(); ?>
            </div>
        </div>
    </section>
    <section class="about-page-section2" data-aos="fade-up" data-aos-delay="100">
          <?php if(!empty($featured_img_url)){ ?>
        <picture>
            <source media="(max-width:650px)" srcset="<?=get_stylesheet_directory_uri()?>/assets/images/ab-section3-mobile-banner.jpg">
  		<img src="<?=esc_url($featured_img_url)?>" alt="image" title="image" >
            </picture>
        <?php }else{ ?> 
  		<picture>
            <source media="(max-width:650px)" srcset="<?=get_stylesheet_directory_uri()?>/assets/images/ab-section3-mobile-banner.jpg">
            <img src="<?=get_stylesheet_directory_uri()?>/assets/images/about-banner2.png" />
        </picture>
        <?php } ?>
        
    </section>
    <section class="home-section1 about-page-section5 smoothscroll_approx_full_js">
        <div class="white-bg1"></div>
        <div class="white-bg2"></div>
        <div class="wrapper">
            <div class="home-section1-inner">
                <h3 class="h3 text-center" data-aos="fade-up" data-aos-delay="200">What we Do</h3>
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



    <section class="about-page-section3">
        <div class="wrapper">
            <div class="home-sectiopn-heading text-center" data-aos="fade-up" data-aos-delay="100">Our Journey </div>
            <div class="ab-page-sec3">
                <div class="owl-carousel owl-theme">
                    <?php 
                            wp_reset_query();
                            if (have_rows('year_detail')):
                            $ipsc=1;
                            while (have_rows('year_detail')):
                            the_row();
                            $ajourneyi_image= get_sub_field('image');
                            $ajourney_descriptionc= get_sub_field('content');
                            $ajourney_titleh= get_sub_field('heading');
                            ?>
 
                    <div class="item" data-hash="a<?=$ipsc?>" <?php if($ipsc==1 || $ipsc==4){ ?> data-aos="fade-up" data-aos-delay="100" <?php } ?> >
                        <div class="ab-page-sec3-th">
                            <img src="<?=$ajourneyi_image['url']?>" />
                        </div>
                        <div class="ab-page-sec3-caption" data-aos="fade-up" data-aos-delay="100">
                            <div class="ab-page-sec3-caption-inner">
                                <div class="slide-progress"></div>
                                <h4><?=$ajourney_titleh?></h4>
                                <p><?=$ajourney_descriptionc?>
                                </p>
                            </div>
                        </div>
                    </div>
                      <?php   $ipsc=$ipsc+1;
                         endwhile;   
                         endif;
                      ?>
                </div>
                <div class="time-line-responsive">
                <div class="time-line-outer smoothscroll_approx_full_js">
                    <div class="time-line-main"></div>
                    <div class="time-line">
                        <?php 
                            wp_reset_query();
                            if (have_rows('year_detail')):
                            $ipcj=1;
                            while (have_rows('year_detail')):
                            the_row();
                            $year= get_sub_field('year');
                            ?>
 
                    <a class="a<?=$ipcj?> button secondary url" href="#a<?=$ipcj?>"><span></span><?=$year?></a>
                         <?php   $ipcj=$ipcj+1;
                         endwhile;   
                         endif;
                ?>
                </div>
                </div>
            </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>
