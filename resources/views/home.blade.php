<!doctype html>
<html class="no-js" lang="en"> 
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard &#8212; Panel de Administración</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <script src="{{  asset('js/plugins.js')  }}"></script>
    <script   src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    </head>
  <body>
      <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="./"><b>Exosfera Tickets</b></a>
              </div>
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                      <li><a href="/home/profile">Mi perfil</a></li>
                      <li><a href="/home/tickets">Mis tickets</a></li>
                      
                      <li class="dropdown">
                          <a href="#" class="dropdown-togle" data-toggle="dropdown">Configuración <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="/home/clients">Clientes</a></li><li><a href="/home/users">Usuarios</a></li>
                          </ul>
                      </li>
                      <li><a href="{{ route('logout') }}">Salir (<b>exosfera</b>)</a></li> 
                  </ul>
              </div>
          </div>
      </div>
      <div class="container">          
<h2 class="pull-left">Dashboard de <b>TICKETS <b>EXOSFERA</b></b></h2>
<div class="clearfix"></div><br />
      </div>
  </body>
</html>