<?php 
/* Template Name: Contact Page Template */ 
get_header(); 

$introductionSnippet = get_field('introduction_snippet');
$introductionHeading = get_field('introduction_heading');
$introductionContent = get_field('introduction_content');
$image = get_field('image');
$imageUrl = $image['url'];
$snippet = get_field('snippet');
$heading = get_field('heading');
$content = get_field('content');
$statement_block_heading = get_field('statement_block_heading');
$statement_block_content = get_field('statement_block_content'); 
$people = get_field('people');
$people_snippet = $people['snippet'];
$people_heading = $people['heading'];
?>

<main role="main">

<section class="introduction">
    <div class="l-container">
        <span class="tagline"><?= $introductionSnippet?></span>
        <h2><?= $introductionHeading?></h2>
        <div class="introduction-content">
            <?= $introductionContent?>
        </div>
    </div>
</section>

<section class="locations">
    <div class="l-container">

    <?php

// Check rows exists.
if( have_rows('locations') ):

    // Loop through rows.
    while( have_rows('locations') ) : the_row();

        // Load sub field value.
        $map_image = get_sub_field('map_image');
        $map_imageUrl = $map_image['url'];
        $map_imageAlt = $map_image['alt'];
        $location_type = get_sub_field('location_type');
        $location_name = get_sub_field('location_name');
        $address = get_sub_field('address');
        $telephone_number = get_sub_field('telephone_number');
        $emailAddress = get_sub_field('email_address');
        ?>
           <div class="individualLocation">
            <div class="individualLocation-map"><img src="<?= $map_imageUrl?>" alt="<?= $map_imageAlt?>" /></div>
            <div class="individualLocation-contact_details">
                <span class="tagline"><?= $location_type?></span>
                <h2><?=$location_name?></h2>
                <?= $address?>
                T: <a href="tel:<?= $telephone_number?>"><?= $telephone_number?></a><br />
                E: <a href="tel:<?= $emailAddress?>"><?= $emailAddress?></a>
            </div>
        </div>

    <?php
    endwhile;


else :
  
endif;?>


        
    </div>

</section>

<section class="enquiryForm">
    <div class="l-container">
        <h2>WANT TO KNOW MORE?</h2>
        <p>Please enter your details and a description of your enquiry below and we will be in touch as soon as possible. Thank you for your enquiry.</p>
		<?php echo do_shortcode('[ninja_form id="1"]');?>		
	</div>
</section>

</main>



<?php get_footer(); ?>
