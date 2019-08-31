<head>	
	@include('frontend.arxius.arxius')
</head>
<body style="cursor:default">
	<!-- Creem un 'div', per a la capçalera de la pàgina -->
	<div id="container-fluid" align="center">
		<header>
			@include('frontend.pizzes.capcalera')
		</header>
		<script src="js/menu.js"></script>
		@include('frontend.pizzes.cos')
	</div>
	@include('frontend.footer.footer')
</body>
