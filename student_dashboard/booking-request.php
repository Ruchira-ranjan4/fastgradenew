<?php 
/*
  Template Name: Student Booking Request
 */

get_header(); 
?>


<section class=" py-5">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
             
                  	<h3>Welcome, Fastgrade</h3>
<!-- 				menu include here -->
				
				<?php include_once("student_dashboard_menu.php"); ?>
                   
              
            </div>
			
			
            <div class="col-md-6">

				
						<?php
				// Custom WP query query
//	$user_id = get_current_user_id();
$args_query = array(
	'post_type' => array('student_profile'),
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

                            <h2 class="entry-title">Testing booking end in calendar</h2>
							
                           <div class="PublicPrivate">
		                      Public
							</div>
                          <div class="SujdateResp">
							  <span class= "color1"> Subject :</span>  Physics 
							  <span class= "color1">  Field of Study : </span> Chaos  
			  <span class= "color1">  Level : </span> <?php echo get_term(get_field('level'),'grade')->name; ?>
							</div>
							
							   <div class="SujdateResp">
							  <span class= "color1"> Date :</span>  2022-06-24 
							  <span class= "color1">  Start Time :  </span>: 04:00 PM
							  <span class= "color1">  End Time : </span> College Year 4
							</div>
							
							   <div class="SujdateResp">
							  <span class= "color1"> Response Value :</span>  $55/hr
							  <span class= "color1"> Booking Value :  </span>: $34/hr.
							</div>
							
							
							<br/>
				<a href=""><button type="button" class="btn btn-warning bn1">DECLINE</button></a>
				<a href=""><button type="button" class="btn btn-light bn1">VIEW REQUEST</button></a>
			
							
							
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
