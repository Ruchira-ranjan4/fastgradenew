<?php
/*
Template Name:  Tutor Dashboard
*/



get_header();
?>

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-5">
                <h3>Welcome, Fastgrade</h3>
              <?php include_once("turoring_request_menu.php"); ?>
            </div>

            <div class="col-sm-6">
                <h1 class="headings">Student Dashboard</h1>
            </div>

        </div>
    </div>

</section>
<?php get_footer(); ?>