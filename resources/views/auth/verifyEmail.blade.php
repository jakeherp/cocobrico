@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>Verify your email address</h3>
          <div class="success callout">
            <p>We have sent a confirmation link to {{ $user->email }}. Please verify your email address to proceed the registration process. In case you have not received an email, please check your junk folder or click <a href="#">here</a> to resend the confirmation email.</p>
          </div>
        </div>
      </div>
    </section>
	
@endsection