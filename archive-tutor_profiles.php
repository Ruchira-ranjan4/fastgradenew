<?php

get_header();
?>

<!-- Breadcrum -->
<div class="tutors-sec">
   <div class="col-md-12">
	   <div class="row">
		   
                <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
     'post_type' => 'tutor_profiles',
     'posts_per_page' =>6,
     'paged' => $paged
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
                <div class="col-sm-4">
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
                <?php endwhile; ?>
<div class="pagination">
     <?php
     $big = 999999999;
     echo paginate_links( array(
          'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $loop->max_num_pages,
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;'
     ) );
?>
</div>
<?php wp_reset_postdata(); ?>
            </div>

        </div>
 
	</div>
<!-- Contact-Content -->

<?php

get_footer();
?>