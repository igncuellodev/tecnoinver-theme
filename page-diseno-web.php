<?php

get_header();

$css_file = get_stylesheet_directory() . '/assets/css/diseno-web.css';
$js_file  = get_stylesheet_directory() . '/assets/js/diseno-web.js';

?>

<link
    rel="stylesheet"
    href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/diseno-web.css?v=<?php echo filemtime($css_file); ?>"
>


<main class="web-design">
    <section class="web-design-hero">
        <div class="web-design-hero-content">


        </div>
    </section>

    <section class="website-types-section">
    <h2 class="website-design-titles"><span class="main-highlight">Desarrollos a medida</span> que reflejan tu esencia y <span class="main-highlight">conectan con tu audiencia</span></h2>
    <div id="cards-container">
    
    </div>
    </section>

</main>






<?php if (file_exists($js_file)) : ?>
    <script
        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/js/diseno-web.js'); ?>?v=<?php echo filemtime($js_file); ?>"
    ></script>
<?php endif; ?>

<?php get_footer() ?>
