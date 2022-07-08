<?php 
/*Template Name: Home Template*/
get_header(); 
?>
<!-- START BANNER -->
<section class="slider_sec position-relative">
   <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleControls" data-slide-to="1">02</li>
            <li data-target="#carouselExampleControls" data-slide-to="2">03</li>
         </ol>
         <div class="carousel-item active">
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png">
            <div class="carousel-caption w-100">
               <div class="cust-container1">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="caption-area position-relative text-left">
                           <h4>Find & Hire <span>Expert</span></h4>
                           <h5>Online Tutors</h5>
                           <h6>The exam is coming up soon! Do you really want to pass?</h6>
                           <p>Use fastgrades quick 1 hour sessions to help you get ready</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container position-relative">
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
</section>
<section class="bnr-btm">
   <div class="cust-container1">
      <div class="row">
        <div class="col-md-3">
           <div class="btm-stp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/m-ico1.png">
              <h6>Become a Tutor</h6>
           </div>
        </div>
        <div class="col-md-3">
           <div class="btm-stp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/m-ico2.png">
              <h6>Find a Tutor</h6>
           </div>
        </div>
        <div class="col-md-3">
           <div class="btm-stp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/m-ico3.png">
              <h6>Post Tutoring Request</h6>
           </div>
        </div>
        <div class="col-md-3">
           <div class="btm-stp">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/m-ico4.png">
              <h6>Find Tutoring jobs</h6>
           </div>
        </div> 
      </div>
   </div>
</section>
<section class="we-best py-5">
   <div class="cust-container1">
      <h4>Know Why We are <span>Best</span></h4>
      <div class="row">
         <div class="col-md-4">
            <div class="single-bs-grid">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s-ico1.png">
               <a href="#"><p>Register Yourself</p>
     <img class="w-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/go.png"></a>
            </div>
         </div>
         <div class="col-md-4">
            <div class="single-bs-grid">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s-ico2.png">
               <a href="#"><p>Choose Subject & Tutor</p>
     <img class="w-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/go.png"></a>
            </div>
         </div>
         <div class="col-md-4">
            <div class="single-bs-grid">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s-ico3.png">
               <a href="#"><p>Personalized Learning</p>
     <img class="w-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/go.png"></a>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- Breadcrum -->
<div class="tutors-sec">
	 <div class="col-md-12 p-0">
         <h2>Great Tutors Great <span>Learning</span></h2>
      </div>
   <div class="col-md-12">
	   <div class="row">
		   
                <?php
// Custom WP query query
$args_query = array(
	'post_type' => array('tutor_profiles'),
	'order' => 'DESC',
    'posts_per_page' => 4
);

$query = new WP_Query( $args_query );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
	

?>
                <div class="col-sm-3">
					<div class="starsec">
					<div class="space5">
						</div>	
					
                 <img src="https://secureservercdn.net/198.71.233.55/w8u.82c.myftpupload.com/wp-content/uploads/2022/02/default-profile-picture-150x150.png">
						<div class="space5">
						</div>	
                        <h4><?php the_title(); ?></h4>
                        <div class="starsec">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
						
                        <h3>Private Tutor</h3>
						
						<button type="button" class="btn btn-info BGN1">100 STUDENTS</button>
                        <div class="starsec">
       <a href="<?php the_permalink(); ?>">				
							<button type="button" class="btn btn-info BGN">View details</button>
							</a>
                        </div>
                   
                </div>
</div>
                <?php
            
        }
    } else {
    echo "no post";
    }
    
    wp_reset_postdata();
            
            ?>

            </div>

        </div>
 
	</div>





<section class="w-subjsec" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/crs-bg.png)left top no-repeat;">
   <div class="cust-container1">
      <div class="row">
         <div class="col-md-12">
            <div class="w-subj-head">
               <h5>WHAT SUBJECTS</h5>
               <h6>Do you want to improve in?</h6>
               <p>Middle School, High School, College and University.</p>
            </div>
         </div>
         <div class="col-md-3 col-6 sub">
            <div class="subj1">
               <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/c-ico1.png">
                  <p>Mathematics</p>
               </a>
               <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/c-ico2.png">
                  <p>Physics</p>
               </a>
            </div>
         </div>
         <div class="col-md-6">
            <div class="main-simg">
               <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/crs-main.png">
            </div>
         </div>
         <div class="col-md-3 col-6 sub ">
            <div class="subj2">
               <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/c-ico3.png">
                  <p>Chemistry</p>
               </a>
               <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/c-ico4.png">
                  <p>Biology</p>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="f-diff">
   <div class="cust-container1">
      <div class="row">
         <div class="col-md-12">
            <div class="m-cont">
               <h5>The <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fglogo.png"></span> Difference</h5>
               <div class="lap-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/laptop.png" id="lap">
               </div>
               <a href="#">Browse Tutor</a>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>
</body>
</html>