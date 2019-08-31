@extends("layouts.backend")

@section("title")
{{trans("web.menus")}}
@endsection

<?php
	if (isset($_GET["search"]) && !empty($_GET["search"])) {
		$menus = $menus->reject(function ($menu) {
                        return stripos($menu->name, $_GET["search"]) === false;
                    });
	}
?>

@section("script")
<script src="{{ asset('js/confirm_delete.js') }}" defer></script>
<script src="{{ asset('js/update_content_search.js') }}" defer></script>
@endsection

@section("style")
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
	integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
	crossorigin="anonymous">
<link href="{{ asset('css/backend_index.css') }}" rel="stylesheet">
@endsection

@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <a href="{{route('admin.menus.create')}}" class="btn btn-primary" role="button">
                <span class="buttonText">{{trans("web.create")}}</span>
            </a>
        </div>
        <div class="col-sm-10">
            @include("partials.backend_searchbar")
        </div>
    </div>
	<div class="row" id="content">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>{{trans("web.name")}}</th>
                        <th>{{trans("web.price")}}</th>
                        <th>{{trans("web.description")}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menus as $menu)
                    <tr>
                        <td>
                            <a href="{{route('admin.menus.show', $menu->id)}}">
                                {{$menu->name}}
                            </a>
                        </td>
                        <td>{{$menu->price}}</td>
                        <td class="w-50">{{$menu->description}}</td>
                        <td>
                            <a href="{{route('admin.menus.edit', $menu->id)}}" class="btn btn-primary" role="button">
                                {{trans("web.edit")}}
                            </a>
                        </td>
                        <td>
                            {{Form::open(['route' => ['admin.menus.destroy', $menu->id],
                                'method' => 'DELETE', "class" => "deleteForm"])}}
                            {{Form::submit(trans("web.delete"), ["class" => "btn btn-danger",
                                "data-text" => trans("web.confirm_delete")])}}
                            {{Form::close()}}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan=3>{{trans("web.menus_not_found")}}</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
	</div>
</div>
@endsection
