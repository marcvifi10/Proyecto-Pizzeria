@extends("layouts.backend")

@section("title")
{{$menu->name}}
@endsection

@section("content")
<div class="container">
	<div class="col-sm-12">
		<h3>{{trans("web.menu_info")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th class="w-25">{{trans("web.name")}}</th>
				<td>{{$menu->name}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.price")}}</th>
				<td>{{$menu->price}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.description")}}</th>
				<td>{{$menu->description}}</td>
			</tr>
		</table>
	</div>
	<div class="col-sm-12">
		<h3>{{trans("web.products")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>{{trans("web.name")}}</th>
					<th>{{trans("web.description")}}</th>
				</tr>
			</thead>
			@forelse($menu->products as $product)
				<tr>
					<td>{{$product->name}}</td>
					<td>{{$product->description}}</td>
				</tr>
			@empty
				<tr>
					<td colspan=2>{{trans("web.products_not_found")}}</td>
				</tr>
			@endforelse
		</table>
	</div>
</div>
@endsection
