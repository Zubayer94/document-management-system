@extends ('layouts.app')

@section('content')
    <div class="hold-transition register-page">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{ route('get.signup') }}" class="h1"><b>Register</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Register a new membership</p>

                    <form action="{{ route('post.signup') }}" method="post">
                        @csrf

                        <div class="form-group  mb-3">
                            <div class="input-group">
                                <input name="name" type="text" class="form-control" placeholder="Full name"
                                    value="{{ old('name') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Error Message -->
                            @error('name')
                                <small id="nameError" class="form-text text-danger"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group  mb-3">
                            <div class="input-group">
                                <input name="email" type="email" class="form-control" placeholder="Email"
                                    value="{{ old('email') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Error Message -->
                            @error('email')
                                <small id="emailError" class="form-text text-danger"> {{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group  mb-3">
                            <div class="input-group">
                                <input name="password" type="password" class="form-control" placeholder="Password">
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

                        <div class="form-group  mb-3">
                            <div class="input-group">
                                <input name="password_confirmation" type="password" class="form-control"
                                    placeholder="Retype password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div> --}}
                            <!-- /.col -->
                            <div class="col-4 mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                        </div>
                    </form>

                    {{-- <div class="social-auth-links text-center">
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i>
                            Sign up using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i>
                            Sign up using Google+
                        </a>
                    </div> --}}

                    <a href="{{ route('get.login') }}" class="text-center mt-3">I already have a membership</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
    </div>
@endsection
