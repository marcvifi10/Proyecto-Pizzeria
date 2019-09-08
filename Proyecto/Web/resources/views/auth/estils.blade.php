<title>Majovi's Pizza</title>
<!-- Habilitem els caràcter UTF-8 -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Posem un favicon -->
		
<!-- Importem els arxius CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/comun.css" rel="stylesheet">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="css/jquery-ui.min.css" rel="stylesheet">
<link href="css/jquery.treetable.css" rel="stylesheet">
<link href="css/jquery.treetable.theme.default.css" rel="stylesheet">
<link href="css/public.css" rel="stylesheet">
<link href="css/intranet.css" rel="stylesheet">
<!--<link href="css/propi.css" rel="stylesheet">-->
<link href="css/horizontal.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" type="image/png" href="images/icono.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<script src="js/menu.js"></script>

<div class="row" align="left">
	<!-- <h1 class="logo">Logo <span>Empresa</span></h1> -->
	<div class="col-lg-offset-2">
		<img src="images/logo.png" width="220px" height="80px">
	</div>
	<div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-2 col-xs-offset-1">
		<table align="right">
			<tr>
				<td>
					
				</td>
				<td align="center">
					<a href="#">
						<img src="images/login.png" id="login" class="pointer" width="30px" height="30px">
					</a>
				</td>
				<td align="center">
					<a href="#">
						<img src="images/register.png" id="registre" class="pointer" width="30px" height="30px">
					</a>
				</td>
			</tr>
			<tr>
				<td align="center"></td>
				<td align="center" id="cella_login" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
					<a href="{{ route('login') }}" id="login">
						<strong>{{ trans('web.direction_login') }}</strong>
					</a>
				</td>
				<td align="center" id="cella_registre">
					<a href="{{ route('register') }}" id="registre" onclick="registre()">
						<strong>{{ trans('web.direction_register') }}</strong>
					</a>
				</td>
			</tr>
		</table>
	</div>	
</div>
<nav id="site-nav" class="site-nav transparencia">
	<ul>
		<li>
			<a href="#" id="inici" onclick="inici()">
				<i class="fa fa-home"></i> 
				{{ trans('web.home') }}
			</a>
		</li>
		<li>
			<a href="#" id="pizzes" onclick="pizzes()">
				<i class="fas fa-pizza-slice"></i> {{ trans('web.pizzas') }}
			</a>
		</li>
		<li>
			<a href="#" id="begudes" onclick="begudes()">
				<i class="fab fa-gulp"></i> {{ trans('web.drinks') }}
			</a>
		</li>
		<li>
			<a href="#" id="menus" onclick="menus()">
				<i class="fas fa-pizza-slice"></i> <i class="fab fa-gulp"></i> {{ trans('web.menus') }}
			</a>
		</li>
		<li>
			<a href="#" id="postres" onclick="postres()">
				<i class="fa fa-ice-cream"></i> {{ trans('web.desserts') }}
			</a>
							
		</li>
		<!--<li>
			<a href="#">
				<i class="fa fa-envelope site-nav--icon"></i>Contacte
			</a>
		</li>-->
	</ul>
</nav>
<div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
	<div class="hamburger"></div>
</div>