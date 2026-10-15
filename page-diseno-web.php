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
            <h1 class="website-design-h1"><span class="main-highlight">Tu Identidad Digital</span> Comienza Aquí</h1>
        </div>
    </section>


    <section class="logo-slider-section" aria-labelledby="logo-slider-title">
        <h2 class="website-design-titles"><span class="main-highlight">Tecnología diseñada</span> para escalar.</h2>

        <div class="logo-slider" role="region" aria-label="Logotipos de clientes">
            <div class="logo-slider-track">
                <ul class="logo-slider-list">
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/andimar-logo.webp" alt="Andimar" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/bagno-logo.webp" alt="Bagno" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/belen-logo.webp" alt="Belén" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/bitred-logo.webp" alt="Bitred" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/delipack-logo.webp" alt="Delipack" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/gestper-logo.webp" alt="Gestper" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/gl-logo.webp" alt="GL" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/globalprime-logo.webp" alt="Globalprime" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/kabash-logo.webp" alt="Kabash" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/klassik-car-logo.webp" alt="Klassik Car" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/lo-saldes-logo.webp" alt="Lo Saldes" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/prize-logo.webp" alt="Prize" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/punto-mascotas-logo.webp" alt="Punto Mascotas" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/tagler-logo.webp" alt="Tagler" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/yukon-logo.webp" alt="Yukon" loading="lazy" decoding="async"></li>
                </ul>

                <ul class="logo-slider-list" aria-hidden="true">
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/andimar-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/bagno-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/belen-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/bitred-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/delipack-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/gestper-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/gl-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/globalprime-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/kabash-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/klassik-car-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/lo-saldes-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/prize-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/punto-mascotas-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/tagler-logo.webp" alt="" loading="lazy" decoding="async"></li>
                    <li class="logo-slider-item"><img class="logo-slider-image" src="/wp-content/themes/tecnoinver-theme/assets/images/webp/logos/yukon-logo.webp" alt="" loading="lazy" decoding="async"></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="servicios-web">
        <h2 class="website-design-titles">Nuestros servicios de <span class="main-highlight">Desarrollo web incluyen</span></h2>

        <div id="services-web-grid">

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
