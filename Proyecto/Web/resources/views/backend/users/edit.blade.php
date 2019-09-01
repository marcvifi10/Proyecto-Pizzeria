@extends("layouts.backend")

@section("title")
{{trans("web.edit")}} {{strtolower(trans("web.user"))}}
@endsection

@section("content")
<div class="container">
    {{Form::open(['route' => ['admin.users.update', $user->id], 'method' => 'PUT'])}}
    <div class="form-group">
        {{Form::label('name', trans("web.name").":")}}
        {{Form::text('name', $user->name, ["class" => "form-control"])}}
        <?php
            if ($errors->has('name')) {
                echo "<div style='color: #ff0000'>".$errors->first('name')."</div>";
            }
        ?>
    </div>

    <div class="form-group">
        {{Form::label('email', trans("web.email").":")}}
        {{Form::email('email', $user->email, ["class" => "form-control"])}}
        <?php
            if ($errors->has('email')) {
                echo "<div style='color: #ff0000'>".$errors->first('email')."</div>";
            }
        ?>
    </div>

    <div class="form-group">
        {{Form::label('address', trans("web.address").":")}}
        {{Form::text('address', $user->address, ["class" => "form-control"])}}
        <?php
            if ($errors->has('address')) {
                echo "<div style='color: #ff0000'>".$errors->first('address')."</div>";
            }
        ?>
	</div>
	
	@if($user->id != Auth::user()->id)
		<div class="form-group">
			{{Form::label('type_user_id', trans("web.user_type").":")}}
			{{Form::select("type_user_id", $userTypes->pluck("name", "id"),
				$user->typeuser->id, array("placeholder" => trans("web.select_type_user"),
				"class" => "form-control"))}}
			<?php
			if ($errors->has('type_user_id')) {
				echo "<div style='color: #ff0000'>".$errors->first('type_user_id')."</div>";
			}
		?>
		</div>
	@endif

	<div class="form-group">
		{{Form::label('franchise_id', trans("web.franchise").":")}}
		{{Form::select("franchise_id", $franchises->pluck("name", "id"),
			$user->typeuser->id, array("placeholder" => trans("web.select_franchise"),
			"class" => "form-control"))}}
		<?php
		if ($errors->has('franchise_id')) {
			echo "<div style='color: #ff0000'>".$errors->first('franchise_id')."</div>";
		}
	?>
	</div>

    <div class="form-group">
        {{Form::submit(trans("web.submit"), ["class" => "btn btn-primary"])}}
	</div>

	<div class="form-group">
		<a href="{{route('admin.users.index')}}" class="btn btn-danger" role="button">
			{{trans("web.cancel")}}
		</a>
	</div>
    {{Form::close()}}
</div>
@endsection
