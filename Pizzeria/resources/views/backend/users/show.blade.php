@extends("layouts.backend")

@section("title")
{{$user->name}}
@endsection

@section("content")
<div class="container">
	<div class="col-sm-12">
		<h3>{{trans("web.user_info")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th class="w-25">{{trans("web.name")}}</th>
				<td>{{$user->name}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.address")}}</th>
				<td>{{$user->address}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.email")}}</th>
				<td>{{$user->email}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.user_type")}}</th>
				<td>{{$user->typeuser->name}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.franchise")}}</th>
				<td>{{$user->franchise->name}}</td>
			</tr>
		</table>
	</div>
</div>
@endsection
