@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>Verify your Email Adress</h3>
          <p>We sent an email to {{ $email }}. Please verify it by clicking on the link it contains. If you
          	havn't got a email, click this LINK to send a new one.</p>
          <p>
           <a href="register/step1/{{ $token }}">TEST</a>
          </p> 
        </div>
      </div>
    </section>
	
@endsection