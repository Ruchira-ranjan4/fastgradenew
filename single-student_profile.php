<?php 

get_header(); 
?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">

				<h3>Welcome, Fastgrade</h3>
				<nav class="navbar navbar-expand-md" role="navigation">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'Student-Dashboard-menu',
            'depth'             => 2,
            'container_class'   => 'collapse navbar-collapse',
            'menu_class'        => 'nav-side-menu',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
				</nav>			
			</div>
			
			
            <div class="col-sm-6">
				<?php
				// Custom WP query query
	$user_id = get_current_user_id();
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
                <div class="w-subj-head">
                    <h6>Update Profile Info</h6>
					<h1>Title :<?php the_title(); ?></h1>
					<h3>Firstname :<?php echo the_field('first_name'); ?></h3>
					<h3>Last name :<?php echo the_field('last_name'); ?></h3>
					<h3>Email :<?php echo the_field('email'); ?></h3>
					<h3>Phone no :<?php echo the_field('phone_number'); ?></h3>
					<h3>College :<?php echo the_field('schoolcollegeuniversity_name'); ?></h3>
					<h3>Level :<?php echo the_field('level'); ?></h3>
					<h3>Country :<?php echo the_field('country'); ?></h3>
					<h3>Language :<?php echo the_field('student_language'); ?></h3>
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
