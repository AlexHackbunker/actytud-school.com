<?php

  if ( !empty($_POST['action']) && $_POST['action']=='newsletter') {

    $message  = '<html><body>';
    $message .= '<table style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $email_from    = 'Actytud School <noreplay@actytud-school.com>';
    $email_subject = '[Actytud] Newsletter';
    $email_to      = 'comercial@actycrea.com';
    $email_cc      = 'alejandro.sevilla@gmail.com, fj.lacalle@gmail.com';

    $headers
      = "From: ". $email_from ."\n"
      . "Content-Type: text/html; charset=ISO-8859-1\n"
      . "Bcc: ". $email_cc ."\r\n";

    $result = mail($email_to, $email_subject, $message, $headers);

    if (!$result) {
      echo 'Error al enviar el formulario';
    } else {
      echo 'Muchas gracias por el interes ; )';
    }
    die();
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actytud School</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/actycrea.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48529496-2', 'actytud-school.com');
    ga('send', 'pageview');

  </script>
  </head>
  <body>
    <section class="header">
      <header>

        <div class="container text-center">

          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h1 class="text-hide">Actytud School<img src="images/logo.png" class="img-responsive"></h1>
            </div>
          </div>

          <h2>Estamos preparando algunos cursos que podrían interesarte</h2>

          <p>¿Quién podría enseñarte cómo funciona este mundillo mejor que profesionales que llevan años trabajando en el sector y aprendiendo cada día de la propia experiencia? Creemos que es hora de sacarle partido a ese know-how acumulado compartiéndolo contigo y haciendo que tus primeros pasos sean un poco más sencillos.</p>

        </div>

      </header>
    </section/>
    <section class="courses">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 text-center">
            <img src="images/course-html5.png" alt="" />
            <h3>HTML 5</h3>
            <p>En este curso te contaremos los fundamentos de este lenguaje fundamental para el desarrollo y maquetación de páginas web.</p>
            <!--<a href="#" title="">Ver temario</a>-->
          </div>

          <div class="col-md-4 col-sm-4 text-center">
            <img src="images/course-wordpress.png" alt="" />
            <h3>WordPress</h3>
            <p>Descubre cómo sacarle todo el partido al CMS más popular de la red, la herramienta ideal para la gestión de contenidos.</p>
            <!--<a href="#" title="">Ver temario</a>-->
          </div>

          <div class="col-md-4 col-sm-4 text-center">
            <img src="images/course-responsive.png" alt="" />
            <h3>Responsive Design</h3>
            <p>Aprende a optimizar la experiencia de tus usuarios haciendo que tus páginas web se adapten correctamente a cada dispositivo.</p>
            <!--<a href="#" title="">Ver temario</a>-->
          </div>
        </div>
      </div>
    </section>

     <section class="info">
      <div class="container">
        <div class="row text-center">
          <h2>¿Quieres que te informemos cuando preparemos algún curso?</h2>
          <p>Prometemos no bombardearte, simplemente te avisaremos cuando preparemos algún curso, y en cualquier caso podrás dejar de recibir esta información cuando tú quieras. Qué dices, ¿te apuntas?</p>
          <form action="" method="">
            <div class="form-group">
              <p id="msg" class="display-none"></p>
              <input type="text" id="email" placeholder="Email"/><br/>
              <button class="text-hide" id="chevron" id="submit"><span class="glyphicon glyphicon-chevron-right"></span>Enviar</button><input type="submit" id="submit" value="Enviar"/>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="social">

      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-3 text-center">
            <span class="icon"><i class="fa fa-fw"></i></span>
            <h3>Teléfono</h3>
            <p>913866069</p>
          </div>

          <div class="col-md-3 col-sm-3 text-center">
            <span class="icon"><i class="fa fa-fw"></i></span>
            <h3>Mail</h3>
            <p>hola@actycrea.com</p>
          </div>

          <div class="col-md-3 col-sm-3 text-center">
            <span class="icon"><i class="fa fa-fw"></i></span>
            <h3>Facebook</h3>
            <p>facebook.com/actycrea</p>
          </div>

          <div class="col-md-3 col-sm-3 text-center">
            <span class="icon"><i class="fa fa-fw"></i></span>
            <h3>Twitter</h3>
            <p>@actycrea</p>
          </div>

        </div>
      </div>

    </section>

    <section class="map">
      <div class="container">
        <div class="col-md-4">
          <div class="box">
            <h5>actycrea</h5>
            <p>Calle Coslada 15, 1ºD<br/>28028 Madrid</p>
            <a href="#" target="_blank"> Cómo llegar   <span class="wrapper"><span class="glyphicon glyphicon-chevron-right"></span></span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>