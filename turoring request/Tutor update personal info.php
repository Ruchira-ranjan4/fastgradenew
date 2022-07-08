<?php
/*
Template Name: Tutor update personal info
*/

acf_form_head();

get_header();
?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
                <h3>Welcome, Fastgrade</h3>
              <?php include_once("turoring_request_menu.php"); ?>
            </div>

            <div class="col-md-6">
	      <?php while ( have_posts() ) : the_post();   ?>
			<h2> <?php  the_title(); ?> </h2>
			<?php
                acf_form(array(
                    'post_id'       => '100',
//                     'post_title'    => true,
//                     'post_content'  => true,
                    'new_post' => array(
                        'post_type'     => array('tutor_profiles'),
                        'post_status'   => 'publish'
                    ),
                    'fields' => array('field_61d96cac7f769','field_61eeaf3100b98','field_61d96ce777678' ,'field_61d972a272c11','field_61d9731432ae1','field_61d96ccefe3f6','field_61ebe6f9dcad0','field_61ebe75908622','field_61ebe78f33396','field_61ebe7db6732e','field_61ebecddc3674','field_61ebe81178547','field_623eab5bc7bbf'),
                    'form' => true,
                    'submit_value'  => 'Update'
                )); 
        ?>
        <?php endwhile; ?>
	
				
            </div>
            

        </div>
    </div>

</section>
<?php get_footer(); ?>