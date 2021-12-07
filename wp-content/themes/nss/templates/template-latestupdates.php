<?php
/**
 * Template Name: Latest Updates Template
 * Template Post Type:  page
 *
 * @package WordPress
 * @subpackage nss
 * @since nss 1.0
 */

get_header();
?>

	<section class="latest_updates">
		<div class="container">
			<div class="heading">
				<h2><?=get_field('title')?></h2>
			</div>
            <div class="inner-div">
             <?php $i=1;
               $myposts = get_posts(array(
                              'showposts' => -1, //add -1 if you want to show all posts
                              'post_type' => 'post',
                              'tax_query' => array(
                                          array(
                                                'taxonomy' => 'category',
                                                'field' => 'slug',
                                                'terms' => 'latest-updates' //pass your term name here
                                                  )
                                                ))
                                               );

                            foreach ($myposts as $mypost) {      
                                 $urlpost = wp_get_attachment_url( get_post_thumbnail_id($mypost->ID), 'thumbnail' );  ?>

			<div class="roww moreBox blogBox <?php if($i%2==0){ }else{ echo 'odd'; } ?>" style="display: none;">
				<div class="carousel_block">
					<div class="owl-carousel donate_carousel">
						<div class="item">
							<img src="<?=$urlpost?>" alt="<?=$mypost->post_title?>">
							<a href="#" class="play_btn"><img src="<?=get_stylesheet_directory_uri()?>/assets/images/play-btn.png" alt=""></a>
							<div class="carousel_caption">
								<h3><?=get_the_excerpt($mypost->ID)?></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="cont_block">
					<div class="lu_copy">
						<h3><?=$mypost->post_title?></h3>
						<?=$mypost->post_content?>
						<h6><?php echo get_the_date( 'd M Y' ); ?></h6>
					</div>
				</div>
			</div>
          
           <?php $i=$i+1;  } ?>
            </div>
			<div class="btn_wrap">
				<div class="inner">
					<a href="javascript:;" id="loadMore" class="btn load-more">Load More +</a>
                   
				</div>
			</div>
		</div>
	</section>
	  
	  
<?php get_footer(); ?>

<script type="text/javascript">
	  
$( document ).ready(function () {
  $(".moreBox").slice(0, 2).show();
    if ($(".blogBox:hidden").length != 0) {
      $("#loadMore").show();
    }   
    $("#loadMore").on('click', function (e) {
      e.preventDefault();
      $(".moreBox:hidden").slice(0, 6).slideDown();
      if ($(".moreBox:hidden").length == 0) {
        $(".btn_wrap").fadeOut('slow');
      }
    });
  });
	</script> 
	