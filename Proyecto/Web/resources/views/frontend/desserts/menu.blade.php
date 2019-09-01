<head>	
	@include('frontend.arxius.arxius')
</head>
<body style="cursor:default">
	<!-- Creem un 'div', per a la capçalera de la pàgina -->
	<div id="container-fluid" align="center">
		<header>
			@include('frontend.desserts.capcalera')
		</header>
		<script src="js/menu.js"></script>
		@include('frontend.desserts.cos')
	</div>
	@include('frontend.footer.footer')
</body>
 