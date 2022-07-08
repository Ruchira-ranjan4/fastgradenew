<?php

get_header();
?>
<section class="inner-banner abt-ib">
    <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png">
    <div class="brd-crm">
        <a href="#">Public Tutoring Request
		</a>
    </div>
</section>




    <div class="container">
        <div class="row">
     <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
			
                <div class="col-sm-12">
                    <div class="cardDesign">
                      <h4 class="entry-title"><?php the_title();?></h4>
						<div class="MainContain">
							<h3 class="Innerdata">Just testing</h3><br>
	<h3 class="Innerdata">Level : Level : <?php echo the_field(''); ?>  Subjects : <?php echo get_term(get_field('subject'),'subject')->name ; ?></h3>
							<h3 class="Innerdata">Field of studies : CALCULUS</h3>
						</div>
                       <div class="Inner-btn">
						   <a href="<?php the_permalink(''); ?>"><button type="button" class="btn btn-light bn1">VIEW REQUEST</button></a>
						</div>
                    </div>
                </div>
			<?php  endwhile; ?>
            <?php endif; ?>
       <div class="pagination">
        <!-- Pagination -->
        <div>
            <?php bootscore_pagination(); ?>
          </div>
    </div>
</div>


             
				
				
				
            </div>
        
   <div class="space15">
</div>
    




<?php

get_footer();
?>


