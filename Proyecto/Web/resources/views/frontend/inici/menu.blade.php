<head>	
	@include('frontend.arxius.arxius')
</head>
<body style="cursor:default">
	<!-- Creem un 'div', per a la capçalera de la pàgina -->
	<div id="container-fluid" align="center">
		<header>
			@include('frontend.inici.capcalera')
		</header>
		<script src="js/menu.js"></script>
		@include('frontend.inici.cos')
	</div>
	@include('frontend.footer.footer')
</body>
