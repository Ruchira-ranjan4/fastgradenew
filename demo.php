<?php 
/*
  Template Name: Demo
 */

get_header(); 
?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">

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
			
			<div class="col-sm-6">
				 <div class="card1">
              
                    <h2 class="headings"></h2>
                    <p class="paragraph"></p>
                    <p class="paragraph">Level : </p>
                    <p class="paragraph"> Subjects :</p>
                    
                    <p class="paragraph"> Field of studies : </p>
					 <div class="bs-example">
                    <a href=""> <button type="button" class="btn btn-warning float-right ml-2 Response">View
						Response</button></a>
					  <a href=""><button type="button"class="btn btn-warning float-right ml-2 Edit">Edit Request</button></a>
					 <a href=""><button type="button" class="btn btn-warning float-right ml-2 Delete">Delete Request</button></a>
					 <a href=""><button type="button" class="btn btn-warning float-right ml-2 View">View Request</button></a>
                </div>
				</div>
            </div>
			<div class="col-sm-1">
			</div>
			</div>
			</div>
           
       
</section>
<?php get_footer(); ?>
