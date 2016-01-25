@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>{{ trans('auth.signup') }}</h3>

          <div class="alert progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
            <span class="progress-meter" style="width: 33%"></span>
          </div>

          <h4>{{ trans('auth.activateemail') }}</h4>
          <p>{{ trans('auth.activateemaildesc') }}</p>
          <p>
           <a href="register/step1/{{ $token }}">TEST</a>
          </p> 
        </div>
      </div>
    </section>
	
@endsection