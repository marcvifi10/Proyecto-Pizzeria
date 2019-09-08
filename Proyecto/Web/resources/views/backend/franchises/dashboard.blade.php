@extends("layouts.backend")

@section("title")
{{trans("web.dashboard")}}
@endsection

@section("style")
<link href="{{ asset('css/stretched_link.css') }}" rel="stylesheet">
<link href="{{ asset('css/order_states.css') }}" rel="stylesheet">
<style>
	.card {
		margin-top: 10px;
	}
	.table {
		margin-bottom: 0px;
	}
</style>
@endsection

@section("script")
<script src="{{ asset('js/refresh_page.js') }}" defer></script>
@endsection

@section("content")
<div class="container">
	<div class="row">
		@forelse($orders as $order)
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="card text-center">
					<a href="{{route('franchise.nextState', $order->id)}}" class="stretched-link"></a>
					<div class="card-header">
						<div class="col-sm-12">
							{{trans("web.client")}}: {{$order->user->name}}
						</div>
						<div class="col-sm-12">
							{{trans("web.address")}}: {{$order->user->address}}
						</div>
					</div>
					<div class="card-body {{strtolower($order->orderstate->name)}}">
						<div class="col-sm-12">
							<p>{{trans("web.order_state")}}:</p>
							<h2>{{$order->orderstate->name}}</h2>
						</div>
					</div>
					<div>
						<table class="table table-striped table-bordered table-hover">
							@forelse ($order->order_lines as $order_line)
								<tr>
									<td class="w-25">{{$order_line->quantify}}</td>
									<td>{{$order_line->product->name}}</td>
								</tr>
							@empty
								<tr><td>{{trans("web.order_lines_not_found")}}</td></tr>
							@endforelse
						</table>
					</div>
				</div>
			</div>
		@empty
			<p>{{trans("web.orders_not_found")}}</p>
		@endforelse
	</div>
</div>
@endsection