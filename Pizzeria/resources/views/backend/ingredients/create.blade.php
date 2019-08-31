@extends("layouts.backend")

@section("title")
{{trans("web.create")}} {{strtolower(trans("web.ingredient"))}}
@endsection

@section("content")
<div class="container">
    {{Form::open(['route' => ['admin.ingredients.store'], 'method' => 'POST'])}}
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
		{{Form::label('ingredient_category_id', trans("web.category").":")}}
		{{Form::select("ingredient_category_id", $categories->pluck("name", "id"), old("ingredient_category_id", null),
			array("placeholder" => trans("web.select_category"),
            "class" => "form-control"))}}
        <?php
        if ($errors->has('ingredient_category_id')) {
            echo "<div style='color: #ff0000'>".$errors->first('ingredient_category_id')."</div>";
        }
    ?>
	</div>

    <div class="form-group">
        {{Form::label('description', trans("web.description").":")}}
        {{Form::textarea('description', old("description", ""), ["class" => "form-control"])}}
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
