<head>	
	@include('frontend.orders.arxius')
</head>
<body style="cursor:default">
	<!-- Creem un 'div', per a la capçalera de la pàgina -->
	<div id="container-fluid" align="center">
		<header>
			@include('frontend.orders.capcalera')
		</header>
		<script src="js/menu.js"></script>
		@include('frontend.orders.o')
	</div>
	@include('frontend.orders.footer')
</body>
