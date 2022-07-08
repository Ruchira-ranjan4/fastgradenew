<?php 
/*Template Name: Student Dashboard
 * 
 */
get_header(); 
?>


<section class=" py-5">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
             
                  	<h3>Welcome, Fastgrade</h3>
				<nav class="navbar navbar-expand-md" role="navigation">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'student-dashboard-menu',
            'depth'             => 2,
            'container_class'   => 'collapse navbar-collapse',
            'menu_class'        => 'nav-side-menu',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
				</nav>
              
            </div>
			
			
            <div class="col-md-6">
              <div class="folter">Filter By : ALL REQUESTS PUBLIC REQUESTS PRIVATE REQUESTS</div>
				
						<?php
				// Custom WP query query
// 	$user_id = get_current_user_id();
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
				
                <div class="col-sm-12 Nd">
                    <div class="cardDesign">
                        <article class="entry">

                            <h2 class="entry-title"><?php the_title(); ?></h2>
						
							
							
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
