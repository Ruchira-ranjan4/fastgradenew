<?php 
/*
  Template Name: Student Post public Tutoring Request
 */

get_header(); 
acf_form_head();
?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

				<h3>Welcome, Fastgrade</h3>
			    <?php include_once("student_dashboard_menu.php"); ?>	

			</div>
			
			
        <div class="col-md-6">
				
	      <?php while ( have_posts() ) : the_post();   ?>
			<h2> <?php  the_title(); ?> </h2>
			<?php
                acf_form(array(
                    'post_id'       => 'new_post',
//                     'post_title'    => true,
//                     'post_content'  => true,
                    'new_post' => array(
                        'post_type'     => array('tutoringrequest','student_profile'),
                        'post_status'   => 'publish'
                    ),
//                      'field_groups' => array('group_61ee74b62d458'),
                    'fields' => array('field_6210e5da7d365', 'field_61e548fd6fd3d','field_61d964ff0befd','field_61ee74c0ab7f3','field_627b959aa3d27','field_61d965810befe','field_61e5498b6fd3f','field_62419ab552304','field_62419afb52305'),
                    'form' => true,
                    'submit_value'  => 'Submit Public Request'
                )); 
        ?>
        <?php endwhile; ?>
	
				
            </div>
        </div>
	</div>
</section>
<?php get_footer(); ?>
