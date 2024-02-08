<?php
echo '<section class="position-relative image-block ' . get_field('classes') . '" style="' . get_field('style') . '">';
echo '<div class="position-absolute" style="top:-50px;" id="' . get_field('id') . '"></div>';
echo get_field('code_block');

echo '<div class="' . get_field('image_class') . '" style="' . get_field('image_style') . '">';
echo '<div data-aos="fade-up">';
$image = get_field('image');

echo wp_get_attachment_image($image['id'],'full','',[
    'class'=>'w-100 h-auto d-block',
    'style'=>''
]);

echo '</div>';
echo '</div>';

echo '</section>';

?>