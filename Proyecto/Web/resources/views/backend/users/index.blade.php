@extends("layouts.backend")

@section("title")
{{trans("web.users")}}
@endsection

<?php
	if (isset($_GET["search"]) && !empty($_GET["search"])) {
		$users = $users->reject(function ($user) {
                        return stripos($user->name, $_GET["search"]) === false;
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
        <div class="col-sm-12">
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
                        <th>{{trans("web.email")}}</th>
                        <th>{{trans("web.user_type")}}</th>
                        <th>{{trans("web.franchise")}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>
                            <a href="{{route('admin.users.show', $user->id)}}">
                                {{$user->name}}
                            </a>
                        </td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->typeuser->name}}</td>
                        <td>{{$user->franchise->name}}</td>
                        <td>
                            <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary" role="button">
                                {{trans("web.edit")}}
                            </a>
                        </td>
                        @if ($user->id != Auth::user()->id)
                            <td>
                                {{Form::open(['route' => ['admin.users.destroy', $user->id],
                                    'method' => 'DELETE', "class" => "deleteForm"])}}
                                {{Form::submit(trans("web.delete"), ["class" => "btn btn-danger",
                                    "data-text" => trans("web.confirm_delete")])}}
                                {{Form::close()}}
                            </td>
                        @endif
                    </tr>
                    @empty
                    <tr>
                        <td colspan=5>{{trans("web.users_not_found")}}</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
	</div>
</div>
@endsection
