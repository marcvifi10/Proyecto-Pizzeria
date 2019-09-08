@extends("layouts.backend")

@section("title")
{{$ingredient->name}}
@endsection

@section("content")
<div class="container">
	<div class="col-sm-12">
		<h3>{{trans("web.ingredient_info")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th class="w-25">{{trans("web.name")}}</th>
				<td>{{$ingredient->name}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.description")}}</th>
				<td>{{$ingredient->description}}</td>
			</tr>
		</table>
	</div>
	<div class="col-sm-12">
		<h3>{{trans("web.products")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>{{trans("web.name")}}</th>
					<th>{{trans("web.price")}}</th>
					<th>{{trans("web.category")}}</th>
					<th>{{trans("web.description")}}</th>
				</tr>
			</thead>
			@forelse($ingredient->products as $product)
				<tr>
					<td>{{$product->name}}</td>
					<td>{{$product->price}}</td>
					<td>{{$product->productcategory->name}}</td>
					<td>{{$product->description}}</td>
				</tr>
			@empty
				<tr>
					<td colspan=4>{{trans("web.products_not_found")}}</td>
				</tr>
			@endforelse
		</table>
	</div>
</div>
@endsection
