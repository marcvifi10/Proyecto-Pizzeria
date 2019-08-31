<head>	
	@include('frontend.arxius.arxius')
</head>
<body style="cursor:default">
	<!-- Creem un 'div', per a la capçalera de la pàgina -->
	<div id="container" align="center">
		<header>
			@include('frontend.login.capcalera')
		</header>
		<script src="js/menu.js"></script>
		@include('frontend.login.cos')
	</div>
	@include('frontend.footer.footer')
</body>
