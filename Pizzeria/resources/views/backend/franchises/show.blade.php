@extends("layouts.backend")

@section("title")
{{$franchise->name}}
@endsection

@section("content")
<div class="container">
	<div class="col-sm-12">
		<h3>{{trans("web.franchise_info")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th class="w-25">{{trans("web.name")}}</th>
				<td>{{$franchise->name}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.address")}}</th>
				<td>{{$franchise->address}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.phone")}}</th>
				<td>{{$franchise->phone}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.email")}}</th>
				<td>{{$franchise->email}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.coordinates")}}</th>
				<td>{{$franchise->coordinates}}</td>
			</tr>
		</table>
	</div>
	<div class="col-sm-12">
		<h3>{{trans("web.orders")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>{{trans("web.client")}}</th>
					<th>{{trans("web.state")}}</th>
				</tr>
			</thead>
			@forelse($franchise->orders as $order)
				<tr>
					<td>{{$order->user->name}}</td>
					<td>{{$order->orderstate->name}}</td>
				</tr>
			@empty
				<tr>
					<td colspan=2>{{trans("web.orders_not_found")}}</td>
				</tr>
			@endforelse
		</table>
	</div>
</div>
@endsection
