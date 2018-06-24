   <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                  
                        <h1>Ingresar al sistema</h1>

                        <div>
                            <input id="email" type="email" class="form-control" name="email" 
                                   required >
                        </div>
                        <div>
                            <input id="password" type="password" class="form-control" name="password"
                                   required>
                        </div>
                        <div class="checkbox al_left">
                            <label>
                                <input type="checkbox"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}> recordarme
                            </label>
                        </div>

                        <div>
                            <button class="btn btn-default submit" type="submit">Ingresar</button>
                            <a class="reset_pass" href="{{ route('password.request') }}">
                                Olvidaste tu contraseña?
                            </a>
                        </div>

                        <div class="clearfix"></div>

                            <div class="separator">



                                <div class="clearfix"></div>
                                <br/>

                                <div>
                                    <div class="h1">{{ config('app.name') }}</div>
                                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.login.copyright') }}</p>
                                </div>
                            </div>
                        @endif
                    {{ Form::close() }}
                </section>
            </div>
        </div>
    </div>