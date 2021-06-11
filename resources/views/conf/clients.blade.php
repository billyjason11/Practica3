<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes &#8212; Panel de Administración</title>
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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
  </head>
  <body>
      <!--[if lt IE 7]><p class=chromeframe>Tu navegador esta <em>obsoleto!</em> <a href="http://browsehappy.com/">Actualiza a un navegador diferente</a> o <a href="http://www.google.com/chromeframe/?redirect=true">instala Google Chrome Frame</a> para visualizar correctamente este sitio.</p><![endif]-->
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
          <ul class="breadcrumb"><li><a href='./'>Inicio</a></li><li><a href='#'>Configuración</a></li><li><a href='clients.pl'>Clientes</a></li><li class='active'>Lista de Clientes</li></ul>
<h2 class="pull-left">Lista de <b>Clientes</b></h2>
<p class="links pull-right"><a href="clients.pl" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-list"></i> Lista de Clientes</a> <a href="clients.pl?action=new" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-plus"></span> Nuevo cliente</a></p>
<div class="clearfix"></div>

<div class="panel panel-default">
  <div class="panel-body"><div class="table-responsive"><!-- Created whit CGI::List -->
<table cellpadding="0" cellspacing="0" class="cg_table table table-bordered table-condensed" id="cg_table_cg_list" style="margin:0;" width="100%">
   <tr><th align="center">Nombre <a href="/tickets/clients.pl?cg_order=2&amp;cg_side=1&amp;cg_page=1&amp;cg_list=cg_list">&uarr;</a><a href="/tickets/clients.pl?cg_order=2&amp;cg_side=0&amp;cg_page=1&amp;cg_list=cg_list">&darr;</a></th> <th align="center">Email <a href="/tickets/clients.pl?cg_order=3&amp;cg_side=1&amp;cg_page=1&amp;cg_list=cg_list">&uarr;</a><a href="/tickets/clients.pl?cg_order=3&amp;cg_side=0&amp;cg_page=1&amp;cg_list=cg_list">&darr;</a></th> <th align="center">Último acceso <a href="/tickets/clients.pl?cg_order=4&amp;cg_side=1&amp;cg_page=1&amp;cg_list=cg_list">&uarr;</a><a href="/tickets/clients.pl?cg_order=4&amp;cg_side=0&amp;cg_page=1&amp;cg_list=cg_list">&darr;</a></th> <th align="center">Activo <a href="/tickets/clients.pl?cg_order=5&amp;cg_side=1&amp;cg_page=1&amp;cg_list=cg_list">&uarr;</a><a href="/tickets/clients.pl?cg_order=5&amp;cg_side=0&amp;cg_page=1&amp;cg_list=cg_list">&darr;</a></th></tr>
   <tr class="cg_row_a" onclick="document.location.href='clients.pl?id_client=18';"><td align="left">tester exo</td><td align="left">tester@exosfera.com</td><td align="left">2021-03-30 13:10:47</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_b" onclick="document.location.href='clients.pl?id_client=2';"><td align="left">Mas Promocionales</td><td align="left">cesar@maspromocionales.com</td><td align="left">2021-03-09 09:08:31</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_a" onclick="document.location.href='clients.pl?id_client=11';"><td align="left">Presimap</td><td align="left">irwingsilva@hotmail.com</td><td align="left">2021-03-08 11:34:26</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_b" onclick="document.location.href='clients.pl?id_client=9';"><td align="left">Funerales Miranda</td><td align="left">info@funeralesmiranda.com</td><td align="left">2021-03-02 15:45:13</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_a" onclick="document.location.href='clients.pl?id_client=12';"><td align="left">Alsuper</td><td align="left">patricia.pizarro@alsuper.com</td><td align="left">2021-02-05 11:54:53</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_b" onclick="document.location.href='clients.pl?id_client=15';"><td align="left">Impress Depot Sami</td><td align="left">info@impressdepot.com.mx</td><td align="left">2020-03-21 18:59:50</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_a" onclick="document.location.href='clients.pl?id_client=8';"><td align="left">Honorarios Médicos </td><td align="left">medicoscima@angeleschihuahua.com</td><td align="left">2020-01-24 14:46:34</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_b" onclick="document.location.href='clients.pl?id_client=6';"><td align="left">Impress Depot Producción</td><td align="left">info@impressdepot.com.mx</td><td align="left">2020-01-23 12:53:57</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_a" onclick="document.location.href='clients.pl?id_client=13';"><td align="left">Xhepl</td><td align="left">info@xhepl.mx</td><td align="left">2019-10-15 10:03:12</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_b" onclick="document.location.href='clients.pl?id_client=16';"><td align="left">MASPROMOSTORE</td><td align="left">jcontreras@maspromostore.com</td><td align="left">2019-08-22 11:05:04</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_a" onclick="document.location.href='clients.pl?id_client=5';"><td align="left">Impress Depot</td><td align="left">jorgecontreras@maspromocionales.com</td><td align="left">2019-08-20 13:17:26</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_b" onclick="document.location.href='clients.pl?id_client=7';"><td align="left">Direchisa</td><td align="left">acasillas@direchisa.com</td><td align="left">2019-07-12 08:48:03</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_a" onclick="document.location.href='clients.pl?id_client=10';"><td align="left">Avance y Tecnologia</td><td align="left">vlozoya@avanceytec.com.mx</td><td align="left">2018-10-05 12:06:14</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_b" onclick="document.location.href='clients.pl?id_client=3';"><td align="left">CLIENTE DEMO</td><td align="left">info@exosfera.com</td><td align="left">2017-11-16 09:30:31</td><td align="center"><img src=img/action_check.gif></td></tr>
   <tr class="cg_row_a" onclick="document.location.href='clients.pl?id_client=4';"><td align="left">TNP Lideres en Innovacion Promocional</td><td align="left">miguel.salgado@tnp.com.mx</td><td align="left">2019-09-30 13:58:26</td><td align="center"><img src=img/action_delete.gif></td></tr>
   <tr class="cg_row_total"><td align="right" class="cg_cell_total"></td> <td align="right" class="cg_cell_total"></td> <td align="right" class="cg_cell_total"></td> <td align="right" class="cg_cell_total"></td></tr>
    <tr><td class="cg_foother" colspan="5"><span class="cg_number_rows">15 usuarios</span><span class="cg_pages">Página 1 de 1&nbsp;&nbsp;&nbsp;</span></td></tr>
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
