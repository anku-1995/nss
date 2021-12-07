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
?>


  <div class="homeSlider owl-carousel">
    <div class="item">
      <img src="<?=get_stylesheet_directory_uri()?>/assets/images/background.jpg">
      <div class="text"><a href="javascript:;"></a></div>
    </div>
    <div class="item">
      <img src="<?=get_stylesheet_directory_uri()?>/assets/images/background1.jpg">
      <div class="text"><a href="javascript:;">Lexus Brand Review</a></div>
    </div>
    <div class="item">
      <img src="<?=get_stylesheet_directory_uri()?>/assets/images/background1.jpg">
      <div class="text"><a href="javascript:;">Lexus Brand Review2</a></div>
    </div>
    <div class="item">
      <img src="<?=get_stylesheet_directory_uri()?>/assets/images/background1.jpg">
      <div class="text"><a href="javascript:;">Lexus Brand Review3</a></div>
    </div>
  </div> 
  <div class="contentSec">
    <div class="container">
      <div class="innerWrap">
        <div class="primaryMenu">
          <div class="primaryMenuList">
            <a href="javascript:void(0)" class="heading">
              <span class="openBrace"></span>
              <span>We Are defined by</span>
              <span class="closeBrace"></span>
            </a>
          </div>          
          <div class="primaryMenuList">
            <a href="javascript:void(0)" class="heading">
              <span class="openBrace"></span>
              <span>the people we are</span>
              <span class="closeBrace"></span>
            </a>
          </div>
          <div class="primaryMenuList">
            <a href="javascript:void(0)" class="heading yellow">
              <span class="openBrace"></span>
              <span>the things we do</span>
              <span class="closeBrace"></span>
            </a>
          </div>
          <div class="primaryMenuList">
            <a href="javascript:void(0)" class="heading">
              <span class="openBrace"></span>
              <span>journeys we haven’t yet begun<span class="closeBrace"></span></span>              
            </a>
          </div>
        </div>
        <div class="subscribe">
          <h5>Subscribe to discover what we are getting upto</h5>
          <form class="wp-form">
            <input class="form-control" type="email" name="" placeholder="Email">
            <input class="subscribeBtn" type="submit" name="" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
  
<?php
get_footer();
