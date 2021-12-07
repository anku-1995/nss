<?php
/**
 * Template Name: Media-gallery Template
 * Template Post Type:  page
 *
 * @package WordPress
 * @subpackage nss
 * @since nss 1.0
 */

get_header();
?>
<style>
/*
    .galley-image-listing ul li {
    display: none;
}
*/
</style>

<link href="<?=get_stylesheet_directory_uri()?>/assets/css/jquery.fancybox.css" type="text/css" rel="stylesheet">  
<link href="<?=get_stylesheet_directory_uri()?>/assets/css/component.css" type="text/css" rel="stylesheet">  
<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/modernizr.custom.js"></script>  
	<section class="mg_section">
		<div class="container">
			<div class="heading">
                <h2><?=get_field('title')?></h2>
            </div>
			<div class="contetnt_block">
                       <?php
                            wp_reset_query(); // necessary to reset query
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile; // End of the loop.
                        ?>
			</div>
			<div class="mg_container galley-image-listing">
				<ul class="grid effect-1" id="grid">
                      <?php
                  $post_list = get_posts( array(
                         'post_type' => 'imagegallery',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                    ) );
                foreach($post_list as $post){
                  
                        ?> 
					<li>
						<div class="gallery_wrap">
							<div class="img_block"><?php $urla = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

								<img src="<?php echo $urla ?>" alt="<?=$post->post_title?>">
								<div class="overlay">
									<a href="<?php echo $urla ?>" data-fancybox="images">View Gallery</a>
								</div>
							</div>
							<div class="copy">
								<p><?=$post->post_title?></p>
							</div>
						</div>
					</li>
                    
                    <?php } ?>
				</ul>
				<div class="btn_wrap">
					<div class="inner">
						<a href="javascript:;" class="btn load-more">Load More +</a>
                        <a href="javascript:;" class="btn load-less" style="display: none;">Load less -</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	  
	 
<?php get_footer(); ?>
	
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/imagesloaded.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/classie.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/AnimOnScroll.js"></script>  
	  
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri()?>/assets/js/jquery.fancybox.js"></script>  
	  
<script type="text/javascript">
		new AnimOnScroll( document.getElementById( 'grid' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		});  
    
    

  var gallery_size = $(".galley-image-listing ul li").length;
  var gallery_show = 8;
    
    $('.galley-image-listing ul li').not(':lt('+gallery_show+')').slideUp();

    
  $('.galley-image-listing ul li:lt('+gallery_show+')').show();
  $('.galley-image-listing .btn_wrap .inner .load-more').click(function () {
      gallery_show = (gallery_show + 8 <= gallery_size) ? gallery_show + 8 : gallery_size;
      $('.galley-image-listing ul li:lt('+gallery_show+')').slideDown();
      if(gallery_show == gallery_size){
        setTimeout(function(){
          $('.galley-image-listing .btn_wrap .inner .load-more').hide();  
          $('.galley-image-listing .btn_wrap .inner .load-less').show();         
        },500);
      }
  });

  $('.galley-image-listing .btn_wrap .inner .load-less').click(function () {
      gallery_show = (gallery_show-8<8) ? 8 : gallery_show-8;
      $('.galley-image-listing ul li').not(':lt('+gallery_show+')').slideUp();
      if(gallery_show <= 8){
        setTimeout(function(){
          $(".galley-image-listing .btn_wrap .inner .load-more").show();
          $('.galley-image-listing .btn_wrap .inner .load-less').hide()
        },500);
      }
  });
	</script> 