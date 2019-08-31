@extends("layouts.backend")

@section("title")
{{$category->name}}
@endsection

@section("content")
<div class="container">
	<div class="col-sm-12">
		<h3>{{trans("web.category_info")}}</h3>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th class="w-25">{{trans("web.name")}}</th>
				<td>{{$category->name}}</td>
			</tr>
			<tr>
				<th class="w-25">{{trans("web.description")}}</th>
				<td>{{$category->description}}</td>
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
			@forelse($category->ingredients as $ingredient)
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
