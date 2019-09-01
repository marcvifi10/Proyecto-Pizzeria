@extends("layouts.backend")

@section("title")
{{trans("web.edit")}} {{strtolower(trans("web.ingredient_category"))}}
@endsection

@section("content")
<div class="container">
	{{Form::open(['route' => ['admin.ingredient_categories.update', $category->id], 'method' => 'PUT'])}}
	<div class="form-group">
		{{Form::label('name', trans("web.name").":")}}
        {{Form::text('name', $category->name, ["class" => "form-control"])}}
        <?php
            if ($errors->has('name')) {
                echo "<div style='color: #ff0000'>".$errors->first('name')."</div>";
            }
        ?>
	</div>

	<div class="form-group">
		{{Form::label('description', trans("web.description").":")}}
        {{Form::textarea('description', $category->description, ["class" => "form-control"])}}
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
		<a href="{{route('admin.ingredient_categories.index')}}" class="btn btn-danger" role="button">
			{{trans("web.cancel")}}
		</a>
	</div>
	{{Form::close()}}
</div>
@endsection
