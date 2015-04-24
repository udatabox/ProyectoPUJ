<!DOCTYPE html>
<html lang="es">
<head>
<?php require_once 'head_cfg.php'; ?>
<style>
  
/*
 * Nav
 */

.fuerza-neta-nav > li > a { color: #777; }

/* Hover */
.fuerza-neta-nav > li > a:hover,
.fuerza-neta-nav > li > a:focus,
.fuerza-neta-nav > li.uk-active > a  {
    background: #7ad239;
    color: #FFF;
}

/* Sub-object: `nav-header` */
.fuerza-neta-nav .uk-nav-header {
    color: #222;
    font-weight: normal;
}

#quienes_somos{
  padding: 20vh 10vw;
}

#mercados{
  padding: 25vh 10vw;
}
#que_ofrecemos h1{
  color: rgba(255, 255, 255, 0.8);
}
#que_ofrecemos{
  padding: 11vh 10vw;
}
</style>
</head>
<body class="box-body">
<nav class="box-navbar box-navbar-transparent" data-uk-sticky="{media: 767, target: true, top: -500, animation: &quot;uk-animation-slide-top&quot;}">
    <aside class="uk-container uk-container-center">
        <aside class="uk-navbar-flip">
            <ul class="uk-navbar-nav uk-hidden-small">
                <li class="index.php"><a href="#top" data-uk-smooth-scroll><i class="uk-icon-home uk-icon-small"></i></a></li>
                <li class=""><a href="#quienes_somos" data-uk-smooth-scroll>¿Quiénes somos?</a></li>
                <li class=""><a href="planeacion.php" >Planeación</a></li>          
            </ul>
        </aside>
        <a href="#menuoffcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas ></a>
    </aside>
</nav>

<section class="section_1">
  <aside class="box-block box-block-teaser box-contrast uk-height-viewport uk-flex uk-flex-center uk-flex-middle">
      <aside class="uk-text-center" style="margin-top: 50vh">
        <h1 class="box-heading-xlarge uk-margin-small-botton" style="color: #7ad239;">¡MÁS FUERZA, MÁS VIDA!</h1>
        <br>
        <p class="uk-text-center">
          Somos <span style="color: #7ad239;font-weight:bold;">FUERZA NETA</span> queremos que te sientas bien, estes bien y transmitas bienestar. 
          <br>
          En nuestras instalaciones no solo te fortaleces en salud y recargas energias, tambien recargas la vida de otros de energia.
        </p>
        <p class="uk-text-center">
          <span style="color: #7ad239;font-weight:bold;">¡30 DIAS DE PRUEBA GRATIS! </span><br>
          Carrera 7 con Calle #45-35, Bogota, Colombia. <br>
          <i class="uk-icon-envelope" style="color: #7ad239;"></i> info@fuerzaneta.com <br>
          <i class="uk-icon-phone-square"  style="color: #7ad239;"></i> 123-456-7890 Fax: 123-456-7890
        </p>
      </aside>
  </aside>
</section>

<section class="box-block box-block-teaser2" id="quienes_somos" >
  <aside class="uk-container uk-container-center">
    <section class="uk-grid" data-uk-grid-match="{ target: '> aside > .uk-panel' }" data-uk-grid-margin>
      <aside class="uk-width-medium-1-1">
        <aside class="uk-panel">
          <aside class="box-container-medium"> 

            <aside class="uk-grid">
              


              <aside class="uk-width-3-10">
                
                <ul class="fuerza-neta-nav uk-nav nosotros" data-uk-nav data-uk-switcher="{connect:'#contenido_index'}">
                  <li><a href="uk-active">¿Quienes somos?</a></li>
                  <li><a href="">¿Qué ofrecemos?</a></li>
                  <li><a href="">¿Qué mercados atendemos?</a></li>
                </ul>

              </aside>
              <aside class="uk-width-1-10">
                &nbsp;
              </aside>
              <aside class="uk-width-6-10">
                <ul id="contenido_index" class="uk-switcher">
                  
                <li class="uk-active">
                  <h1 class="uk-heading-large uk-text-center box-margin-xlarge-bottom" style="margin-top: -5px;"  data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:400}">¿Quiénes somos?</h1>            
                  <aside class="contenido_bg_blanco"  data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:400}">
                    <p class="box-margin-xlarge-bottom uk-text-justify uk-margin-xlarge-top">
                      <span style="color: #7ad239;font-weight:bold;text-shadow:0 1px 2px rgba(65,65,65, 0.9);">FUERZA NETA</span> es una idea a la que le apostamos un equipo multi-disciplinario de jóvenes javerianos, impulsados por la preocupación frente a la situación del medio ambiente en la actualidad. La propuesta nació en el aula de clase, impulsada por el proyecto universitario en el que los 4 emprendedores nos reunimos. Además de cumplir con los requerimientos de la materia, nos propusimos aportar al crecimiento de la producción y prestación de servicios sostenibles, tanto para cumplir con nuestra ambición de mejorar el planeta donde vivimos como para cumplir con nuestra responsabilidad social como empresa y ¿que mejor forma de hacerlo que con la ayuda de nuestros clientes.
                    </p>
                  </aside> 
                </li>

                <li>
                  <h1 class="uk-heading-large uk-text-center box-margin-xlarge-bottom uk-animation-slide-right" style="margin-top: -5px;" >¿Qué ofrecemos?</h1>            
                  <aside class="contenido_bg_blanco uk-animation-slide-right">
                    <p class="box-margin-xlarge-bottom uk-text-justify uk-margin-xlarge-top">
                      Como empresa prestadora de servicios de salud y de acondicionamiento físico, ofrecemos a nuestros clientes la posibilidad de alcanzar las metas que se propongan a nivel físico y mental y a la vez aportar al cuidado del medio ambiente, con el acompañamiento de expertos en cada área que compone un entrenamiento integral.
                      Como característica principal y valor agregado, la totalidad de <span style="color: #7ad239;font-weight:bold;text-shadow:0 1px 2px rgba(65,65,65, 0.9);">FUERZA NETA</span> funciona a partir de energía solar e hidráulica. El gimnasio que cuenta con asesores especializados en nutrición, deportologia y fisioterapia utiliza la energía cinetica producida por los deportistas y la recibida por el sol para asegurar un 0% de emisiones y reducir costos y por ende precios, para que más usuarios puedan acceder a nuestros servicios. La energía sobrante de cada mes, es donada por <span style="color: #7ad239;font-weight:bold;text-shadow:0 1px 2px rgba(65,65,65, 0.9);">FUERZA NETA</span> a comunidades menos favorecidas que pueden hacer un uso provechoso de la misma.
                    </p>
                  </aside> 
                </li>

                <li>
                  <h1 class="uk-heading-large uk-text-center box-margin-xlarge-bottom uk-animation-slide-right" style="margin-top: -5px;" >¿Qué mercados atendemos?</h1>            
                  <aside class="contenido_bg_blanco uk-animation-slide-right">
                    <p class="box-margin-xlarge-bottom uk-text-justify uk-margin-xlarge-top">
                      En la etapa incial del proyecto, <span style="color: #7ad239;font-weight:bold;text-shadow:0 1px 2px rgba(65,65,65, 0.9);">FUERZA NETA</span> está direccionada a prestar servicios en Bogotá, principalmente en sectores de estratos 3 y 4, en los que sus habitantes pueden sacar mayor provecho del bajo precio en la suscripción a nuestros servicios. En las etapas siguientes, contando con una recepción positiva en cuanto a la calidad de nuestro servicio y la importancia de nuestro objetivo, el ideal es extender la cobertura a todos los estratos y a otras regiones del país y eventualmente extender el proyecto al mercado internacional.
                    </p>
                  </aside>                   
                </li>

                </ul>
              </aside>
            </aside>          
                        
          </aside>
        </aside>
      </aside>
    </section>
  </aside>
</section>



</body>
</html>