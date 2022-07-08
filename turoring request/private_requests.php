<?php
/*
Template Name: Tutor-Private Requests From Student
*/



get_header();
?>

<section class="py-5">
   <div class="cust-container1">
     
      <div class="row">
         <div class="col-sm-6">
           	<h3>Welcome, Fastgrade</h3>
 <?php include_once("turoring_request_menu.php"); ?>
         </div>
         <div class="col-md-6">
           	<?php
				// Custom WP query query
// 	$user_id = get_current_user_id();
$args_query = array(
	'post_type' => array('tutoringrequest'),
	'order' => 'DESC',
	'author' => $user_id,
    'posts_per_page'  => -1

);

$query = new WP_Query( $args_query );
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
				?>
			 <div class="col-sm-12">
			 <div class="cardDesign">
                        <article class="entry">

                            <h2 class="entry-title"><?php the_title(); ?></h2>
							<div class="contain">
							<?php//	the_contain(''); ?>
							</div>
                           <div class="LevelSuj">
			 Level : <?php echo get_term(get_field('level'),'grade')->name; ?>  Subjects : <?php echo get_term(get_field('subject'),'subject')->name; ?>
							</div>
                          <div class ="FildofStudy">
							  Field of studies : <?php echo the_field('fields_of_Study'); ?>
							</div>
							<div class="timesloat">
								Preferred Time Slot : <?php echo the_field('preferred_time_slot'); ?>
							</div>
							
							<div class="Budget">
								Max Budget : <?php echo the_field('budget'); ?>
							</div>
								<div class="Budget">
								Country : <?php echo get_term(get_field('country'),'cp_country')->name; ?>
							</div>
							<div class="Budget">
				<a href=""><button type="button" class="btn btn-primary">Accept</button></a>
				<a href=""><button type="button" class="btn btn-danger">Decline </button></a>
				<a href=""><button type="button" class="btn btn-light">View Request </button></a>
							</div>
							
                        </article>
                    </div>
			 <?php
		}
} else {

}

wp_reset_postdata();
				
			
		?>

         </div>
		  </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>
