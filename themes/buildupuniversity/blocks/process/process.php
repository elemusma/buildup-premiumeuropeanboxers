<?php
echo '<section class="' . get_field('classes') . '" style="padding:50px 0px;' . get_field('style') . '">';
echo '<div class="position-absolute" style="top:-100px;" id="' . get_field('id') . '"></div>';
echo '<div class="container-fluid">';
echo '<div class="row justify-content-center">';

echo '<div class="col-12 text-center" style="padding-bottom:100px;">';
echo '<h2 class="text-white">' . get_field('title_top') . '</h2>';
echo '</div>';

if(have_rows('process_repeater')): 
$columnsRepeater = 0;
while(have_rows('process_repeater')): the_row();
$columnsRepeater++;

echo '<div class="col-lg-4 col-md-10 col-11 text-white col-services" style="text-decoration:none;">';

if($columnsRepeater == 2) {
    echo '<div class="position-absolute" style="background:#b7b7b7;height:110%;width:1px;right:0px;bottom:0px;"></div>'; // vertical right
    echo '<div class="position-absolute" style="background:#b7b7b7;height:115%;width:1px;left:0px;bottom:0px;"></div>'; // vertical left

    // echo '<div class="position-absolute" style="background:#b7b7b7;height:1px;width:50%;right:0px;top:-10%;"></div>';

    echo '<div class="position-absolute" style="background:#b7b7b7;height:1px;width:150%;right:0px;top:-10%;"></div>'; // horizontal lower
    echo '<div class="position-absolute" style="background:#b7b7b7;height:1px;width:150%;left:0px;top:-15%;"></div>'; // horizontal higher
}

echo '<div class="position-relative pl-5 pr-5 h-100 col-services-hover" style="padding-top:75px;padding-bottom:75px;">';

echo '<div class="hover-box bg-accent-secondary position-absolute w-100 h-100 z-1 d-flex align-items-center justify-content-center pl-5 pr-5 col-services-hover-content" style="border:6px solid #ff5223;top:0;left:0;transition:all .25s ease-in-out;">';
echo '<div>';

echo get_sub_field('content');

echo '</div>';
echo '</div>';

echo '<div class="position-absolute w-100 h-100 bg-accent-quaternary" style="top:0;left:0;mix-blend-mode:overlay;opacity:.28;border:2px solid var(--accent-primary);"></div>';

echo '<div class="position-relative pb-3 h-100">';
echo '<span class="h1 mb-5 d-block coromant-garamond" style="font-size:50px;margin-bottom:1.5rem;">Step ' . $columnsRepeater . '</span>';

echo '<span class="mb-5 d-block coromant-garamond pl-5 h4" style="margin-bottom:1.5rem;padding-left:1.5rem;">' . get_sub_field('title') . '</span>';

echo '<div class="d-flex align-items-end">';

echo '<div style="height: 35px;
width: 35px;
border: 1px solid var(--accent-primary);
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
margin-right: 15px;">';

echo '<span class="plus-sign">+</span>';
echo '</div>';
echo '<div class="position-relative">';
echo '<h6 class="font-italic" style="margin-bottom:.5rem;">More Information</h6>';
echo '<div class="" style="border-bottom:8px solid var(--accent-primary);width:75px;bottom:-15px;left:0;"></div>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
endwhile; 
endif;

echo '<div class="col-12 text-center" style="padding-top:50px;">';
echo '<h3 class="text-black" style="letter-spacing:.2em;">' . get_field('title_bottom') . '</h3>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

?>