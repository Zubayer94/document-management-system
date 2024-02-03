<h3>Reset password</h3>

Hey, {{ $name }}
this is your password reset link:
<a href="{{ route('get.reset.password', $token) }}">Reset password</a>
