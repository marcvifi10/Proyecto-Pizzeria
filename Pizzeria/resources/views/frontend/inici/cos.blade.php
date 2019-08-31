<div class="container-fluid" id="fons">
    <br>
	<div id="container color">
		<!-- Creem un 'div', per al contingut de la pàgina -->
		<div id="fons2" class="container content inici" style="min-height: 480px;">
			<!-- Deixem una fila buida, perquè hi hagi separació entre el menú i el contingut de la pàgina -->
			<div class="row">
				<div class="col-xs-12">
					<ol class="bredcrumb pull-left"></ol>
				</div>
			</div>
			<!-- Creem una fila, que servirà per mostrar les diferents opcions que hi han per cada apartat del menú -->
			<!-- Al inici, per defecte, mostrarà un missatge de benvinguda -->
			<div class="row">
				<!-- Determinem la posició del menú -->
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
					<font size="5">
						<strong>BIENVENIDO A MAJOVI'S PIZZA</strong>
					</font>
				</div>
			</div>
			<div class="row">
				<!-- Determinem la posició del menú -->
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
					<br>
					<font size="3">
						Si quieres pedir comida a domicilio, Majovi's Pizza es la mejor opción. 
						Elige tu pizza favorita o cualquiera de los productos de nuestra carta y 
						aplica las mejores promociones. En unos minutos te llevamos la comida a casa. 
						Y si estás buscando una de nuestras pizzerías, encuéntrala en nuestro localizador.
					</font>
				</div>
			</div>
			<div class="row">
				<!-- Determinem la posició del menú -->
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
					<br>
					<img src="images/inici.jpg" width="80%" height="">
				</div>
			</div>
			<div class="row">
				<!-- Determinem la posició del menú -->
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
					<br>
					<font size="3">
						Actualment l'empresa compta amb establiments ubicats en enclavaments 
						estratègics a Catalunya.
					</font>
				</div>
			</div>
			<div class="row">
				<!-- Determinem la posició del menú -->
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
					<br><br><br>
					<font size="3">
						<strong>ELS NOSTRES LOCALS</strong>
					</font>
					<br><br>
					@foreach($locals as $local)
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
						- {{ $local->name }}, {{ $local->address }} -
						</div>
					@endforeach 
				</div>
			</div>
			<br>
		</div>
	</div>
	<br>
</div>		