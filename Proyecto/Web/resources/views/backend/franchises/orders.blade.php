
@extends("layouts.backend")

@section("title")
{{trans("web.orders")}}
@endsection

@section("script")
<script src="{{ asset('js/table_row_link.js') }}" defer></script>
@endsection

@section("content")
<div class="container">
	<div class="col-sm-12">
		<h3>{{trans("web.orders")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>{{trans("web.client")}}</th>
					<th>{{trans("web.address")}}</th>
					<th>{{trans("web.state")}}</th>
					<th>{{trans("web.created_at")}}</th>
				</tr>
			</thead>
			@forelse($franchise->orders()->orderby("created_at", "desc")->get() as $order)
				<tr class="tableRowLink" data-href="{{route('franchise.orderDetails', $order->id)}}">
					<td>{{$order->user->name}}</td>
					<td>{{$order->user->address}}</td>
					<td>{{$order->orderstate->name}}</td>
					<td>{{$order->created_at}}</td>
				</tr>
			@empty
				<tr>
					<td colspan=4>{{trans("web.orders_not_found")}}</td>
				</tr>
			@endforelse
		</table>
	</div>
</div>
@endsection
