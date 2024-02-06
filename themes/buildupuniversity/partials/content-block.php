<?php

echo '<div class="col-lg-9 text-center pb-4 ' . get_field('column_classes') . '" style="' . get_field('column_style') . '">';
    echo '<div data-aos="' . get_field('content_data_aos_animation') . '">';
        echo get_field('content');
    echo '</div>';
echo '</div>';

?>