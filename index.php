<!DOCTYPE html>
<html lang="es">
<head>
<?php require_once 'head_cfg.php'; ?>
</head>
<body class="box-body">
<nav class="box-navbar box-navbar-transparent" data-uk-sticky="{media: 767, target: true, top: -500, animation: &quot;uk-animation-slide-top&quot;}">
    <div class="uk-container uk-container-center">
        <div class="uk-navbar-flip">
            <ul class="uk-navbar-nav uk-hidden-small">
                <li class="index.php"><a href="#top" data-uk-smooth-scroll="">Inicio</a></li>
                <li class=""><a href="#quienes_somos" data-uk-smooth-scroll="">¿Quiénes somos?</a></li>
                <li class=""><a href="#que_ofrecemos" data-uk-smooth-scroll="">¿Qué ofrecemos?</a></li>
                <li class=""><a href="#mercados" data-uk-smooth-scroll="">¿Qué mercados atendemos?</a></li>            
            </ul>
        </div>
        <a href="#menuoffcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas ></a>
    </div>
</nav>

<section class="section_1">
  <aside class="box-block box-block-teaser box-contrast uk-height-viewport uk-flex uk-flex-center uk-flex-middle">
      <h1 class="box-heading-xlarge uk-margin-small-bottom">Fuerza neta</h1>
  </aside>
</section>

<section class="box-block box-block-light" id="quienes_somos">
  <div class="uk-container uk-container-center">
    <section class="uk-grid" data-uk-grid-match="{ target: '> div > .uk-panel' }" data-uk-grid-margin>
      <div class="uk-width-medium-1-1">
        <div class="uk-panel">
          <div class="box-container-medium uk-text-center">            
            <h1 class="uk-heading-large uk-margin-large-top">¿Quiénes somos?</h1>
            <h2 class="uk-text-muted box-margin-xlarge-bottom uk-text-justify uk-margin-large-top">
            Fuerza Neta es una idea a la que le apostamos un equipo multi-disciplinario de jóvenes javerianos, impulsados por la preocupación frente a la situación del medio ambiente en la actualidad. La propuesta nació en el aula de clase, impulsada por el proyecto universitario en el que los 4 emprendedores nos reunimos. Además de cumplir con los requerimientos de la materia, nos propusimos aportar al crecimiento de la producción y prestación de servicios sostenibles, tanto para cumplir con nuestra ambición de mejorar el planeta donde vivimos como para cumplir con nuestra responsabilidad social como empresa y ¿que mejor forma de hacerlo que con la ayuda de nuestros clientes.
            </h2>            
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<section class="box-block box-block-dark" id="que_ofrecemos">
  <div class="uk-container uk-container-center">
    <section class="uk-grid" data-uk-grid-match="{ target: '> div > .uk-panel' }" data-uk-grid-margin>
      <div class="uk-width-medium-1-1">
        <div class="uk-panel">
          <div class="box-container-medium uk-text-center">            
            <h1 class="uk-heading-large uk-margin-large-top">¿Qué ofrecemos?</h1>
            <h2 class="uk-text-muted box-margin-xlarge-bottom uk-text-justify uk-margin-large-top">
            Como empresa prestadora de servicios de salud y de acondicionamiento físico, ofrecemos a nuestros clientes la posibilidad de alcanzar las metas que se propongan a nivel físico y mental y a la vez aportar al cuidado del medio ambiente, con el acompañamiento de expertos en cada área que compone un entrenamiento integral. <br><br>
            Como característica principal y valor agregado, la totalidad de Fuerza Neta funciona a partir de energía solar e hidráulica. El gimnasio que cuenta con asesores especializados en nutrición, deportologia y fisioterapia utiliza la energía cinetica producida por los deportistas y la recibida por el sol para asegurar un 0% de emisiones y reducir costos y por ende precios, para que más usuarios puedan acceder a nuestros servicios. La energía sobrante de cada mes, es donada por Fuerza Neta a comunidades menos favorecidas que pueden hacer un uso provechoso de la misma.
            </h2>            
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<section class="box-block box-block-light" id="mercados">
  <div class="uk-container uk-container-center">
    <section class="uk-grid" data-uk-grid-match="{ target: '> div > .uk-panel' }" data-uk-grid-margin>
      <div class="uk-width-medium-1-1">
        <div class="uk-panel">
          <div class="box-container-medium uk-text-center">            
            <h1 class="uk-heading-large uk-margin-large-top">¿Qué mercados atendemos?</h1>
            <h2 class="uk-text-muted box-margin-xlarge-bottom uk-text-justify uk-margin-large-top">
              En la etapa incial del proyecto, Fuerza Neta está direccionada a prestar servicios en Bogotá, principalmente en sectores de estratos 3 y 4, en los que sus habitantes pueden sacar mayor provecho del bajo precio en la suscripción a nuestros servicios. En las etapas siguientes, contando con una recepción positiva en cuanto a la calidad de nuestro servicio y la importancia de nuestro objetivo, el ideal es extender la cobertura a todos los estratos y a otras regiones del país y eventualmente extender el proyecto al mercado internacional.            </h2>            
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<div id="menuoffcanvas" class="uk-offcanvas">
  <div class="uk-offcanvas-bar" >
    <ul class="uk-nav uk-nav-side uk-nav-offcanvas">
      <li class="index.php"><a href="#top" data-uk-smooth-scroll="">Inicio</a></li>
      <li class=""><a href="#quienes_somos" data-uk-smooth-scroll="">¿Quiénes somos?</a></li>
      <li class=""><a href="#que_ofrecemos" data-uk-smooth-scroll="">¿Qué ofrecemos?</a></li>
      <li class=""><a href="#mercados" data-uk-smooth-scroll="">¿Qué mercados atendemos?</a></li>
    </ul>
  </div>
</div>

</body>
</html>