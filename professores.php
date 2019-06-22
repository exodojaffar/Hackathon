<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Professores</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="static/bower/materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="static/bower/fontawesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="static/styles.css" rel="stylesheet">
  <link rel="shortcut icon"
 href="static/images/favicon.ico" />
</head>
<body class="yellow lighten-4">
  <nav class="red darken-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" target="_blank" href="https://github.com/BrOrlandi/GitTrainingWall" class="brand-logo">ProForum</a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light">Professores</h5>
      </div>
    </div>
  </div>


    <div class="row user-list">
      <div class="col s12 m4 l2">
          <?php include 'php.php'?>
      </div>

    </div>


  <footer class="page-footer red darken-4" style="padding-top: 0px">
    <div class="footer-copyright">
      <div class="container">
      Developed by <a class="red-text text-lighten-3" href="">Bruno Orlandi</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="static/bower/jquery/dist/jquery.min.js"></script>
  <script src="static/bower/materialize/dist/js/materialize.min.js"></script>
  <!--
  {% if script %}
  <script >
    var users = -1;
    function doPoll(){
      $.get('/users', function(data) {
          if(users === -1)
            users = data;
          if(data !== users)
            window.location.reload();
          setTimeout(doPoll,3000);
      });
    }
    $(document).ready(function(){
      doPoll();
    });
  </script>
  {% endif %}
-->
  </body>
</html>