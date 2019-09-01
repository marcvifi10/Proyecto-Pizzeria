@extends("layouts.backend")

@section("title")
{{trans("web.create")}} {{strtolower(trans("web.product"))}}
@endsection

@section("content")
<div class="container">
    {{Form::open(['route' => ['admin.products.store'], 'method' => 'POST'])}}
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
		{{Form::label('product_category_id', trans("web.category").":")}}
		{{Form::select("product_category_id", $categories->pluck("name", "id"), old("product_category_id", null),
			array("placeholder" => trans("web.select_category"),
            "class" => "form-control"))}}
        <?php
        if ($errors->has('product_category_id')) {
            echo "<div style='color: #ff0000'>".$errors->first('product_category_id')."</div>";
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
		{{Form::label('ingredients_ids', trans("web.ingredients").":")}}
		<div class="form-check">
			@foreach($ingredients as $ingredient)
				<div class="col-sm-12">
					<label class="form-check-label">
						{{Form::checkbox('ingredients_ids[]', $ingredient->id,
							false, ["class" => "form-check-input"])}}
						{{$ingredient->name}}
					</label>
				</div>
			@endforeach
		</div>
	</div>

    <div class="form-group">
        {{Form::submit(trans("web.submit"), ["class" => "btn btn-primary"])}}
	</div>

	<div class="form-group">
		<a href="{{route('admin.products.index')}}" class="btn btn-danger" role="button">
			{{trans("web.cancel")}}
		</a>
	</div>
    {{Form::close()}}
</div>
@endsection
