<?php

// start of testimonials
echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:100px 0;' . get_field('style') . '">';
echo '<div class="position-absolute" style="top:-100px;" id="' . get_field('id') . '"></div>';
echo get_template_part('partials/bg-img');

echo get_field('code_block');

echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo get_template_part('partials/content-block');

// start of repeater

if(have_rows('testimonials')): 
// echo '<div style="padding:50px 0px;">';
echo '<div class="testimonial-carousel owl-carousel owl-theme arrows-middle" style="padding-top:50px;">';
$counterTestimonials = 0; 
while(have_rows('testimonials')): the_row(); $counterTestimonials++;

echo '<div class="col col-reviews text-white h-100" style="" data-aos="fade-up" data-aos-delay="' . $counterTestimonials . '00">';

echo '<div class="row h-100" style="background:#393939;border-radius:4px;padding:25px;">';

echo '<div class="col-12">';

echo '<div class="position-relative" style="">';

echo '<img src="https://buildupuniversity.com/wp-content/uploads/2024/02/Google-Icon.png" alt="" class="position-absolute" style="width:25px;height:25px;object-fit:contain;right:0;top:0px;">';

echo '<div class="row align-items-center position-relative">';


echo '<div class="col-3" style="padding-left:0px;">';

$headshot = get_sub_field('headshot'); 
echo wp_get_attachment_image($headshot['id'],'full','',[
    'class'=>'img-testimonial',
	'style'=>'height:50px;width:50px;object-fit:contain;border-radius:50%;'
]);

echo '</div>'; // end of col-3

echo '<div class="col-9" style="padding-left:0px;">';

echo '<span class="name text-uppercase">' . get_sub_field('name') . '</span><br>';

echo '<img src="https://buildupuniversity.com/wp-content/uploads/2024/02/Google-Star-Reviews.png" alt="" class="" style="width:75px;height:25px;object-fit:contain;">';

echo '</div>'; // end of col-9
echo '</div>'; // end of row

echo '<small>' . get_sub_field('content') . '</small>';


echo '</div>'; // end of position-relative

echo '</div>';
echo '</div>';

echo '</div>';
endwhile; 
echo '</div>';
// echo '</div>';
endif;
// end of repeater

echo '</div>';
echo '</div>';
echo '</section>';
// end of testimonials

?>