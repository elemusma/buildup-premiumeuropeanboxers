<?php
echo '<section class="' . get_field('classes') . '" style="' . get_field('style') . '">';
echo '<div class="position-absolute" style="top:-100px;" id="' . get_field('id') . '"></div>';
echo '<div class="container-fluid">';
echo '<div class="row">';

if(have_rows('columns_repeater')): 
$columnsRepeater = 0;
while(have_rows('columns_repeater')): the_row();
$columnsRepeater++;
echo '<div class="' . get_sub_field('column_classes') . '" data-aos="fade-up" data-aos-delay="' . $columnsRepeater . '00" style="padding:0;">';
echo '<div class="bg-accent-secondary text-white text-center">';
echo '<h3 class="" style="' . get_sub_field('column_style') . 'margin:0;padding: 15px 0px;font-style:italic;text-decoration:underline;">' . get_sub_field('title') . '</h3>';
echo '</div>';
echo '<div class="overflow-h" style="height: 250px;">';

$img = get_sub_field('image');
echo wp_get_attachment_image($img['id'],'full','',[
    'class'=>'w-100 img-intro img-hover',
    'style'=>'height:250px;object-fit:cover;'
]);

echo '</div>';
echo '</div>';
endwhile; 
endif;



echo '</div>';
echo '</div>';
echo '</section>';

?>