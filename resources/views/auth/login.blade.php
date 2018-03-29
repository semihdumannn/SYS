
@extends('layouts.masterpage')

@section('css')
    <!-- Animate.css -->
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">
@endsection

@section('login')
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>{{ __('Sisteme Giriş') }}</h1>
                        <div {{ $errors->has('email') ? ' is-invalid' : '' }}>
                            <input type="email" name="email" class="form-control" placeholder="E-mail adresiniz" required="" />
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="{{ $errors->has('password') ? ' is-invalid' : '' }}">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div>
                            <input type="checkbox" name="remember" class="form-control" {{ old('remember') ? 'checked' : '' }}> {{ __('Beni Hatırla') }}
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit" >{{ __('Giriş') }}</button>
                            <a class="reset_pass" href="#">Parolamı Unuttum?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">


                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Sigorta Yönetim Sistemi!</h1>
                                <p>©{{ date('Y') }} All Rights Reserved. SYS! bir Semih DUMAN programıdır.</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Animate.css -->
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">
@endsection




