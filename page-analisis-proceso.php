<?php

get_header();

$css_file = get_stylesheet_directory() . '/assets/css/analisis-proceso.css';

?>

<link
    rel="stylesheet"
    href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/analisis-proceso.css?v=<?php echo filemtime($css_file); ?>"
>

    <main class="content-wrapper">
        <section class="content-analisis-proceso">
            <div class="upper-analisis">
                <div class="analisis-intro">
                    <h1 class="title-analisis">Nuestro proceso de <br> <span class="highlight-title">Análisis de vulnerabilidades</span></h1>
                    <p class="tecno-main-text">
                        Con VRX analizamos tu infraestructura, identificamos los riesgos y te entregamos un plan de acción para que sepas qué priorizar.
                    </p>         
                </div><!--Analisis intro ending-->

                <div class="analisis-intro-card">
                    <img class="escudo" src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/shield-ilustration.svg")) ?>" alt="Ilustración de escudo" height="121" width="83">
                    <p class="tecno-main-text">VRX analiza tu infraestructura para entregarte una visión clara de las vulnerabilidades y ayudarte a reducir los riesgos.</p>

                    
                </div><!--Analisis intro card ending-->

            </div><!--Upper analisis ending-->

            <div class="analisis-grid">
                <article class="analisis-card">
                    <div class="card-content-wrapper">
                    <span class="analisis-card-icon">
                        <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/servidor.svg")) ?>" alt="Ícono de servidor" height="32" width="32">
                    </span>

                    <h2 class="analisis-card-title">Acceso al servidor</h2>
                    <p class="tecno-main-text">Accedemos de forma controlada al servidor para realizar el análisis, enfocado en revisar el sistema operativo y sus componentes.</p>

                    </div> <!-- Card content wrapper ending -->
                

                    <div class="number-wrapper">
                          <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/01.svg")) ?>" alt="Ícono de servidor" height="104.04" width="78.44">
                    </div>

                </article><!--Card 1-->

                <article class="analisis-card">
                    <div class="card-content-wrapper">
                    <span class="analisis-card-icon">
                        <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/instalacion.svg")) ?>" alt="Ícono de servidor" height="32" width="32">
                    </span>

                    <h2 class="analisis-card-title">Instalación de VRX</h2>
                    <p class="tecno-main-text">Instalamos un agente liviano en el servidor para recopilar de forma segura la información necesaria para realizar la evaluación.</p>

                    </div> <!-- Card content wrapper ending -->
                

                    <div class="number-wrapper">
                          <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/02.svg")) ?>" alt="Ícono de servidor" height="137.55" width="84.99">
                    </div>

                </article><!-- Card 2 -->

                <article class="analisis-card">
                    <div class="card-content-wrapper">
                    <span class="analisis-card-icon">
                        <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/deteccion.svg")) ?>" alt="Ícono de servidor" height="32" width="32">
                    </span>

                    <h2 class="analisis-card-title">Análisis y detección</h2>
                    <p class="tecno-main-text">Durante las 12 horas, VRX recopila y analiza la información del servidor para detectar vulnerabilidades y componentes afectados.</p>

                    </div> <!-- Card content wrapper ending -->
                

                    <div class="number-wrapper">
                          <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/03.svg")) ?>" alt="Ícono de servidor" height="137.55" width="86.65">
                    </div>

                </article><!-- Card 3-->


                <article class="horizontal-card">
                     <div class="card-content-wrapper-horizontal">
                    <span class="analisis-card-icon">
                        <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/evaluacion.svg")) ?>" alt="Ícono de servidor" height="32" width="32">
                    </span>

                    <h2 class="analisis-card-title">Evaluación y priorización</h2>
                    <p class="tecno-main-text">Procesamos los resultados y priorizamos las vulnerabilidades según su nivel de riesgo.</p>

                    </div> <!-- Card content wrapper ending -->
                

                    <div class="number-wrapper">
                          <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/04.svg")) ?>" alt="Ícono de servidor" height="58.8" width="100">
                    </div>


                </article><!-- 3 span card 1-->


                <article class="horizontal-card">
                     <div class="card-content-wrapper-horizontal">
                    <span class="analisis-card-icon">
                        <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/informe.svg")) ?>" alt="Ícono de servidor" height="32" width="32">
                    </span>

                    <h2 class="analisis-card-title">Entrega de informe</h2>
                    <p class="tecno-main-text">Entregamos un informe con los hallazgos, riesgos y acciones recomendadas prioritarias.</p>

                    </div> <!-- Card content wrapper ending -->
                

                    <div class="number-wrapper">
                          <img src="<?php echo esc_url(get_theme_file_uri("assets/images/svg/05.svg")) ?>" alt="Ícono de servidor" height="58.8" width="100">
                    </div>


                </article><!-- 3 span card 2-->

            </div> <!--Bottom Analisis ending-->
        </section>

        <section class="informe-start">
            <h2 class="informe-section-title">
                Nuestro informe incluye...
            </h2>
            <img class="informe-decoration" src="<?php echo esc_url(get_theme_file_uri("assets/images/webp/decoration.webp")) ?>" alt="" loading="lazy">
            <div class="white-overlay"></div>
        </section>


        <section class="informe-props">
            <div class="props-grid">
                <article class="prop">
                    <p class="prop-text">Total de CVE detectadas</p>
                </article>

                 <article class="prop">
                    <p class="prop-text">Promedio de CVSS</p>
                </article>

                 <article class="prop">
                    <p class="prop-text">Puntuación de riesgo</p>
                </article>

                 <article class="prop">
                    <p class="prop-text">Vulnerabilidades críticas, altas, medias y bajas</p>
                </article>
                 <article class="prop">
                    <p class="prop-text">Detalle de CVE y componentes afectados</p>
                </article>
                 <article class="prop">
                    <p class="prop-text">Plan de acción priorizado</p>
                </article>

            </div>
        </section>


    </main>


<?php get_footer() ?>