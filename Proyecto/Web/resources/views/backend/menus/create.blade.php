@extends("layouts.backend")

@section("title")
{{trans("web.create")}} {{strtolower(trans("web.menu"))}}
@endsection

@section("content")
<div class="container">
    {{Form::open(['route' => ['admin.menus.store'], 'method' => 'POST'])}}
    <div class="form-group">
        {{Form::label('name', trans("web.name").":")}}
        {{Form::text('name', old("name", ""), ["class" => "form-control"])}}
        <?php
            if ($errors->has('name')) {
                echo "<div style='color: #ff0000'>".$errors->first('name')."</div>";
            }
        ?>
	</div>

	<div class="form-group">
		{{Form::label('price', trans("web.price").":")}}
        {{Form::number('price', old("price", 0), ["class" => "form-control", "step" => "0.01"])}}
        <?php
            if ($errors->has('price')) {
                echo "<div style='color: #ff0000'>".$errors->first('price')."</div>";
            }
        ?>
	</div>

    <div class="form-group">
        {{Form::label('description', trans("web.description").":")}}
        {{Form::textarea('description', old("description", ""), ["class" => "form-control", "rows" => "2"])}}
        <?php
            if ($errors->has('description')) {
                echo "<div style='color: #ff0000'>".$errors->first('description')."</div>";
            }
        ?>
	</div>

	<div class="form-group">
		{{Form::label('products_ids', trans("web.products").":")}}
		<div class="form-check">
			@foreach($products as $product)
				<div class="col-sm-12">
					<label class="form-check-label">
						{{Form::checkbox('products_ids[]', $product->id,
							false, ["class" => "form-check-input"])}}
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
