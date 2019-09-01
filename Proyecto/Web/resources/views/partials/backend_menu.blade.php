<nav class="navbar navbar-expand bg-dark navbar-dark">
	<ul class="navbar-nav mr-auto">
		@if (Auth::user()->typeuser->name == "admin")
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.dashboard')}}">
					{{trans("web.dashboard")}}
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.franchises.index')}}">
					{{trans("web.franchises")}}
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.products.index')}}">
					{{trans("web.products")}}
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.product_categories.index')}}">
					{{trans("web.product_categories")}}
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.ingredients.index')}}">
					{{trans("web.ingredients")}}
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.ingredient_categories.index')}}">
					{{trans("web.ingredient_categories")}}
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.menus.index')}}">
					{{trans("web.menus")}}
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.users.index')}}">
					{{trans("web.users")}}
				</a>
			</li>
		@elseif(Auth::user()->typeuser->name == "franchise")
			<li class="nav-item">
				<a class="nav-link" href="{{route('franchise.dashboard')}}">
					{{trans("web.dashboard")}}
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('franchise.orders')}}">
					{{trans("web.orders")}}
				</a>
			</li>
		@endif
	</ul>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" href="{{route('logout')}}">
				{{trans("web.logout")}}
			</a>
		</li>
	</ul>
</nav>