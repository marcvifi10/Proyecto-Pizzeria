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
					@foreach($menus as $menu)
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<img src="{{ $menu->imatge }}" width="70%" id="{{ $menu->name }}">
							<br>
							<font size="4">
							    <strong>{{ $menu->name }}</strong>
                            </font>
							<br>
							{{ $menu->description }}
							<br><br>
							{{ $menu->price }} €
							<br>
							<a role="button" href="{{ route('add_product',$menu->id) }}" class="btn btn-primary" name="afegir"><i class="fas fa-shopping-cart"></i>{{trans("web.anadir")}}</a>
						</div>
					@endforeach
					<br><br>
				</div>
				<br>
			</div>
			<br> 
		</div>
	</div>
</div>
			