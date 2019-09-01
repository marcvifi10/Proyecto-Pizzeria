@extends("layouts.backend")

@section("title")
{{trans("web.franchises")}}
@endsection

<?php
	if (isset($_GET["search"]) && !empty($_GET["search"])) {
		$franchises = $franchises->reject(function ($franchise) {
                        return stripos($franchise->name, $_GET["search"]) === false;
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
            <a href="{{route('admin.franchises.create')}}" class="btn btn-primary" role="button">
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
                        <th>{{trans("web.address")}}</th>
                        <th>{{trans("web.phone")}}</th>
                        <th>{{trans("web.email")}}</th>
                        <th>{{trans("web.coordinates")}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($franchises as $franchise)
                    <tr>
                        <td>
                            <a href="{{route('admin.franchises.show', $franchise->id)}}">
                                {{$franchise->name}}
                            </a>
                        </td>
                        <td>{{$franchise->address}}</td>
                        <td>{{$franchise->phone}}</td>
                        <td>{{$franchise->email}}</td>
                        <td>{{$franchise->coordinates}}</td>
                        <td>
                            <a href="{{route('admin.franchises.edit', $franchise->id)}}" class="btn btn-primary" role="button">
                                {{trans("web.edit")}}
                            </a>
                        </td>
                        <td>
                            {{Form::open(['route' => ['admin.franchises.destroy', $franchise->id],
                                'method' => 'DELETE', "class" => "deleteForm"])}}
                            {{Form::submit(trans("web.delete"), ["class" => "btn btn-danger",
                                "data-text" => trans("web.confirm_delete")])}}
                            {{Form::close()}}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan=5>{{trans("web.franchises_not_found")}}</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
	</div>
</div>
@endsection
