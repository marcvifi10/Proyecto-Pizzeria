<div class="container-fluid" id="fons">
    <br>
	<div id="container-fluid color">
		<!-- Creem un 'div', per al contingut de la pàgina -->
		<div id="fons2" class="container content inici" style="min-height: 480px;">
			<!-- Deixem una fila buida, perquè hi hagi separació entre el menú i el contingut de la pàgina -->
			<div class="row">
				<div class="col-xs-12">
					<ol class="bredcrumb pull-left"></ol>
				</div>
			</div>
			<!-- Creem una fila, que servirà per mostrar les diferents opcions que hi han per cada apartat del menú -->
			<!-- Al inici, per defecte, mostrarà un missatge de benvinguda -->
			<div class="row">
				<!-- Determinem la posició del menú -->
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-offset-2 col-lg-8">
                    <br>
                    <div class="card">
                        <div class="card-header">
                             <font size="5">
                                <strong>{{ trans('web.register') }}</strong>
                            </font>
                        </div>

                    <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                <font size="4">
                                    {{ trans('web.nom') }}
                                </font>
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus height="48">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                <font size="4">
                                    {{ trans('web.confirm_password') }}
                                </font>
                            </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="new-password" autofocus height="48">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
						
						<div class="form-group row">
							<label for="address" class="col-md-4 col-form-label text-md-right">
								<font size="4">
									{{ trans('web.address') }}
								</font>
							</label>

							<div class="col-md-6">
								<input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus height="48">

								@error('address')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

                        <div class="form-group row">
                            <div class="col-md-9 offset-md-0">
                                
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    <font size="3">{{ trans('web.register_bottom') }}</font>
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