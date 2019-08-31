@extends("layouts.backend")

@section("title")
{{trans("web.edit")}} {{strtolower(trans("web.menu"))}}
@endsection

@section("content")
<div class="container">
	{{Form::open(['route' => ['admin.menus.update', $menu->id], 'method' => 'PUT'])}}
	<div class="form-group">
		{{Form::label('name', trans("web.name").":")}}
        {{Form::text('name', $menu->name, ["class" => "form-control"])}}
        <?php
            if ($errors->has('name')) {
                echo "<div style='color: #ff0000'>".$errors->first('name')."</div>";
            }
        ?>
	</div>

	<div class="form-group">
		{{Form::label('price', trans("web.price").":")}}
        {{Form::number('price', $menu->price, ["class" => "form-control", "step" => "0.01"])}}
        <?php
            if ($errors->has('price')) {
                echo "<div style='color: #ff0000'>".$errors->first('price')."</div>";
            }
        ?>
	</div>

	<div class="form-group">
		{{Form::label('description', trans("web.description").":")}}
        {{Form::textarea('description', $menu->description, ["class" => "form-control", "rows" => "2"])}}
        <?php
            if ($errors->has('description')) {
                echo "<div style='color: #ff0000'>".$errors->first('description')."</div>";
            }
        ?>
	</div>

	<div class="form-group">
		{{Form::label('products_ids', trans("web.products").":")}}
		<div class="form-check">
			<?php $menuProductsIDs = $menu->products->pluck('id')->toArray() ?>
			@foreach($products as $product)
				<div class="col-sm-12">
					<label class="form-check-label">
						{{Form::checkbox('products_ids[]', $product->id,
							in_array($product->id, $menuProductsIDs),
							["class" => "form-check-input"])}}
						{{$product->name}}
					</label>
				</div>
			@endforeach
		</div>
	</div>

	<div class="form-group">
		{{Form::submit(trans("web.submit"), ["class" => "btn btn-primary"])}}
	</div>

	<div class="form-group">
		<a href="{{route('admin.menus.index')}}" class="btn btn-danger" role="button">
			{{trans("web.cancel")}}
		</a>
	</div>
	{{Form::close()}}
</div>
@endsection
