<?php
/**
 * Template Name: E-Magazine Template
 * Template Post Type:  page
 *
 * @package WordPress
 * @subpackage nss
 * @since nss 1.0
 */

get_header();

global $wpdb;
$sql = "select MONTH(post_date) AS Month from ns_posts where post_type='emagazine' group by Month";
$mondata = $wpdb->get_results($sql);

$sqly = "select Year(post_date) AS Year from ns_posts where post_type='emagazine' group by Year";
$mondatay = $wpdb->get_results($sqly);

$months = [1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
?>

	<section class="emagazine_section">
		<div class="container">
			<div class="inner">
				<div class="heading">
					<h2><?=get_field('title')?></h2>
				</div>
                <?= do_shortcode('[contact-form-7 id="631" ]')  ?>
			<?php /*<form>
					<div class="row">
						<div class="form-group col-6">
							<label>Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-6">
							<label>Email Id</label>
							<input type="email" class="form-control">
						</div>
						<div class="col-12 text-center">
							<input type="submit" class="btn" value="Submit">
						</div>
					</div>	
				</form> */ ?>
			</div>
		</div>
	</section>
	  
	<section class="emagazine_section_two">
		<div class="container">
			<div class="heading">
				<h2><?=get_field('section_title')?></h2>
			</div>
            <form id="ajax-contact-form">
			<div class="row">
				<div class="col-6 text-center">
					<ul class="nav nav-tabs magazine_list" id="myTab" role="tablist">
						<li class="nav-item" role="presentation"><a class="nav-link active" id="hindi-tab" data-bs-toggle="tab" data-bs-target="#hindi">Hindi Edition</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" id="english-tab" data-bs-toggle="tab" data-bs-target="#english">English Edition</a></li>
					</ul>
				</div>
				<div class="col-6">
					
						<ul class="sort_list">
							<li>
								<label>Month</label>
								<div class="styled_select">
									<select id="month" name="month" class="form-control">
										<option value="">Select</option>
                                        <?php foreach($mondata as $mm){ ?>
										<option value="<?=$mm->Month?>"><?=$months[$mm->Month]?></option>
                                        <?php } ?>
									</select>
								</div>
							</li>
							<li>
								<label>Year</label>
								<div class="styled_select">
									<select id="year" name="year" class="form-control">
										<option value="">Select</option>
										<?php foreach($mondatay as $mm){ ?>
										<option value="<?=$mm->Year?>"><?=$mm->Year?></option>
                                        <?php } ?>
									</select>
								</div>
							</li>
							<li>
								<input type="submit" class="btn" value="Submit">
							</li>
						</ul>
					
				</div>
			</div>
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="hindi">
                <input type="hidden" name="cat" class="cat" value="16">
			<div id="hinditab">
			<div class="owl-carousel magazine_carousel" >
                <?php
                  $post_lists = get_posts( array(
                         'post_type' => 'emagazine',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                         'tax_query' => array(
                                          array(
                                                'taxonomy' => 'magazinecategories',
                                                'field' => 'slug',
                                                'terms' => 'hindi-edition' //pass your term name here
                                                  ),
                                                )),
                        
                     );
                foreach($post_lists as $posts){ 
                    $urla = wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>


				<div class="item">
					<img src="<?=$urla?>" alt="<?=$posts->title?>">
				</div>
                  <?php } ?>
				
			</div>
            </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="english">
                
                 <input type="hidden" name="cat" class="cat" value="17">
			<div id="englishtab">
			<div class="owl-carousel magazine_carousel" >
                <?php
                  $post_lists = get_posts( array(
                         'post_type' => 'emagazine',
                         'post_status' => 'publish',
                         'orderby' => 'ID', 
                         'order' =>'asc',
                         'posts_per_page' => -1,
                       'tax_query' => array(
                                          array(
                                                'taxonomy' => 'magazinecategories',
                                                'field' => 'slug',
                                                'terms' => 'english-edition' //pass your term name here
                                                  ),
                                                )),
                        
                     );
                foreach($post_lists as $posts){ 
                    $urla = wp_get_attachment_url( get_post_thumbnail_id($posts->ID), 'thumbnail' ); ?>


				<div class="item">
					<img src="<?=$urla?>" alt="<?=$posts->title?>">
				</div>
                  <?php } ?>
				
			</div>
            </div>
            </div>
            </div>
                
            </form>	
		</div>
	</section>  
	
<?php get_footer(); ?>
<script>
    $('#ajax-contact-form').submit(function(e){
    e.preventDefault();
    var month = $("#month").val();
    var year = $("#year").val();
    var cat = $(".cat").val();
       // alert(cat);
    $.ajax({ 
         data: {action: 'emagzine', month:month, year:year, cat:cat},
         type: 'post',
         datatype: 'html',
         url    : "/nss/wp-admin/admin-ajax.php",
         success: function(data) {
              $("#hinditab").html(data);

	$('.magazine_carousel').owlCarousel({
        loop:false,
        nav:true,
        navText: [ '<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>' ],
        dots:false,
        margin:30,
        responsive:{
            0:{
                items:1,
				nav:false,
				stagePadding: 40,
				loop: true,
				margin:10
            },
            768:{
                items:2
            },
			1024:{
                items:3
            },
            1366:{
                items:4
            }
        }
    })
        }
    });

})
</script>
	