@extends("layouts.backend")

@section("title")
{{trans("web.create")}} {{strtolower(trans("web.ingredient_category"))}}
@endsection

@section("content")
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    {{Form::open(['route' => ['admin.ingredient_categories.store'], 'method' => 'POST'])}}
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
		<a href="{{route('admin.ingredient_categories.index')}}" class="btn btn-danger" role="button">
			{{trans("web.cancel")}}
		</a>
	</div>
    {{Form::close()}}
</div>
@endsection
