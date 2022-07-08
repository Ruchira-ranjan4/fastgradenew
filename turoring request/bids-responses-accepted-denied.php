<?php
/*
Template Name:Tutor bids-responses-accepted-denied
*/



get_header();
?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
                <h3>Welcome, Fastgrade</h3>
              <?php include_once("turoring_request_menu.php"); ?>
            </div>

      	 <div class="col-md-6">
              <div class="folter">My Responses to Public Tutoring Requests</div>
				
						<?php
				// Custom WP query query
// 	$user_id = get_current_user_id();
$args_query = array(
	'post_type' => array('fastgrade_bidding'),
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

                            <h2 class="entry-title">
							Request Title:	<?php the_title(); ?>
							</h2>
							
                           <div class="LevelSuj">
		                	Max Budget : <?php echo the_field(''); ?>
							</div>
                          <div class ="FildofStudy">
							  Prefered Time Slot : <?php echo the_field(''); ?>
							</div>
							<div class="timesloat">
								Response Value :<?php echo the_field('bid_value'); ?>
							</div>
							
							<div class="Budget">
								Response Status : <?php echo the_field('bid_status'); ?>
							</div>
								<div class="Budget">
					Booking Request Status  :  <?php echo the_field(''); ?>
							</div>
							<div class="Budget">
				<a href=""><button type="button" class="btn btn-primary view">View Tutoring Request</button></a>
				<a href=""><button type="button" class="btn btn-danger edit">Edit Response </button></a>
				
							</div>
							
                        </article>
                    </div>
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

</section>
<?php get_footer(); ?>