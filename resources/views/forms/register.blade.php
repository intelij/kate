<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('First Name*') }}" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="form-group">
        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" placeholder="{{ __('Last Name') }}" autofocus>
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
        <input id="telephone" type="phone" placeholder="{{ __('Phone Number') }}" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">
        @error('telephone')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
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
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="terms"  name="terms" value="1">
        <label class="form-check-label" for="create-terms">By Registering You Confirm That You Accept <a class="text-thm" href="#">Terms & Conditions</a> And <a class="text-thm" href="#">Privacy Policy</a></label>
    </div>

    <input id="is_candidate" type="hidden" class="form-control" name="is_candidate" value="1" required autocomplete="is_candidate" >
    <input id="is_recruiter" type="hidden" class="form-control" name="is_recruiter" value="0" required autocomplete="is_recruiter" >

    <button type="submit" class="btn btn-log btn-block btn-dark">{{ __('Register') }}</button>

    {{-- Social login here --}}
    @include('partials.auth.social')

</form>

