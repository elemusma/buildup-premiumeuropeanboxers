<?php
echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');


echo get_field('code_block');


echo '<div class="container">';

echo '<div class="row justify-content-center">';

    echo get_template_part('partials/content-block');

echo '</div>';

$gallery = get_field('gallery');
if( $gallery ):
$galleryCounter=0;
    // echo '<div class="container">';
    echo '<div class="row justify-content-center">';
foreach( $gallery as $image ):

    if($galleryCounter > 3) {
        $galleryCounter=0;
    }

    $galleryCounter++;
echo '<div class="col-lg-3 col-md-4 col-6" style="padding:5px;">';
echo '<div class="position-relative overflow-h img-hover" data-aos="fade-up" data-aos-delay="' . $galleryCounter . '00">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-inventory" style="" class="d-block">';

echo wp_get_attachment_image($image['id'], 'full','',[
    'class'=>'w-100 d-block img-gallery',
    'style'=>'height:200px;object-fit:cover;'
] );
echo '</a>';
echo '</div>';


// echo '<div class="position-absolute bg-accent" style="top:50%;left:50%;transform:translate(-50%,-50%);mix-blend-mode:multiply;width:250px;height:40px;"></div>';

// echo '<div class="position-absolute text-white" style="top:50%;left:50%;transform:translate(-50%,-50%);">';
// echo '<span style="font-size:1.5rem;" class="bold">' . $image['title'] . '</span>';
// echo '</div>';

echo '</div>';
endforeach; 
echo '</div>';
// echo '</div>';
endif;

echo '</div>';

echo '</section>';

?>