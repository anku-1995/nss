<?php
/**
 * Template Name: Contact us Template
 * Template Post Type:  page
 *
 * @package WordPress
 * @subpackage nss
 * @since nss 1.0
 */

get_header();
?>
    <section class="home-banner smoothscroll_approx_full_js">
        <div class="wrapper">
            <div class="homebanner-inner">
                <div class="home-banner-left about-page-banner-left">
                    <div class="breadcum">
                        <ul>
                            <li><a href="<?=get_site_url();?>">Home</a></li>
                            <li><?php echo get_the_title(); ?></li>
                        </ul>
                    </div>
                    <div class="home-banner-video">
                        <div class="comman-banner iframe-banner">
                            <!-- <img src="images/contact-us-banner.jpg"> -->
                            <iframe src="<?php echo get_the_excerpt(); ?>" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  style="border:0; margin-top: -130px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="home-banner-right about-page-banner-right custom-center">
                    <div class="about-page-banner-caption">
                        <h2 data-aos="fade-up" data-aos-delay="200"><?=get_field('heading')?></h2>
                        <div class="contact-banner-details" data-aos="fade-up" data-aos-delay="200">
                            <ul>
                                <li><a href="https://wa.me/<?=get_field('whatsapp_no')?>?text=I'm%20interested%20" target="_blank"><span
                                            class="footer-icons"><i class="fa fa-whatsapp"
                                                aria-hidden="true"></i></span> +91-<?=get_field('whatsapp_no')?></a></li>
                                <li><a href="tel:<?=explode(',',get_field('phone_no'))[0]?>"><span class="footer-icons"><i class="fa fa-phone"
                                                aria-hidden="true"></i></span><?=get_field('phone_no')?></a></li>
                                <li><a href="mailto:<?=get_field('email')?>"><span class="footer-icons"><i
                                                class="fa fa-envelope" aria-hidden="true"></i></span><?=get_field('email')?></a></li>
                            </ul>
                        </div>
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



    <section class="contact-page-section1">
        <div class="wrapper">
            <div class="home-sectiopn-heading" data-aos="fade-up"><?php echo get_the_title(); ?></div>

            <div class="contact-page-section1-inner" data-aos="fade-up">
                <div class="contact-page-left">
                    <?php echo the_content(); ?>
                </div>
                <div class="contact-page-right">
                    <?=do_shortcode('[contact-form-7 id="873" title="Contact Us"]')?>
                </div>
            </div>

        </div>
    </section>

 <?php /*
  	  
	<section class="contact_section">
		<div class="container">
			<div class="row">
				<div class="col-8">
					<div class="heading">
						<h2>Get in <span>Touch</span></h2>
					</div>
					<div class="whatsapp">
						<h3>For queries call</h3>
						<a href="https://api.whatsapp.com/send?phone=<?=get_field('phone_no');?>&text=Hi"><i class="fa fa-whatsapp"></i><?=get_field('phone_no');?></a>
					</div>
					<div class="mails">
						<h3>Importent Mails</h3>
						<ul>
                            <?php   wp_reset_query();
                            if (have_rows('emails_listing')):
                            while (have_rows('emails_listing')):
                            the_row();
                            $main_content= get_sub_field('title');
                            $umg= get_sub_field('email');

                           ?>
							<li><?=$main_content?>: <a href="mailto:<?=$umg?>"><?=$umg?></a></li>
                            <?php  
                        endwhile;   
                        endif;
                        ?> 
						</ul>
					</div>
				</div>
				<div class="col-4">
					<div class="heading">
						<h2>Contact <span>Us</span></h2>
					</div>
					<div class="contact_form">
						<?=do_shortcode('[contact-form-7 id="873" title="Contact Us"]')?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="address_section">
		<div class="container">
			<h2>Head Office :</h2>
			<div class="row">
                  <?php   wp_reset_query();
                            if (have_rows('office_listing')):
                            while (have_rows('office_listing')):
                            the_row();
                            $name= get_sub_field('name');
                            $address= get_sub_field('address');

                           ?>
				<div class="col-6">
					<ul class="address_list">
						<li>
							<span><?=$name?></span> <br>
							<?=$address?>
						</li>
					</ul>
				</div>
                 <?php  
                        endwhile;   
                        endif;
                        ?> 
                
			</div>
		</div>
	</section>
	  
	  */ ?>
<?php get_footer(); ?>
