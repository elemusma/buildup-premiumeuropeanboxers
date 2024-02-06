<?php
echo '<!DOCTYPE html>';
echo '<html ';
language_attributes();
echo '>';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

if(get_field('header', 'options')) { the_field('header', 'options'); }
if(get_field('header_code')) { the_field('header_code'); }

if(get_field('custom_css')) { 

echo '<style>';

the_field('custom_css');

echo '</style>';

}
wp_head(); 

echo '</head>';
echo '<body '; 
body_class(); 
echo '>';

if(get_field('body','options')) { the_field('body','options'); }
if(get_field('body_code')) { the_field('body_code'); }
echo '<div class="blank-space"></div>';
echo '<header class="position-relative z-3 box-shadow bg-white w-100" style="top:0;left:0;padding:15px 0px;">';

echo '<div class="nav">';
echo '<div class="container-fluid">';
echo '<div class="row align-items-center">';

echo '<div class="col-lg-1 col-6">';

echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",[
    'class'=>'h-auto',
    'style'=>'max-width:100%;transition:all 1s ease-in-out;',
    'id'=>'logo-main'
]); 
}

echo '</a>';

echo '<div class="desktop-hidden">';
echo '<a id="navToggle" class="nav-toggle">';
echo '<div>';
echo '<div class="line-1 bg-accent"></div>';
echo '<div class="line-2 bg-accent"></div>';
echo '<div class="line-3 bg-accent"></div>';
echo '</div>';
echo '</a>';
echo '</div>';

echo '</div>';

echo '<div class="col-5 text-center mobile-hidden">';
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu d-flex justify-content-end list-unstyled mb-0'
    )); 
echo '</div>';

echo '<div class="col-lg-3 col-6 text-center" style="padding-right: 0;">';

echo '<div style="padding-bottom:5px;">';
echo '<a class="text-black h2" style="text-decoration:none;font-size:1rem;" href="tel:+1' . do_shortcode('[phone_number]') . '">' . do_shortcode('[phone_number]') . '</a>';
echo '</div>';

echo '<div style="" class="">';
echo do_shortcode('[button href="#" class="box-shadow" style="font-size:0.75rem;"]What\'s My Home Worth?<br>GET A FREE REPORT HERE![/button]');
echo '</div>';

echo '<div style="padding-top:5px;">';
echo do_shortcode('[social_icons style="justify-content:center;"]');
echo '</div>';

// echo get_template_part('partials/si');

echo '</div>';

echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-white desktop-hidden" id="navItems">';

echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close h2 text-gray" style="float:right;">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}

echo '</a>';
echo '</div>';
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled mb-0'
)); 
echo '</div>'; // end of col for navigation



echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

// echo '<section class="hero position-relative">';

// if(!is_front_page()) {
// echo '<div class="container pt-5 pb-5 text-white text-center">';
// echo '<div class="row">';
// echo '<div class="col-md-12">';
// if(is_page() || !is_front_page()){
// echo '<h1 class="">' . get_the_title() . '</h1>';
// } elseif(is_single()){
// echo '<h1 class="">' . single_post_title() . '</h1>';
// } elseif(is_author()){
// echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
// } elseif(is_tag()){
// echo '<h1 class="">' . get_single_tag_title() . '</h1>';
// } elseif(is_category()){
// echo '<h1 class="">' . get_single_cat_title() . '</h1>';
// } elseif(is_archive()){
// echo '<h1 class="">' . get_archive_title() . '</h1>';
// }
// elseif(!is_front_page() && is_home()){
// echo '<h1 class="">' . get_the_title(133) . '</h1>';
// }
// echo '</div>';
// echo '</div>';
// echo '</div>';
// }

// echo '</section>';
?>