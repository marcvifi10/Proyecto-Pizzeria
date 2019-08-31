<div class="container-fluid" id="fons">
    <br>
	<div id="container-fluid color">
		<!-- Creem un 'div', per al contingut de la pàgina -->
		<div id="fons2" class="container content inici" style="min-height: 480px;">
			<!-- Deixem una fila buida, perquè hi hagi separació entre el menú i el contingut de la pàgina -->
			
			<!-- Creem una fila, que servirà per mostrar les diferents opcions que hi han per cada apartat del menú -->
			<!-- Al inici, per defecte, mostrarà un missatge de benvinguda -->
			<div class="row">
				<!-- Determinem la posició del menú -->
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-offset-2 col-lg-8">
                    <br><br>
                    <div class="card">
                        <div class="card-header">
                             <font size="5">
                                <strong>{{ trans('web.login') }}</strong>
                            </font>
                        </div>

                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                <font size="4">
                                    {{ trans('web.email') }}
                                </font>
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus height="48">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                <font size="4">
                                    {{ trans('web.password') }}
                                </font>
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus height="48">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-9 offset-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="margin-left: 20px;">
                                        <font size="2">{{ trans('web.remember') }}</font>
                                    </label>
                                </div>
                                <div class="col-md-10 offset-md-4">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            <font size="2">{{ trans('web.forgot_password') }}</font>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    <font size="3">{{ trans('web.enter') }}</font>
                                </button>
                            </div>
                        </div>
                    </form>

                    </div>
                    </div>
                </div>
			</div>
            <br><br>
		</div>
    </div>
    <br>
</div>
</div>		