<?php

get_header();
?>
<div class="BGcolor">
	<div class="container-fluid">
     <div class="col-sm-12">
    <div class="row">
      <div class="InnerData">
		  
		  <p class="paragraph">Subject :<?php echo get_term(get_field('subject'),'subject')->name ; ?>
            Field of study :<?php echo the_field('fields_of_study'); ?>
            Level : College Year 2<br>
            Max Budget :<?php echo the_field('budget'); ?>
            Country : <?php echo the_field('location'); ?>
		</p>
          
        <h2 class="headings"><?php the_title();?></h2>
        <p class="paragraph">Posted on :<?php echo the_field('preferred_time_slot'); ?></p>
		  
		  
		</div>
        
    </div>

</div>
</div>
	
</div>









    <div class="container">
        <div class="row">
                <div class="col-sm-12">
                    <div class="cardDesign">
					
                      <h4 class="entry-title">Tutoring Need</h4>
						<div class="MainContain">
							<h3 class="Innerdata"><?php echo the_field('description'); ?></h3><br>
						</div>
                      
                    </div>
                </div>
       
				
			  <div class="col-sm-12">
                    <div class="cardDesign">
                      <h4 class="entry-title"><?php echo the_field('expectations'); ?></h4>
						<div class="MainContain">
							<h3 class="Innerdata">Just testing</h3><br>
               <p class="paragraph">Posted on :<?php echo the_field('preferred_time_slot'); ?></p>
						
						</div>
                      
                    </div>
                </div> 
			<div class="container">
					<h5 class="HeadingTutor">Are you tutor?</h5>
			</div>
		
        
				
				
            </div>
        </div>























<?php
get_footer();
?>