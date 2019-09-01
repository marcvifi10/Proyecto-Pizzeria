@extends("layouts.backend")

@section("title")
{{trans("web.edit")}} {{strtolower(trans("web.franchise"))}}
@endsection

@section("content")
<div class="container">
    {{Form::open(['route' => ['admin.franchises.update', $franchise->id], 'method' => 'PUT'])}}
    <div class="form-group">
        {{Form::label('name', trans("web.name").":")}}
        {{Form::text('name', $franchise->name, ["class" => "form-control"])}}
        <?php
            if ($errors->has('name')) {
                echo "<div style='color: #ff0000'>".$errors->first('name')."</div>";
            }
        ?>
    </div>

    <div class="form-group">
        {{Form::label('email', trans("web.email").":")}}
        {{Form::email('email', $franchise->email, ["class" => "form-control"])}}
        <?php
            if ($errors->has('email')) {
                echo "<div style='color: #ff0000'>".$errors->first('email')."</div>";
            }
        ?>
    </div>

    <div class="form-group">
        {{Form::label('address', trans("web.address").":")}}
        {{Form::text('address', $franchise->address, ["class" => "form-control"])}}
        <?php
            if ($errors->has('address')) {
                echo "<div style='color: #ff0000'>".$errors->first('address')."</div>";
            }
        ?>
    </div>

    <div class="form-group">
        {{Form::label('phone', trans("web.phone").":")}}
        {{Form::text('phone', $franchise->phone, ["class" => "form-control"])}}
        <?php
            if ($errors->has('phone')) {
                echo "<div style='color: #ff0000'>".$errors->first('phone')."</div>";
            }
        ?>
    </div>

    <div class="form-group">
        {{Form::label('coordinates', trans("web.coordinates").":")}}
        {{Form::text('coordinates', $franchise->coordinates, ["class" => "form-control"])}}
        <?php
            if ($errors->has('coordinates')) {
                echo "<div style='color: #ff0000'>".$errors->first('coordinates')."</div>";
            }
        ?>
    </div>

    <div class="form-group">
        {{Form::submit(trans("web.submit"), ["class" => "btn btn-primary"])}}
	</div>

	<div class="form-group">
		<a href="{{route('admin.franchises.index')}}" class="btn btn-danger" role="button">
			{{trans("web.cancel")}}
		</a>
	</div>
    {{Form::close()}}
</div>
@endsection
