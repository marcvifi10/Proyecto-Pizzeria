<style>

    #desc
    {

        visibility: hidden;
        display: none;

    }

</style>
<script>
        
	window.onload = function () {

		let $items = document.querySelector('#items');
        let carrito = [];
        let total = 0;
        let $carrito = document.querySelector('#carrito');
        let $total = document.querySelector('#total');

		function renderItems () {
                for (let info of baseDeDatos) {
                    // Estructura
                    let miNodo = document.createElement('div');
                    miNodo.classList.add('card', 'col-sm-4');
                    // Body
                    let miNodoCardBody = document.createElement('div');
                    miNodoCardBody.classList.add('card-body');
                    // Titulo
                    let miNodoTitle = document.createElement('h5');
                    miNodoTitle.classList.add('card-title');
                    miNodoTitle.textContent = info['nombre'];
                    // Precio
                    let miNodoPrecio = document.createElement('p');
                    miNodoPrecio.classList.add('card-text');
                    miNodoPrecio.textContent = info['precio'] + '€';
                    // Boton 
                    let miNodoBoton = document.createElement('button');
                    miNodoBoton.classList.add('btn', 'btn-primary');
                    miNodoBoton.textContent = '+';
                    miNodoBoton.setAttribute('marcador', info['id']);
                    miNodoBoton.addEventListener('click', anyadirCarrito);
                    // Insertamos
                    miNodoCardBody.appendChild(miNodoTitle);
                    miNodoCardBody.appendChild(miNodoPrecio);
                    miNodoCardBody.appendChild(miNodoBoton);
                    miNodo.appendChild(miNodoCardBody);
                    $items.appendChild(miNodo);
                }
            }
            function anyadirCarrito () {
                // Anyadimos el Nodo a nuestro carrito
                carrito.push(this.getAttribute('marcador'))
                // Calculo el total
                calcularTotal();
                // Renderizamos el carrito 
                renderizarCarrito();

            }

            function renderizarCarrito () {
                // Vaciamos todo el html
                $carrito.textContent = '';
                // Generamos los Nodos a partir de carrito
                carrito.forEach(function (item, indice) {
                    // Obtenemos el item que necesitamos de la variable base de datos
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    // Creamos el nodo del item del carrito
                    let miNodo = document.createElement('li');
                    miNodo.classList.add('list-group-item', 'text-right');
                    miNodo.textContent = `${miItem[0]['nombre']} - ${miItem[0]['precio']}€`;
                    // Boton de borrar
                    let miBoton = document.createElement('button');
                    miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                    miBoton.textContent = 'X';
                    miBoton.setAttribute('posicion', indice);
                    miBoton.addEventListener('click', borrarItemCarrito);
                    // Mezclamos nodos
                    miNodo.appendChild(miBoton);
                    $carrito.appendChild(miNodo);
                })
            }

            function borrarItemCarrito () {
                // Obtenemos la posicion que hay en el boton pulsado
                let posicion = this.getAttribute('posicion');
                // Borramos la posicion que nos interesa
                carrito.splice(posicion, 1);
                // volvemos a renderizar
                renderizarCarrito();
                // Calculamos de nuevo el precio
                calcularTotal();
            }

            function calcularTotal () {
                // Limpiamos precio anterior
                total = 0;
                // Recorremos el array del carrito
                for (let item of carrito) {
                    // De cada elemento obtenemos su precio
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    total = total + miItem[0]['precio'];
                }
                // Formateamos el total para que solo tenga dos decimales
                let totalDosDecimales = total.toFixed(2);
                // Renderizamos el precio en el HTML
                $total.textContent = totalDosDecimales;
            }
            // Eventos

            // Inicio
            renderItems();

	}

</script>
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
				@foreach($pizzas as $pizza)
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<img src="{{ $pizza->imatge }}" width="80%" id="{{ $pizza->name }}">
							<br>
                            <font size="4">
							    <strong>{{ $pizza->name }}</strong>
                            </font>
                            <br>
                            <div id="{{ $pizza->description }}">
                                {{ $pizza->description }}
                            </div>
							<br>
							{{ $pizza->price }} €
							<br>
							<a role="button" href="{{ route('add_product',$pizza->id) }}" class="btn btn-primary" name="afegir"><i class="fas fa-shopping-cart"></i>{{trans("web.anadir")}}</a>
						</div>
				@endforeach
				<br>
			</div>
			<br>
		</div>
	</div>
	<br>
</div>			