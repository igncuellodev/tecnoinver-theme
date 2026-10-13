<?php

get_header();

$css_file = get_stylesheet_directory() . '/assets/css/diseno-web.css';

?>

<link
    rel="stylesheet"
    href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/diseno-web.css?v=<?php echo filemtime($css_file); ?>"
>


<h1 class="hola-title">Hola</h1>







<?php get_footer() ?>
