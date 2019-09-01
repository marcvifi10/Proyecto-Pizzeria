@extends("layouts.app")

@section("title")
{{trans("web.order_details")}}
@endsection

@section("content")
<div class="container-fluid" id="fons">
    <br>
	<div id="container color">
	<div id="fons2" class="container content inici" style="min-height: 480px;">
	@if (!$order)
		<br>
		<p>{{trans("web.orders_not_found")}}</p>
	@else
		<div class="col-sm-12">
			<br>
			<font size="5">{{trans("web.order_details")}}</font>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td class="w-25" align="center">
						<font size="4">
							<strong>{{trans("web.code")}}</strong>
						</font>
					</td>
					<td>{{$order->id}}</td>
				</tr>
				<tr>
					<td class="w-25" align="center">
						<font size="4">
							<strong>{{trans("web.franchise")}}</strong>
						</font>
					</td>
					<td>{{$order->franchise->name}}</td>
				</tr>
				<tr>
					<td class="w-25" align="center">
						<font size="4">
							<strong>{{trans("web.address")}}</strong>
						</font>
					</td>
					<td>
						{{$order->franchise->address}}
					</td>
				</tr>
				<tr>
					<td class="w-25" align="center">
						<font size="4">
							<strong>{{trans("web.state")}}</strong>
						</font>
					</td>
					<td>
						{{$order->orderstate->name}}
					</td>
				</tr>
			</table>
		</div>
		<div class="col-sm-12">
			<font size="5">{{trans("web.state_history")}}</font>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td align="center">
						<font size="4">
							<strong>{{trans("web.state")}}</strong>
						</font>
					</td>
					<td align="center">
						<font size="4">
							<strong>{{trans("web.date")}}</strong>
						</font>
					</td>
				</tr>
				@forelse ($order->orderstate_history()->orderBy("created_at", "desc")->get() as $order_state)
					<tr>
						<td align="center">{{$order_state->ordestate->name}}</td>
						<td>{{$order_state->created_at}}</td>
					</tr>
				@empty
					<td colspan=2>
						<br>
						{{trans("web.order_lines_not_found")}}
					</td>
				@endforelse
			</table>
		</div>
		<div class="col-sm-12">
			<br>
			<font size="5">{{trans("web.order_lines")}}</font>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td align="center">
						<font size="4">
							<strong>{{trans("web.quantity")}}</strong>
						</font>
					</td>
					<td align="center">
						<font size="4">
							<strong>{{trans("web.product")}}</strong>
						</font>
					</td>
				</tr>
				@forelse ($order->order_lines as $order_line)
					<tr>
						<td class="w-25" align="center">{{$order_line->quantify}}</td>
						<td>{{$order_line->product->name}}</td>
					</tr>
				@empty
					<td colspan=2 align="center">
						<br>
						{{trans("web.order_lines_not_found")}}
						<br><br>
					</td>
				@endforelse
			</table>
		</div>
	@endif
	</div>
	<br>
</div>
</div>
@endsection
