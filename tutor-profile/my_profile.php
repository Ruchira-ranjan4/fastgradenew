<?php
/*
Template Name: my_profile
*/



get_header();
?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">

                <h3>Welcome, Fastgrade</h3>
              <?php include_once("tutor_profile_menu.php"); ?>
            </div>

            <div class="col-sm-6">
            <h1 class="headings">My Profile</h1>
            </div>
           
        </div>
    </div>

</section>
<?php get_footer(); ?>