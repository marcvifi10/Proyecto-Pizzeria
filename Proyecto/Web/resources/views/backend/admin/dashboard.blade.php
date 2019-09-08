@extends("layouts.backend")

@section("title")
{{trans("web.dashboard")}}
@endsection

@section("style")
<link href="{{ asset('css/stretched_link.css') }}" rel="stylesheet">
<style>
	.card {
		margin-top: 10px;
	}
</style>
@endsection

@section("content")
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="card text-center">
				<a href="{{route('admin.franchises.index')}}" class="stretched-link"></a>
				<div class="card-header">
					{{trans("web.franchises")}}
				</div>
				<div class="card-body">
					{{$data["franchises"]}}
				</div> 
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-center">
				<a href="{{route('admin.products.index')}}" class="stretched-link"></a>
				<div class="card-header">
					{{trans("web.products")}}
				</div>
				<div class="card-body">
					{{$data["products"]}}
				</div> 
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-center">
				<a href="{{route('admin.product_categories.index')}}" class="stretched-link"></a>
				<div class="card-header">
					{{trans("web.product_categories")}}
				</div>
				<div class="card-body">
					{{$data["product_categories"]}}
				</div> 
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-center">
				<a href="{{route('admin.ingredients.index')}}" class="stretched-link"></a>
				<div class="card-header">
					{{trans("web.ingredients")}}
				</div>
				<div class="card-body">
					{{$data["ingredients"]}}
				</div> 
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-center">
				<a href="{{route('admin.ingredient_categories.index')}}" class="stretched-link"></a>
				<div class="card-header">
					{{trans("web.ingredient_categories")}}
				</div>
				<div class="card-body">
					{{$data["ingredient_categories"]}}
				</div> 
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-center">
				<a href="{{route('admin.menus.index')}}" class="stretched-link"></a>
				<div class="card-header">
					{{trans("web.menus")}}
				</div>
				<div class="card-body">
					{{$data["menus"]}}
				</div> 
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-center">
				<a href="{{route('admin.users.index')}}" class="stretched-link"></a>
				<div class="card-header">
					{{trans("web.users")}}
				</div>
				<div class="card-body">
					{{$data["users"]}}
				</div> 
			</div>
		</div>
	</div>
</div>
@endsection