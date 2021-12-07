<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage nss
 * @since nss 1.0
 */ ?> 
<?php      $address = get_field('part_2_content','options');
           $part_2_heading = get_field('part_2_heading','options');
           $part_3_heading = get_field('part_3_heading','options');
           $social_media_heading = get_field('social_media_heading','options');
           $part_3_phone_no = get_field('part_3_phone_no','options');
           $part_3_whatsapp_phone_no = get_field('part_3_whatsapp_phone_no','options');
           $part_3_email = get_field('part_3_email','options');
           $footer_image = get_field('footer_image','options'); 
           $footer_mobile_image = get_field('footer_mobile_image','options'); 
?> 
<style>
    ul#menu-footer-menu li a {
    text-transform: capitalize !important;
    }
</style>
<?php 
global $post;

if( $post->ID != 1099) { ?>

    <div class="footer-bg">
        <picture>
            <source media="(max-width:600px)" srcset="<?=$footer_mobile_image['url']?>">
            <img src="<?=$footer_image['url']?>" alt="footer">
        </picture>
    </div>

<?php } ?>

    <footer class="smoothscroll_approx_full_js">
        <div class="footer-ads" id="footer-ads">
            <div class="fb-ads">
                <?php $footer_content = get_field('footer_content','options'); ?> 
                <h4><?php if(!empty($footer_content)){ echo $footer_content; }else{ echo "<span>Save a life.</span> Donate to Narayan Seva Sansthan "; } ?> </h4>
            </div>
            <div class="donateNow">
                <div class="newsletter-form d-flex">
                    <div class="form-input">
                        <input type="taxt" name="Newsletter" Value="5000">
                    </div>
                    <div class="submit"><button type="submit">Donate</button></div>
                </div>
            </div>
        </div>
        <div class="footer-main smoothscroll_approx_full_js">
            <div class="wrapper">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-5">
                        <div class="footer-text footer-text1">
                            <h4>Quick Links</h4>
                                 <?php 
                                          wp_nav_menu( array(
                                    'menu'           => 'Footer Menu', 
                                    'theme_location' => '__no_such_location',
                                    'fallback_cb'    => 'wp_page_menu',
                                    'container' => 'ul',
//                                    'menu_class' => 'list-unstyled mb-0 list-custom-1',
                                    )
                                    ); 
                                ?>
                            
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5">
                        <div class="footer-text footer-text2">
                            <h4><?=$part_2_heading?></h4>
                            <p><?=$address?></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-text footer-contact-link footer-text3">
                            <h4><?=$part_3_heading?></h4>
                            <ul>
                                <li><a href="tel:+91-<?=$part_3_phone_no?>"><span class="footer-icons"><i class="fa fa-phone"
                                                aria-hidden="true"></i></span>+91-<?=$part_3_phone_no?></a></li>
                                <li><a href="https://wa.me/<?=$part_3_whatsapp_phone_no?>?text=I'm%20interested%20" target="_blank"><span
                                            class="footer-icons"><i class="fa fa-whatsapp"
                                                aria-hidden="true"></i></span> +91-<?=$part_3_whatsapp_phone_no?></a></li>
                                <li><a href="mailto:<?=$part_3_email?>"><span class="footer-icons"><i
                                                class="fa fa-envelope" aria-hidden="true"></i></span><?=$part_3_email?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5">
                        <div class="footer-text footer-text4">
                            <h4><?=$social_media_heading?></h4>

                            <form>
                                <div class="newsletter-form d-flex">
                                    <div class="form-input">
                                        <input type="taxt" name="Newsletter" placeholder="Email id">
                                    </div>
                                    <div class="submit"><button type="submit">Submit</button></div>
                                </div>
                            </form>

                            <div class="footer-social">
                                <ul>
                            <?php 
                            $ff = get_field('facebook_link','options');
                            $ii = get_field('insta_link','options');
                            $yy = get_field('youtube_link','options');
                            $ll = get_field('linkedin_link','options');
                            $tt = get_field('twitter_link','options');
                            ?> 
                                    
                                    <li class="fb"><a href="<?php if(!empty($ff)){ echo $ff; } ?>" target="_blank"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/fb.png"
                                                alt="" title=""></a></li>
                                    <li class="tw"><a href="<?php if(!empty($tt)){ echo $tt; } ?>" target="_blank"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/twitter.png"
                                                alt="" title=""></a></li>
                                    <li class="ins"><a href="<?php if(!empty($ii)){ echo $ii; } ?>" target="_blank"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/insta.png"
                                                alt="" title=""></a></li>
                                    <li class="you"><a href="<?php if(!empty($yy)){ echo $yy; } ?>" target="_blank"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/youtube.png"
                                                alt="" title=""></a></li>
                                    <li class="link"><a href="<?php if(!empty($ll)){ echo $ll; } ?>" target="_blank"><img
                                                src="<?=get_stylesheet_directory_uri()?>/assets/images/linkdin.png" alt="" title=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
             <?php $copyright = get_field('copyright','options');
              if(!empty($copyright)){ echo $copyright; } ?> 
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="<?=get_stylesheet_directory_uri()?>/assets/js/jquery.countup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js'></script>
    <script src="<?=get_stylesheet_directory_uri()?>/assets/js/aos.js"></script>
    <script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/scroll-animation.js"></script>
    <script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/jquery.treeview.js"></script>
    <script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/custom.js"></script>


    <script>
        //AOS.init({once: true});
        $(function () {
            AOS.init({
                duration: 1500,
                disable: 'mobile'
            });
        })
        $('.counter').countUp();
    </script>


<?php wp_footer(); ?>

</body>

</html>
<?php /*
  	<section class="sec-donate">
  		<div class="container">
  			<div class="d-sm-flex justify-content-center align-items-center text-center text-md-left">
  				<p class="mb-2 mb-md-0 donate-text"><?php if(!empty($footer_content)){ echo $footer_content; }else{ echo "<span>Save a life.</span> Donate to Narayan Seva Sansthan "; } ?> </p>
          <div class="input-group input-group-donate">
            <!-- <input type="text" class="form-control" placeholder="5000"> -->
            <div class="form-control donate-amt">5000</div>
            <select class="form-select donate-type" id="inputGroupSelect02">
              <option selected>One Time</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <button class="btn btn-primary" type="button">Donate Now</button>
          </div>
  			</div>
  		</div>
  	</section>

<?php 
           $ff = get_field('facebook_link','options');
           $ii = get_field('insta_link','options');
           $yy = get_field('youtube_link','options');
           $ll = get_field('linkedin_link','options');
           $tt = get_field('twitter_link','options');
           $pp = get_field('pinterest_link','options');
           $address = get_field('part_2_content','options');
           $part_2_heading = get_field('part_2_heading','options');
           $part_3_heading = get_field('part_3_heading','options');
           $social_media_heading = get_field('social_media_heading','options');
           $part_3_phone_no = get_field('part_3_phone_no','options');
           $part_3_email = get_field('part_3_email','options');
           $copyright = get_field('copyright','options');
        
        ?> 
	<footer>
  		<div class="container">
  			<div class="row g-0 footer-top">
  				<div class="col-6 col-md-3">
                    <?php 
                  wp_nav_menu( array(
            'menu'           => 'Footer Menu', 
            'theme_location' => '__no_such_location',
            'fallback_cb'    => 'wp_page_menu',
            'container' => 'ul',
            'menu_class' => 'list-unstyled mb-0 list-custom-1',
            )
            ); 
  					?> 
  				</div>
  				<div class="col-6 col-md-3 list-custom-2">
  					<h5 class="list-custom-title"><?php if(!empty($part_2_heading)){ echo $part_2_heading; } ?> </h5>
  					<address class="mb-0">
  						<?php if(!empty($address)){ echo $address; } ?> 
  					</address>
  				</div>
  				<div class="col-6 col-md-3">
  					<h5 class="list-custom-title"><?php if(!empty($part_3_heading)){ echo $part_3_heading; } ?></h5>
  					<ul class="list-unstyled">
  						<li><a href="tel:+<?php if(!empty($part_3_phone_no)){ echo $part_3_phone_no; } ?>">+<?php if(!empty($part_3_phone_no)){ echo $part_3_phone_no; } ?></a></li>
  						<li><a href="mailto:<?php if(!empty($part_3_email)){ echo $part_3_email; } ?>"><?php if(!empty($part_3_email)){ echo $part_3_email; } ?></a></li>
  					</ul>
  				</div>
  				<div class="col-6 col-md-3">
  					<h5 class="list-custom-title"><?php if(!empty($social_media_heading)){ echo $social_media_heading; } ?></h5>
  					<ul class="list-unstyled d-flex align-items-center social-icon">
  						<li><a href="<?php if(!empty($yy)){ echo $yy; } ?>"><i class="fa fa-youtube"></i></a></li>
  						<li><a href="<?php if(!empty($ff)){ echo $ff; } ?>"><i class="fa fa-facebook"></i></a></li>
  						<li><a href="<?php if(!empty($ii)){ echo $ii; } ?>"><i class="fa fa-instagram"></i></a></li>
  						<li><a href="<?php if(!empty($pp)){ echo $pp; } ?>"><i class="fa fa-pinterest"></i></a></li>
  						<li><a href="<?php if(!empty($tt)){ echo $tt; } ?>"><i class="fa fa-twitter"></i></a></li>
  						<li><a href="<?php if(!empty($ll)){ echo $ll; } ?>"><i class="fa fa-linkedin"></i></a></li>
  					</ul>
  				</div>
  			</div>
  			<div class="bottom-links text-center mb-2">
                 <?php 
                $primaryMenu = array(
                        'theme_location'  => 'primary',
                        'menu'            => 'Bottom Footer Menu',
                        'container'       => '',
                        'container_class' => false,
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => 'primary-menu',
                        'echo'            => false,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'depth'           => 0,
                        'walker'          => ''
                    );
                    echo strip_tags( wp_nav_menu( $primaryMenu ), '<a>' );

  					?> 
              
  			</div>
  		</div>
  		<div class="sec-copyright">
  			<div class="container text-center">
  				<?php if(!empty($copyright)){ echo $copyright; } ?> 
  			</div>
  		</div>
  	</footer>

  	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/jquery.min.js"></script>
  	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/ion.rangeSlider.min.js"></script>
  	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/bootstrap.bundle.min.js"></script>
  	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/owl.carousel.min.js"></script><script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/slick.js"></script>   
  	
  	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/aos.js"></script>
    <script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/custom.js"></script>
<script type="text/javascript">
  		
  		$(document).ready(function(){
  		$('.dropdown_menu li').removeClass('nav-item');	
  		$('.dropdown_menu li a').removeClass('nav-link');	
		$('li.menu-item-has-children a.nav-link').attr('href',"javascript:void(0)");
		
	
			
			if($(window).width() < 1023){
				$('.support_secton1 .blockquote').remove().insertAfter($('.support_secton1 .col-5'));
			}
			
			
  		});
		
		function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});
  	</script>
  	<script type="text/javascript">
  		$(".js-range-slider").ionRangeSlider({
  		    type: "double",
  		    min: 0,
  		    max: 100000,
  		    from:30000,
  		    to: 100000,
  		    grid: false,
  		    hide_min_max:true,
  		});
  		$(document).ready(function(){
  			if($(window).width() <= 767){
  					$('.sec-03 .row').addClass('owl-carousel');
  					$('.owl-carousel').owlCarousel({
  					    loop:true,
  					    margin:0,
  					    nav:false,
  					    responsive:{
  					        0:{
  					            items:1
  					        },
  					        600:{
  					            items:1
  					        },
  					        1000:{
  					            items:1
  					        }
  					    }
  					})
  			}
  			3
  			$("#content_1, #content_2").mCustomScrollbar({
  				theme:"minimal"
  			});
			
			
			$('.heal_carousel').owlCarousel({
                loop:true,
                nav:false,
				dots:false,
				stagePadding: 150,
				margin:30,
                responsive:{
                    0:{
                        items:1,
						stagePadding: 50,
                    },
                   	639:{
                       items:1,
						stagePadding: 50,
                    },
					768:{
                        items:1
                    },
                    1025:{
                        items:3
                    },
					1600:{
                        items:5
                    }
                }
            })
			
			$('.carousel_two').owlCarousel({
                loop:true,
                margin:0,
                nav:true,
				navText: [ '<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>' ],
				dots:false,
                responsive:{
                    0:{
                        items:1,
						nav:false,
						stagePadding: 100,
                    },
                    767:{
                        items:1,
						nav:false,
						stagePadding: 150,
                    },
                    1024:{
                        items:1,
						nav:false,
						stagePadding: 150,
                    },
					1025:{
                        items:3
                    }
                }
            })
			
			$('.carousel_wnyh').owlCarousel({
                loop:false,
                margin:0,
                nav:true,
				navText: [ '<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>' ],
				dots:false,
                responsive:{
                    0:{
                        items:1,
						nav:false,
						stagePadding: 150,
						loop:true,
                    },
                    600:{
                        items:1,
						nav:false,
						stagePadding: 150,
						loop:true,
                    },
                    1024:{
                        items:1,
						nav:false,
						stagePadding: 150,
						loop:true,
                    },
					1025:{
                        items:4
                    }
                }
            })
			
			
			$('.testimonial_carousel').owlCarousel({
                loop:false,
                margin:0,
                nav:false,
				dots:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1024:{
                        items:2
                    }
                }
            })
			
			$('.success_stories').owlCarousel({
                loop:false,
                margin:0,
                nav:false,
				dots:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1024:{
                        items:3
                    },
					1025:{
                        items:3
                    }
                }
            })
			
			
        AOS.init();
			
			
  		});
  	</script>
 
	<?php wp_footer(); ?>
  </body>
</html>
*/ ?>