<?php
echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:100px 0;' . get_field('style') . '">';
echo '<div class="position-absolute" style="top:-50px;" id="' . get_field('id') . '"></div>';

echo get_template_part('partials/bg-img');

echo get_field('code_block');

echo '<div class="container">';

echo '<div class="row justify-content-center">';

    echo get_template_part('partials/content-block');

echo '</div>';

echo '</div>';

echo '</section>';

?>