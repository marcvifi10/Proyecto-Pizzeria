<div class="container-fluid" id="fons">
    <br>
	<div id="container color">
		<!-- Creem un 'div', per al contingut de la pàgina -->
		<div id="fons2" class="container content inici" style="min-height: 480px;">
			<!-- Deixem una fila buida, perquè hi hagi separació entre el menú i el contingut de la pàgina -->
			<div class="row">
				<div class="col-xs-12">
					<br>
					<font size="6">
						<strong>
							<u>COMANDA</u>
						</strong>
						<br>
					</font>
					<ol class="bredcrumb pull-left"></ol>
				</div>
			</div>
			<!-- Creem una fila, que servirà per mostrar les diferents opcions que hi han per cada apartat del menú -->
			<!-- Al inici, per defecte, mostrarà un missatge de benvinguda -->
            <?php $totalPrice = 0; ?>
			<div align="center">
			<table align="center"> 
				<tr>
					<td width="3%">

					</td>
					<td width="25%" align="center"> 
						<font size="4">
							<strong>
								{{ trans('web.producto') }} ({{ trans('web.unidad2') }})
							</strong>
						</font>
					</td>
					<td width="25%" align="center"> 
						<font size="4">
							<strong>
								{{ trans('web.cantidad') }} 
							</strong>
						</font>
					</ts>
					<td width="25%" align="center"> 
						<font size="4">
							<strong>
								{{ trans('web.total') }}
							</strong> 
						</font>
					</td>
				</tr>
            @forelse($productQuantities as $key => $productQuantity)
                <?php $totalPrice += $products[$key]->price * $productQuantity; ?>
				<tr>
					<td width="3%">

					</td> 
                	<td align="center">
						{{$products[$key]->name }} ({{ $products[$key]->price }} € / {{ trans('web.unidad') }})
					</td>
					<td align="center">
						{{$productQuantity}}
					</td>
					<td align="center">
						{{$products[$key]->price * $productQuantity}} € 
					</td>
				</tr>
             @empty
                <p>{{trans("web.products_not_found")}}</p>
            @endforelse
			</table>
			</div>
				<hr>
			<div align="right" style="margin-right: 13%">
            	<font size="4"><strong>{{ trans('web.total') }}:</strong> {{ $totalPrice }} € </font> 
				<br><br>
				{{Form::open(['route' => ['create_order'], 'method' => 'POST'])}}
				{{Form::hidden('orderLines', serialize($productQuantities))}}
				{{Form::label('franchise_id', trans("web.franchise").":")}}
				<div class="form-group col-lg-offset-9 col-lg-4">
					{{Form::select("franchise_id", $franchises->pluck("address", "id"), Auth::user()->franchise_id,
						array("placeholder" => trans("web.select_franchise"),
						"class" => "form-control"))}}
					<?php
						if ($errors->has('franchise_id')) {
							echo "<div style='color: #ff0000'>".$errors->first('franchise_id')."</div>";
						}
					?>
				</div>
				<div class="form-group">
					{{Form::submit(trans("web.confirmar"), ["class" => "btn btn-primary"])}}
				</div>
			{{Form::close()}}
			</div>
	    </div>
	</div>
	<br>
</div>