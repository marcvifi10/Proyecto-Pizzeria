@extends("layouts.backend")

@section("title")
{{trans("web.order_details")}}
@endsection

@section("content")
<div class="container">
	@if (!$order)
		<p>{{trans("web.orders_not_found")}}</p>
	@else
		<div class="col-sm-12">
			<h3>{{trans("web.order_details")}}</h3>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<th class="w-25">{{trans("web.client")}}</th>
					<td>{{$order->user->name}}</td>
				</tr>
				<tr>
					<th class="w-25">{{trans("web.address")}}</th>
					<td>{{$order->user->address}}</td>
				</tr>
				<tr>
					<th class="w-25">{{trans("web.state")}}</th>
					<td>{{$order->orderstate->name}}</td>
				</tr>
				<tr>
					<th class="w-25">{{trans("web.created_at")}}</th>
					<td>{{$order->created_at}}</td>
				</tr>
			</table>
		</div>
		<div class="col-sm-12">
			<h3>{{trans("web.state_history")}}</h3>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<th>{{trans("web.state")}}</th>
					<th>{{trans("web.date")}}</th>
				</tr>
				@forelse ($order->orderstate_history()->orderBy("created_at", "desc")->get() as $order_state)
					<tr>
						<td>{{$order_state->ordestate->name}}</td>
						<td>{{$order_state->created_at}}</td>
					</tr>
				@empty
					<td colspan=2>{{trans("web.order_lines_not_found")}}</td>
				@endforelse
			</table>
		</div>
		<div class="col-sm-12">
			<h3>{{trans("web.order_lines")}}</h3>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<th>{{trans("web.quantity")}}</th>
					<th>{{trans("web.product")}}</th>
				</tr>
				@forelse ($order->order_lines as $order_line)
					<tr>
						<td class="w-25">{{$order_line->quantify}}</td>
						<td>{{$order_line->product->name}}</td>
					</tr>
				@empty
					<td colspan=2>{{trans("web.order_lines_not_found")}}</td>
				@endforelse
			</table>
		</div>
	@endif
</div>
@endsection
