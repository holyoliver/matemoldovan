<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="resources/css/reset.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <title>Contact me</title>
    <link href="resources/css/custom.css" type="text/css" rel="stylesheet">
    <link href="resources/css/contact.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" type="image/" href="resources/favicon.ico"/>
    <link rel="stylesheet" href="resources/css/audioplayer.css">
  </head>
  <body>
    <header>
      <div class="landing">
        <nav class="navbar fixed-top navbar-expand-lg" id="header">
          <span class="firstn" ><a href="index.html">Máté Moldován</a></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav rightmenu">
        <a class="nav-item nav-link" href="index.html">Home</a>
        <a class="nav-item nav-link" href="index.html#portfolio">Portfolio</a>
        <a class="aboutme nav-item nav-link" href="aboutme.html">My Story</a>
        <a class="nav-item nav-link" href="contact.html">Contact</a>
      </div>
    </div>
  </nav>


    </header>

    <main>
      <div class="container socialmedia">
        <h1 class="text-center">Follow me on <span>social</span> media!</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 align-self-center text-center soci">
            <a class="sicon" href="https://www.instagram.com/mdvnmate/" target="_blank"><i class="fab fa-instagram fa-5x"></i></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4  align-self-center text-center soci">
           <a class="sicon" href="https://twitter.com/MateMoldovan" target="_blank"><i class="fab fa-twitter fa-5x"></i></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 align-self-center text-center soci">
            <a class="sicon" href="https://soundcloud.com/matemoldovan" target="_blank"><i class="fab fa-soundcloud fa-5x"></i></a>
          </div>
        </div>
      </div>
      <div class="contactform">
      <section class="mb-4">
          <h2 id="contactme" class="h1-responsive text-center my-4">or Contact me!</h2>
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact me directly.</p>

          <div class="row justify-content-md-center">
            <?php
            $form_fields = [
              'name',
              'email',
              'subject',
              'message',
            ];
            $err = FALSE;

            // Check for empty fields and apply char escape for values.
            foreach ($form_fields as $field) {
              if (empty($_POST[$field])) {
                echo 'The field ' . $field . ' can not be empty!';
                $err = TRUE;
              }
              else {
                $form_fields[$field] = htmlspecialchars($_POST[$field]);
              }
            }

            // Stop on error.
            if ($err) {
              die();
            }

            $content = "From: " . $form_fields['name'] . " \n Email: " . $form_fields['email'] . " \n Message: " . $form_fields['message'] . "";
            $recipient = "moldovan1989@gmail.com";
            $mailheader = "From: " . $form_fields['email'] . "\r\n";
            mail($recipient, $form_fields['subject'], $content, $mailheader) or die("Error!");
            echo "Email sent!";
            ?>
          </div>
      </section>
            </div>








    </main>

    <footer>
      <div class="container design">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="">site by <a href="mailto:oliver.siket@gmail.com">Oliver Siket©</a></h4>
          </div>
          <div class="col-lg-12">
          <h4 class="">copyright Máté Moldován ©2018</h4>
        </div>
        </div>
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/audioplayer.js"></script>
      <script src="js/custom.js"></script>

    <script>$( function() { $( 'audio' ).audioPlayer(); } );</script>
  </body>
</html>
