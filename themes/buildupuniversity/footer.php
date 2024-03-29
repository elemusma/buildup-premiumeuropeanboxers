<?php
echo '<footer class="pt-5">';

echo '<section class="" style="background:#111111;padding-top:150px;">';
echo '<div class="container">';

echo '<div class="row justify-content-center">';

echo '<div class="col-lg-4 col-md-5 col-12 order-2 text-white order-md-2">';

echo '<div class="h-100 d-flex">';
echo '<div>';

echo '<p>CONTACT</p>';

echo '<div class="d-flex">';
echo '<div class="text-accent">A:</div>';
echo '<p class="" style="margin:0px 0px 0px 15px;">' . get_field('address','options') . '</p>';
echo '</div>';

echo '<div class="d-flex" style="padding-top:25px;">';
echo '<div class="text-accent">T:</div>';
echo '<p style="margin:0px 0px 0px 15px;"><a href="tel:+1' . get_field('phone','options') . '" class="">' . get_field('phone','options') . '</a></p>';
echo '</div>';

echo '<a href="https://buildupuniversity.com/" target="_blank" rel="noopener noreferrer" class="d-block position-md-absolute" style="bottom:25px;padding-top:45px;">';
echo '<img src="https://buildupuniversity.com/wp-content/uploads/2024/02/backlink.png" style="width:150px;" class="h-auto" alt="">';
// echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/06/created-by-inside-out-creative-black.png" style="width:150px;" class="h-auto ml-2" alt="">';
echo '</a>';

echo '</div>';
echo '</div>';

echo '</div>'; // end of col

echo '<div class="col-lg-4 col-md-8 col-12 order-md-1 order-lg-2" style="padding-top:150px;">';
// echo '<div class="position-absolute bg-black w-100" style="top:-30px;left:0;height:30px;"></div>';
echo '<div class="position-absolute bg-black w-100 h-100" style="mix-blend-mode:multiply;top:0;left:0;"></div>';

echo '<div class="position-relative text-center">';

echo '<a href="' . home_url() . '" class="d-block position-absolute w-100" style="z-index:1;top:-70%;left:50%;transform:translate(-50%, -50%);">';

$logo = get_field('logo','options'); 
$logoFooter = get_field('logo_footer','options'); 

if($logoFooter){
    echo wp_get_attachment_image($logoFooter['id'],'full',"",[
        'class'=>'h-auto position-relative'
    ]); 
} elseif($logo) {
    echo wp_get_attachment_image($logo['id'],'full',"",[
        'class'=>'h-auto',
        'style'=>'width: 300px;'
    ]);
}

echo '</a>';

        echo '<p class="text-white">USEFUL LINK</p>';
        wp_nav_menu(array(
                'menu' => 'footer',
                'menu_class'=>'menu list-unstyled text-white text-uppercase mb-0'
        ));
echo '</div>';

echo '</div>';

echo '<div class="col-lg-1 order-lg-3 order-md-4 order-4"></div>';

echo '<div class="col-lg-3 col-md-5 col-12 order-lg-4 order-md-3 order-3" style="padding-bottom:0 !important;">';

// echo '<div class="h-100 d-flex">';
// echo '<div>';

echo get_template_part('partials/si');

// echo '<div class="pt-4">';
echo '<p class="text-white">ENQUIRE</p>';
echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]');
// echo '</div>';

echo '<div class="text-white position-relative">';
the_field('website_message','options');
echo '</div>';


// echo '</div>';
// echo '</div>';

echo '</div>'; // end of col


echo '</div>';

echo '</div>';
echo '</section>';


echo '</footer>';

if(get_field('footer', 'options')) { the_field('footer', 'options'); }
if(get_field('footer_code')) { the_field('footer_code'); }

wp_footer();

echo '</body>';
echo '</html>';
?>