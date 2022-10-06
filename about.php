<?php include "includes/cabecera2.php"?>

<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">03 : Sobre mi</h1>
          </div>
          
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <h3>Hola, soy Angel Ocampo, gracias por visitar esta sección.</h3>
                  <p>Empezaré diciendo que, me encanta la satisfacción de lograr algo, cuando la petición se enviá, se crea un registro, incluso cuando el mensaje de error cambia... es una sensación inigualable la que me brinda el desarrollo. <br>
                   Si a usted le apasiona lo que hace seguro me entenderá.</p>
                  
                  <h3>Luces y sombras.</h3>
                  <p>Soy muy determinado, uno de mis objetivos es crecer profesionalmente y evolucionar en el sector del desarrollo de software, por lo que no desperdicio la oportunidad de aprender algo nuevo, me gusta auto capacitarme y siempre estoy abierto a criticas de cualquier tipo.</p>
                  
                  <h3>Cuando no hago nada…</h3>
                  <p>Me gusta mucho, pasar tiempo con mi familia, si alguna de mis niñas no me esta peinando o pintando las uñas, escapo ileso de una invasión zombie o incluso derroto al rey del Olimpo, también escucho y leo historias de terror.</p>
                  
                  <h3>Mas información </h3>
                  <a href="./cv.pdf" class="btn btn-default" download="Angel_Ocampo_CV.pdf" id="cv">CV</a>
                </div> <br>

                <div class="col-xs-12 col-md-6">
                  <img src="./assets/images/a.jpg" class="img-responsive" alt="">
                </div>
              </div>
            </div>
          </div>

          
       </div>
      </div>
    </div>
  </div>



  <?php include "includes/pie.php" ?>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     navActivePage();
  });

  document.getElementById('cv').onclick = function(){
    alert('Gracias por la descarga !!!');
}
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> <script type="text/javascript" src="./main.70a66962.js"></script></body>

</html>