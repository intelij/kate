<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="heading">
        <h3 class="text-center">Quick Login</h3>
        <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
    </div>
    <div class="form-group">
        <input id="email" type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        @error('password')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="form-group form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="login-remember">Remember me</label>
        <a class="tdu text-thm float-right" data-toggle="modal" data-target="#forgotPasswordModal" href="#">Forgot Password?</a>
    </div>
    <button type="submit" class="btn btn-log btn-block btn-thm">Login</button>

    {{-- Social login here --}}
    @include('partials.auth.social')

</form>

<script>
    // $(function () {
    //     console.log('we fire here');
    //     $('input[type="checkbox"]').on('change', function() {
    //         $(this).siblings('input[type="checkbox"]').not(this).prop('checked', false);
    //     });
    // });

    (function() {
        // your page initialization code here
        // the DOM will be available here
        console.log('we fire here');

    })();

</script>
