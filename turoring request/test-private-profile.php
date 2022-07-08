<?php
/*
Template Name:test-private-profile
*/



get_header();
?>

<div class="col-sm-12 details">
    <div class="row">

        <p class="paragraph"><br>
            Field of study :<br>
            Level : College Year 2<br>
            Max Budget :<?php echo the_field('budget'); ?><br>
            Country : <?php echo the_field('location'); ?></p>

        <h2 class="headings"><?php the_title();?></h2>
        <p class="paragraph">Posted on :<?php echo the_field('preferred_time_slot'); ?></p>
    </div>


</div>
<div class="main">
    <div class="card1">
        <h2 class="headings">Tutoring Need</h2>
        <p class="paragraph"><?php echo the_field('description'); ?></p>
    </div>
    <!-- Portfolio Gallery Grid -->
    <div class="card1">
    <h2 class="headings">Expectation</h2>
    <p class="paragraph"><?php echo the_field('expectations'); ?></p>
    <p class="paragraph">Posted on :<?php echo the_field('preferred_time_slot'); ?></p>
    </div>
    <div class="card1">
    <h2 class="headings">Document</h2>
    <input type="file" id="myFile" name="filename">
    </div>
</div>
<?php

get_footer();
?>