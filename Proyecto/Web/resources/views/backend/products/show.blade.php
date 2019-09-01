@extends("layouts.backend")

@section("title")
{{$product->name}}
@endsection

@section("content")
<div class="container">
	<div class="col-sm-12">
		<h3>{{trans("web.product_info")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th class="w-25">{{trans("web.name")}}</th>
				<td>{{$product->name}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.price")}}</th>
				<td>{{$product->price}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.category")}}</th>
				<td>{{$product->productcategory->name}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.description")}}</th>
				<td>{{$product->description}}</td>
			</tr>
		</table>
	</div>
	<div class="col-sm-12">
		<h3>{{trans("web.ingredients")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>{{trans("web.name")}}</th>
					<th>{{trans("web.description")}}</th>
				</tr>
			</thead>
			@forelse($product->ingredients as $ingredient)
				<tr>
					<td>{{$ingredient->name}}</td>
					<td>{{$ingredient->description}}</td>
				</tr>
			@empty
				<tr>
					<td colspan=2>{{trans("web.ingredients_not_found")}}</td>
				</tr>
			@endforelse
		</table>
	</div>
</div>
@endsection
