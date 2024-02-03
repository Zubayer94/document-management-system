@extends ('layouts.app')

@section('content')
    <div class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form action="{{ route('post.login') }}" method="post">
                        @csrf

                        <div class="form-group  mb-3">
                            <div class="input-group">
                                <x-input-text name="email" type="email" class="form-control" placeholder="Email"
                                    value="{{ old('email') }}" />
                                <x-input-icon class="fas fa-envelope" />
                            </div>
                            <!-- Error Message -->
                            <x-input-error :message="$errors->first('email')" />
                            @error('email')
                                <small id="passwordError" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group  mb-3">
                            <div class="input-group">
                                <input name="password" type="password" class="form-control" placeholder="Password" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Error Message -->
                            @error('password')
                                <small id="passwordError" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="row">
                            {{-- <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember" />
                                    <label for="remember"> Remember Me </label>
                                </div>
                            </div> --}}
                            <!-- /.col -->
                            <div class="col-4 mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Sign In
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    {{-- <div class="social-auth-links text-center mt-2 mb-3">
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                    </div> --}}
                    <!-- /.social-auth-links -->

                    <p class="mb-1 mt-2">
                        <a href="{{ route('get.forgot.password') }}">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="{{ route('get.signup') }}" class="text-center">Register a new membership</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
    </div>
@endsection
