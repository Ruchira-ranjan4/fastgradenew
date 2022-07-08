<?php

get_header();
?>

<div class="col-sm-12 details2">
    <div class="row">
        
<div class="col-sm-4"><img src="https://secureservercdn.net/198.71.233.55/w8u.82c.myftpupload.com/wp-content/uploads/2022/02/default-profile-picture-150x150.png" id="img2">
<div class="starsec1">
                            <span class="fa fa-star empty"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
</div>
<div class="col-sm-4 profile"> 
    
<a href="<?php the_permalink(); ?>"><button type="button" class="btn-detailyellow">100 students</button></a>
                       
                        <h2 class="headings"><?php the_title();?></h2>
                        <button type="button" class="btn-detailyellow">
							<?php echo get_term(get_field('subjects'),'subjects')->name ; ?></button>
                       
<div class="col-sm-4">
	</div>

    </div>
</div>
<div class="col-sm-12 details4">
    <div class="row">


        
    </div>
</div>
<div class="col-sm-12 details3">
    <div class="row">
        <div class="col-sm-3">
            <h1 class="headings1">Education</h1>
        </div>
        <div class="col-sm-9">
            <div class="card2">
            </div>
        </div>

    </div>
</div>
<div class="col-sm-12 details4">
    <div class="row">
        
        <div class="col-sm-8">
            <div class="card3">
            </div>
        </div>
        <div class="col-sm-4">
        <h1 class="headings2">Tutoring Experience</h1>
        </div>

    </div>
</div>
<!-- Breadcrum -->
<div class="col-sm-12 details3">
    <div class="row">
        <div class="col-sm-3">
        <h1 class="headings1">Review</h1>
        </div>
        <div class="col-sm-9">
            <div class="card2">
            </div>
        </div>

    </div>
</div>
<!-- Contact-Content -->	
<!-- Breadcrum -->
<div class="tutors-sec">
	 <div class="col-md-12 p-0">
         <h2>Related Tutors</h2>
      </div>
   <div class="col-md-12">
	   <div class="row">
		   
                <?php
// Custom WP query query
$args_query = array(
	'post_type' => array('tutor_profiles'),
	'order' => 'DESC',
		'posts_per_page' => 4,
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

	
	
	
<?php

get_footer();
?>