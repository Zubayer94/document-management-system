@extends ('layouts.app')

@section('content')
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Reset password</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">You are only one step a way from your new password, recover your password now.
                    </p>
                    <form action="{{ route('post.reset.password') }}" method="post">
                        @csrf

                        <input name="token" type="hidden" value="{{ $token }}">
                        <div class="form-group mb-3">
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

                        <div class="form-group mb-3">
                            <div class="input-group">
                                <input name="password_confirmation" type="password" class="form-control"
                                    placeholder="Confirm Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Change password</button>
                            </div>
                        </div>
                    </form>

                    <p class="mt-3 mb-1">
                        <a href="{{ route('get.login') }}">Login</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
@endsection
