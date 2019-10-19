<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('First Name') }}" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="form-group">
        <input id="surname" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('surname') }}" required autocomplete="surname" placeholder="{{ __('Last Name') }}" autofocus>
        @error('surname')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="form-group">
        <input id="email" type="email" placeholder="{{ __('Email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="form-group">
        <input type="number" class="form-control" id="create-phone" placeholder="Phone Number">
    </div>
    <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="form-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
    </div>


    <div class="custom-control custom-checkbox form-group">
        <input name="is_candidate" type="checkbox" class="custom-control-input" id="is_candidate" value="1">
        <label class="custom-control-label" for="is_candidate">Candidate</label>

        <input name="is_recruiter" type="checkbox" class="custom-control-input" id="is_recruiter" value="1">
        <label class="custom-control-label" for="is_recruiter">Recruiter</label>
    </div>

    <input id="is_recruiter" type="hidden" class="form-control" name="name" value="1" required autocomplete="name" >

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="terms">
        <label class="form-check-label" for="create-terms">By Registering You Confirm That You Accept <a class="text-thm" href="page-terms-and-policies.html">Terms & Conditions</a> And <a class="text-thm" href="#">Privacy Policy</a></label>
    </div>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="terms">
        <label class="form-check-label" for="create-terms">By Registering You Confirm That You Accept <a class="text-thm" href="page-terms-and-policies.html">Terms & Conditions</a> And <a class="text-thm" href="#">Privacy Policy</a></label>
    </div>

    <button type="submit" class="btn btn-log btn-block btn-dark">{{ __('Register') }}</button>

    {{-- Social login here --}}
    @include('partials.auth.social')

</form>

<script>

    $(document).ready(function () {
        console.log('we fire here');
        $('input[type="checkbox"]').on('change', function() {
            $(this).siblings('input[type="checkbox"]').not(this).prop('checked', false);
        });
    });


</script>
