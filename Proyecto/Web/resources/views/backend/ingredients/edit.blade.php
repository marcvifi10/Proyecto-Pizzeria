@extends("layouts.backend")

@section("title")
{{trans("web.edit")}} {{strtolower(trans("web.ingredient"))}}
@endsection

@section("content")
<div class="container">
	{{Form::open(['route' => ['admin.ingredients.update', $ingredient->id], 'method' => 'PUT'])}}
	<div class="form-group">
		{{Form::label('name', trans("web.name").":")}}
        {{Form::text('name', $ingredient->name, ["class" => "form-control"])}}
        <?php
            if ($errors->has('name')) {
                echo "<div style='color: #ff0000'>".$errors->first('name')."</div>";
            }
        ?>
	</div>

	<div class="form-group">
		{{Form::label('ingredient_category_id', trans("web.category").":")}}
		{{Form::select("ingredient_category_id", $categories->pluck("name", "id"),
			$ingredient->ingredientcategory->id, array("placeholder" => trans("web.select_category"),
            "class" => "form-control"))}}
        <?php
        if ($errors->has('ingredient_category_id')) {
            echo "<div style='color: #ff0000'>".$errors->first('ingredient_category_id')."</div>";
        }
    ?>
	</div>

	<div class="form-group">
		{{Form::label('description', trans("web.description").":")}}
        {{Form::textarea('description', $ingredient->description, ["class" => "form-control"])}}
        <?php
            if ($errors->has('description')) {
                echo "<div style='color: #ff0000'>".$errors->first('description')."</div>";
            }
        ?>
	</div>

	<div class="form-group">
		{{Form::submit(trans("web.submit"), ["class" => "btn btn-primary"])}}
	</div>

	<div class="form-group">
		<a href="{{route('admin.ingredients.index')}}" class="btn btn-danger" role="button">
			{{trans("web.cancel")}}
		</a>
	</div>
	{{Form::close()}}
</div>
@endsection
