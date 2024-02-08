<?php
echo '<section class="position-relative ' . get_field('classes') . '" style="padding:50px 0px;' . get_field('style') . '">';
echo '<div class="position-absolute" style="top:-50px;" id="' . get_field('id') . '"></div>';
echo get_template_part('partials/bg-img');

echo '<div class="container">';

echo '<div class="row justify-content-center">';

    echo get_template_part('partials/content-block');

echo '</div>';

echo '<div data-aos="fade-up">';
if(have_rows('tabs_repeater')):
    $tabsRepeater = 0;
    echo '<div class="d-flex justify-content-center flex-wrap">';
while(have_rows('tabs_repeater')): the_row();
$tabsRepeater++;
$title = get_sub_field('title');
$ID = sanitize_title_with_dashes($title);
// Remove numbers from the ID
$ID = preg_replace('/\d+/', '', $ID);

if($tabsRepeater == 1) {
    echo '<span id="' . $ID . '" class="d-block btn tab-title active">' . $title . '</span>';
} else {
    echo '<span id="' . $ID . '" class="d-block btn tab-title">' . $title . '</span>';
}

endwhile;
echo '</div>';
endif;

if(have_rows('tabs_repeater')):
    $tabsRepeater = 0;
    echo '<div class="position-relative text-center">';
while(have_rows('tabs_repeater')): the_row();
$tabsRepeater++;
$title = get_sub_field('title');
$ID = sanitize_title_with_dashes($title);

// Remove numbers from the ID
$ID = preg_replace('/\d+/', '', $ID);


if($tabsRepeater == 1) {
    echo '<div class="content-area w-100 h-100 ' . $ID . ' activate position-relative" style="opacity: 1;">';
    echo get_sub_field('content');
    echo '</div>';
} else {
    echo '<div class="content-area w-100 h-100 ' . $ID . ' position-absolute" style="opacity: 0;">';
    echo get_sub_field('content');
    echo '</div>';
}

endwhile; 
echo '</div>';
endif;
echo '</div>';



echo '</div>';

echo '</section>';

wp_enqueue_script('tabs-js', get_theme_file_uri('/js/tabs.js'));

?>