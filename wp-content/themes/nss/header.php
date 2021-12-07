<?php
/**
 * Header file for the nss.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage  nss
 * @since nss1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
<!DOCTYPE html>
    
    <head>
        <title><?php echo $blog_title = get_bloginfo(); ?></title>
        <meta name="description" content="">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
         <link rel="icon" href="<?=get_stylesheet_directory_uri()?>/assets/images/favicon.png" sizes="64x64" type="image/png">
        <meta property="og:image" content="<?=get_stylesheet_directory_uri()?>/assets/images/home-section2-banner.jpg">
        <meta name="twitter:image" content="<?=get_stylesheet_directory_uri()?>/assets/images/home-section2-banner.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/assets/css/aos.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/assets/css/jquery.treeview.css" />
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/assets/css/style.css">
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/assets/css/responsive.css">

		<?php wp_head(); ?>
  

	</head>

	<body <?php body_class(); ?>>

    <?php
    wp_body_open();
           $header_phone_no = get_field('header_phone_no','options');
           $header_whatsapp_phone_no = get_field('header_whatsapp_phone_no','options');
           $header_email = get_field('header_email','options');
           $logo = get_field('logo','options');
    ?>
     
    <header>
        <div class="top-header">
            <div class="wrapper">
                <div class="top-header-inner">
                    <ul>
                        <li data-aos="fade-down" data-aos-delay="100"><a
                                href="https://wa.me/<?=$header_whatsapp_phone_no?>?text=I'm%20interested%20" target="_blank"><i
                                    class="fa fa-whatsapp" aria-hidden="true"></i> <span>+91-<?=$header_whatsapp_phone_no?></span></a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="200"><a href="tel:<?=$header_phone_no?>"><i
                                    class="fa fa-phone" aria-hidden="true"></i> <span><?=$header_phone_no?></span></a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="300"><a href="mailto:<?=$header_email?>"><i
                                    class="fa fa-envelope" aria-hidden="true"></i><span><?=$header_email?></span></a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="400"><i class="fa fa-search" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="wrapper">
                <div class="main-header-inner d-flex">
                    <div class="logo">
                        <a href="<?=get_site_url();?>">
                            <?php if(!empty($logo)){ ?>
                            <img src="<?=$logo['url']?>" alt="logo" title="narayan seva sansthan" data-aos="fade-right"
                                data-aos-delay="100">
                             <?php }else{ ?>
                             <img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo.jpg" alt="logo" title="narayan seva sansthan" data-aos="fade-right"
                                data-aos-delay="100">
                              <?php } ?>
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li data-aos="fade-down" data-aos-delay="100" class="has-megamenu"><a
                                    href="javascript:;">About</a>
                                <ul class="megamenu">
                                    <li><a href="javascript:;">About Us</a></li>
                                    <li><a href="javascript:;">Indian Branches</a></li>
                                    <li><a href="javascript:;">Smart Village</a></li>
                                    <li class="has-submenu"><a href="javascript:;">Global Presence</a>
                                        <ul class="megamenu">
                                            <li><a href="javascript:;">USA</a></li>
                                            <li><a href="javascript:;">UK</a></li>
                                            <li><a href="javascript:;">South Africa</a></li>
                                            <li><a href="javascript:;">Hongkong</a></li>
                                            <li><a href="javascript:;">Canada</a></li>
                                            <li><a href="javascript:;">Japan</a></li>
                                            <li><a href="javascript:;">Australia</a></li>
                                            <li><a href="javascript:;">Thailand </a></li>
                                            <li><a href="javascript:;">Singapore </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Management Committee</a></li>
                                </ul>
                            </li>
                            <li data-aos="fade-down" data-aos-delay="200" class="has-megamenu"><a
                                    href="javascript:;">Service</a>
                                <ul class="megamenu">
                                    <li class="has-submenu"><a href="javascript:;">Heal</a>
                                        <ul class="megamenu">
                                            <li><a href="javascript:;">Hospital</a></li>
                                            <li><a href="javascript:;">Corrective Surgeries</a></li>
                                            <li><a href="javascript:;">Artificial Limb</a></li>
                                            <li><a href="javascript:;">Physiotherapy</a></li>
                                            <li><a href="javascript:;">Aids & Apliances</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu"><a href="javascript:;">Enrich</a>
                                        <ul class="megamenu">
                                            <li><a href="javascript:;">Mass Wedding</a></li>
                                            <li><a href="javascript:;">Orphanage</a></li>
                                            <li><a href="javascript:;">Vocational Training Program</a></li>
                                            <li><a href="javascript:;">Narayan Children Academy</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu"><a href="javascript:;">Empower</a>
                                        <ul class="megamenu">
                                            <li><a href="javascript:;">Fashion & Talent Show</a></li>
                                            <li><a href="javascript:;">Para Sports</a></li>
                                            <li><a href="javascript:;">Skill Development</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li data-aos="fade-down" data-aos-delay="300" class="has-megamenu"><a
                                    href="javascript:;">Donate</a>
                                <ul class="megamenu">
                                    <li><a href="javascript:;">GPRY</a></li>
                                    <li><a href="javascript:;">Corona relief seva</a></li>
                                    <li><a href="javascript:;">Critical Disease</a></li>
                                    <li><a href="javascript:;">Regular Donation</a></li>
                                    <li><a href="javascript:;">Contribute us (Generic)</a></li>
                                    <li class="has-submenu"><a href="javascript:;">WHO</a>
                                        <ul class="megamenu">
                                            <li><a href="javascript:;">WoH</a></li>
                                            <li><a href="javascript:;">WoH Diamond </a></li>
                                            <li><a href="javascript:;">WoH Platinum</a></li>
                                            <li><a href="javascript:;">WoH Gold</a></li>
                                            <li><a href="javascript:;">WoH Silver</a></li>
                                            <li><a href="javascript:;">WoH Bronze</a></li>
                                            <li><a href="javascript:;">WoH Charity </a></li>
                                            <li><a href="javascript:;">WoH Service</a></li>
                                            <li><a href="javascript:;">WoH Humanity </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Donate through Paytm</a></li>
                                    <li><a href="javascript:;">Indian Bank Details</a></li>
                                    <li><a href="javascript:;">Foreign Bank Details</a></li>
                                    <li><a href="javascript:;">Donation Policy</a></li>
                                    <li><a href="javascript:;">Tax Exemption</a></li>
                                </ul>
                            </li>
                            <li data-aos="fade-down" data-aos-delay="300" class="has-megamenu"><a
                                    href="javascript:;">Media</a>
                                <ul class="megamenu">
                                    <li><a href="javascript:;">E-Magaazine</a></li>
                                    <li><a href="javascript:;">Channel Teelcast</a></li>
                                    <li><a href="javascript:;">Gallery</a></li>
                                    <li class="has-submenu"><a href="javascript:;">VIP Views</a>
                                        <ul class="megamenu">
                                            <li><a href="javascript:;">VIP Comments</a></li>
                                            <li><a href="javascript:;">VIP Speech</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Events</a></li>
                                    <li><a href="javascript:;">Social Media</a></li>
                                    <li><a href="javascript:;">Blogs</a></li>
                                </ul>
                            </li>
                            <li data-aos="fade-down" data-aos-delay="400" class="has-megamenu"><a
                                    href="javascript:;">Highlights</a>
                                <ul class="megamenu">
                                    <li><a href="javascript:;">Awards</a></li>
                                    <li><a href="javascript:;">Achievements</a></li>
                                    <li><a href="javascript:;">Success Stories</a></li>
                                    <li><a href="javascript:;">latest updates</a></li>
                                </ul>
                            </li>
                            <li data-aos="fade-down" data-aos-delay="500" class="has-megamenu"><a
                                    href="javascript:;">Collaborate</a>
                                <ul class="megamenu">
                                    <li class="has-submenu"><a href="javascript:;">Associate with us </a>
                                        <ul class="megamenu">
                                            <li><a href="javascript:;">Projects</a>
                                                <ul class="megamenu">
                                                    <li><a href="javascript:;">ADIP</a></li>
                                                    <li><a href="javascript:;">Artificial Limb Camp</a></li>
                                                    <li><a href="javascript:;">Diagnosis Camp</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:;">CSR</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu"><a href="javascript:;">Support</a>
                                        <ul class="megamenu">
                                            <li><a href="javascript:;">Register for Divyang Vivah</a></li>
                                            <li><a href="javascript:;">Open a Branch</a></li>
                                            <li><a href="javascript:;">Install a Donation Box</a></li>
                                            <li><a href="javascript:;">Naturopathy</a></li>
                                            <li><a href="javascript:;">Request for Katha</a></li>
                                            <li><a href="javascript:;">Open Physiotherapy Center</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li data-aos="fade-down" data-aos-delay="600" class="has-megamenu"><a
                                    href="javascript:;">Contact</a></li>
                        </ul>
                    </div>
                    <div class="donate-btn my-button"><a href="javascript:;">Donate</a></div>
                    <div class="multimmenu">
                        <a href="javascript:;">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div id="mobilemenu">

        <div class="mobilemenucontent">
            <ul id="browser">
                <li><span>About</span>
                    <ul>
                        <li><a href="javascript:;"><span>About Us</span></a></li>
                        <li><a href="javascript:;"><span>Indian Branches</span></a></li>
                        <li><a href="javascript:;"><span>Smart Village</span></a></li>
                        <li><span> Global Presence</span>
                            <ul>
                                <li><a href="javascript:;"><span>USA</span></a></li>
                                <li><a href="javascript:;"><span>UK</span></a></li>
                                <li><a href="javascript:;"><span>South Africa</span></a></li>
                                <li><a href="javascript:;"><span>Hongkong</span></a></li>
                                <li><a href="javascript:;"><span>Canada</span></a></li>
                                <li><a href="javascript:;"><span>Japan</span></a></li>
                                <li><a href="javascript:;"><span>Australia</span></a></li>
                                <li><a href="javascript:;"><span>Thailand </span></a></li>
                                <li><a href="javascript:;"><span>Singapore </span></a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;"><span>Management Committee</span></a></li>
                    </ul>
                </li>



                <li><span>Our Service</span>
                    <ul>
                        <li><span> Heal</span>
                            <ul>
                                <li><a href="javascript:;"><span>Hospital</span></a></li>
                                <li><a href="javascript:;"><span>Corrective Surgeries</span></a></li>
                                <li><a href="javascript:;"><span>Artificial Limb</span></a></li>
                                <li><a href="javascript:;"><span>Physiotherapy</span></a></li>
                                <li><a href="javascript:;"><span>Aids & Apliances</span></a></li>
                            </ul>
                        </li>
                        <li><span> Enrich</span>
                            <ul>
                                <li><a href="javascript:;"><span>Mass Wedding</span></a></li>
                                <li><a href="javascript:;"><span>Orphanage</span></a></li>
                                <li><a href="javascript:;"><span>Vocational Training Program</span></a></li>
                                <li><a href="javascript:;"><span>Narayan Children Academy</span></a></li>
                            </ul>
                        </li>
                        <li><span> Empower</span>
                            <ul>
                                <li><a href="javascript:;"><span>Fashion & Talent Show</span></a></li>
                                <li><a href="javascript:;"><span>Orphanage</span></a></li>
                                <li><a href="javascript:;"><span>Para Sports</span></a></li>
                                <li><a href="javascript:;"><span>Skill Development</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><span>Donation</span>
                    <ul>
                        <li><a href="javascript:;"><span>GPRY</span></a></li>
                        <li><a href="javascript:;"><span>Corona relief seva</span></a></li>
                        <li><a href="javascript:;"><span>Critical Disease</span></a></li>
                        <li><a href="javascript:;"><span>Regular Donation</span></a></li>
                        <li><a href="javascript:;"><span>Contribute us (Generic)</span></a></li>
                        <li><span> WHO</span>
                            <ul>
                                <li><a href="javascript:;"><span>WoH</span></a></li>
                                <li><a href="javascript:;"><span>WoH Diamond </span></a></li>
                                <li><a href="javascript:;"><span>WoH Platinum</span></a></li>
                                <li><a href="javascript:;"><span>WoH Gold</span></a></li>
                                <li><a href="javascript:;"><span>WoH Silver</span></a></li>
                                <li><a href="javascript:;"><span>WoH Bronze</span></a></li>
                                <li><a href="javascript:;"><span>WoH Charity</span></a></li>
                                <li><a href="javascript:;"><span>WoH Service</span></a></li>
                                <li><a href="javascript:;"><span>WoH Service</span></a></li>
                            </ul>
                        </li>

                        <li><a href="javascript:;"><span>Donate through Paytm</span></a></li>
                        <li><a href="javascript:;"><span>Indian Bank Details</span></a></li>
                        <li><a href="javascript:;"><span>Foreign Bank Details</span></a></li>
                        <li><a href="javascript:;"><span>Donation Policy</span></a></li>
                        <li><a href="javascript:;"><span>Tax Exemption</span></a></li>
                    </ul>
                </li>
                <li><span>Media</span>
                    <ul>
                        <li><a href="javascript:;"><span>E-Magaazine</span></a></li>
                        <li><a href="javascript:;"><span>Channel Teelcast</span></a></li>
                        <li><a href="javascript:;"><span>Gallery</span></a></li>
                        <li><span> VIP Views</span>
                            <ul>
                                <li><a href="javascript:;"><span>VIP Comments</span></a></li>
                                <li><a href="javascript:;"><span>VIP Speech</span></a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;"><span>Events</span></a></li>
                        <li><a href="javascript:;"><span>Social Media</span></a></li>
                        <li><a href="javascript:;"><span>Blogs</span></a></li>
                    </ul>
                </li>

                <li><span>Highlights</span>
                    <ul>
                        <li><a href="javascript:;"><span>Awards</span></a></li>
                        <li><a href="javascript:;"><span>Achievements</span></a></li>
                        <li><a href="javascript:;"><span>Success Stories</span></a></li>
                        <li><a href="javascript:;"><span>latest updates</span></a></li>
                    </ul>
                </li>

                <li><span>Highlights</span>
                    <ul>
                        <li><span>Associate with us</span>
                            <ul>
                                <li><span>Projects</span>
                                    <ul>
                                        <li><a href="javascript:;"><span>ADIP</span></a></li>
                                        <li><a href="javascript:;"><span>Artificial Limb Camp</span></a></li>
                                        <li><a href="javascript:;"><span>Diagnosis Camp</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;"><span>CSR</span></a></li>
                            </ul>
                        
                        </li>
                        <li><span>Support</span>
                            <ul>
                                <li><a href="javascript:;"><span>Register for Divyang Vivah</span></a></li>
                                <li><a href="javascript:;"><span>Open a Branch</span></a></li>
                                <li><a href="javascript:;"><span>Install a Donation Box</span></a></li>
                                <li><a href="javascript:;"><span>Naturopathy</span></a></li>
                                <li><a href="javascript:;"><span>Request for Katha</span></a></li>
                                <li><a href="javascript:;"><span>Open Physiotherapy Center</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:;"><span>Contact</span></a></li>
            </ul>
        </div>
    </div>
<?php /*


 
  	<header>
  		<div class="header-top">
	  		<div class="container">
	  			<ul class="list-unstyled d-flex mb-0 justify-content-center justify-content-md-end align-items-center">
	  				<li><a href="tel:+<?php if(!empty($header_phone_no)){ echo $header_phone_no; } ?>"><i class="sprite phone-icon"></i>+<?php if(!empty($header_phone_no)){ echo $header_phone_no; } ?></a></li>
	  				<li><a href="mailto:<?php if(!empty($header_email)){ echo $header_email; } ?>"><i class="sprite mail-icon"></i><?php if(!empty($header_email)){ echo $header_email; } ?></a></li>
	  				<li><a href="#" class="sprite search-icon"></a></li>
	  			</ul>
	  		</div>	
  		</div>
  		<nav class="navbar navbar-expand-lg navbar-expand-xxl bg-primary p-0">
  		  <div class="container">
  		    <a class="navbar-brand" href="<?=get_site_url();?>">
                <?php if(!empty($logo)){ ?>
                <img src="<?=$logo['url']?>" alt="" title="" class="img-fluid">
                <?php }else{ ?>
  		        <img src="<?=get_stylesheet_directory_uri()?>/assets/images/logo.png" alt="" title="" class="img-fluid">
                <?php } ?>
  		    </a>
  		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  		      <span class="navbar-toggler-icon fa fa-navicon"></span>
  		    </button>
  		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                  wp_nav_menu( array(
            'menu'           => 'Header Menu', 
            'theme_location' => '__no_such_location',
            'fallback_cb'    => 'wp_page_menu',
            'container' => 'ul',
            'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                       'sub_menu' => true
            )
            ); 
              ?>
  		    </div>
  		  </div>
  		</nav>
  	</header>    */ ?>    
    