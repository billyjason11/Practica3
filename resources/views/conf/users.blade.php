<!doctype html><html class="no-js" lang="en"> 
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios &#8212; Panel de Administración</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <script src="js/plugins.js"></script>
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
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuración <b class="caret"></b></a>
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
          <ul class="breadcrumb"><li><a href='./'>Inicio</a></li><li><a href='#'>Configuración</a></li><li><a href='users.pl'>Usuarios</a></li><li class='active'>Lista de Usuarios</li></ul>
<h2 class="pull-left">Lista de <b>Usuarios</b></h2>
<p class="links pull-right"><a href="users.pl" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-list"></i> Lista de Usuarios</a> <a href="users.pl?action=new" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-plus"></span> Nuevo usuario</a></p>
<div class="clearfix"></div>

<div class="panel panel-default">
  <div class="panel-body"><div class="table-responsive"><!-- Created whit CGI::List -->
<table cellpadding="0" cellspacing="0" class="cg_table table table-bordered table-condensed" id="cg_table_cg_list" style="margin:0;" width="100%">
   <tr><th align="center">Nombre <a href="/tickets/users.pl?cg_order=2&amp;cg_side=1&amp;cg_page=1&amp;cg_list=cg_list">&uarr;</a><a href="/tickets/users.pl?cg_order=2&amp;cg_side=0&amp;cg_page=1&amp;cg_list=cg_list">&darr;</a></th> <th align="center">Email <a href="/tickets/users.pl?cg_order=3&amp;cg_side=1&amp;cg_page=1&amp;cg_list=cg_list">&uarr;</a><a href="/tickets/users.pl?cg_order=3&amp;cg_side=0&amp;cg_page=1&amp;cg_list=cg_list">&darr;</a></th> <th align="center">Último acceso <a href="/tickets/users.pl?cg_order=4&amp;cg_side=1&amp;cg_page=1&amp;cg_list=cg_list">&uarr;</a><a href="/tickets/users.pl?cg_order=4&amp;cg_side=0&amp;cg_page=1&amp;cg_list=cg_list">&darr;</a></th> <th align="center">Activo <a href="/tickets/users.pl?cg_order=5&amp;cg_side=1&amp;cg_page=1&amp;cg_list=cg_list">&uarr;</a><a href="/tickets/users.pl?cg_order=5&amp;cg_side=0&amp;cg_page=1&amp;cg_list=cg_list">&darr;</a></th></tr>
   <tr class="cg_row_a" onclick="document.location.href='users.pl?id_user=1';"><td align="left">Exosfera</td><td align="left">jauregui@exosfera.com</td><td align="left">2021-03-31 11:06:41</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_b" onclick="document.location.href='users.pl?id_user=17';"><td align="left">Exosfera</td><td align="left">desarrollo@exosfera.com</td><td align="left">2021-03-30 12:44:27</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_total"><td align="right" class="cg_cell_total"></td> <td align="right" class="cg_cell_total"></td> <td align="right" class="cg_cell_total"></td> <td align="right" class="cg_cell_total"></td></tr>
    <tr><td class="cg_foother" colspan="5"><span class="cg_number_rows">2 usuarios</span><span class="cg_pages">Página 1 de 1&nbsp;&nbsp;&nbsp;</span></td></tr>
</table>
<script type="text/javascript">
	var cg_table_cg_list = document.getElementById('cg_table_cg_list');
	for(var i = 0; i < cg_table_cg_list.rows.length; i++){
            cg_row_class_name = cg_table_cg_list.rows[i].className;
            if( cg_row_class_name.substring(0,7) == "cg_row_"){
	        cg_table_cg_list.rows[i].onmouseover = function(){this.className = this.className+'_hover';};
	        cg_table_cg_list.rows[i].onmouseout = function(){this.className = this.className.replace('_hover','');};
            }
	}
</script>
</div></div>
</div>
<style>.cg_row_total {display:none;}</style>

      </div>
  </body>
</html>
