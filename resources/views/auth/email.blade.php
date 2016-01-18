@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>Sign in</h3>
          <p>Please enter your email address to get started.</p>

          @include ('errors.list')

            {!! Form::open(['method' => 'POST', action('Auth\TempUserController@create')]) !!}
              <div class="row">
                <div class="large-12 columns">
                
                  <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                    {!! Form::email('email', null, ['class' => 'input-group-field', 'placeholder' => 'Email Address']) !!}
                    <div class="input-group-button">
                      {!! Form::submit('Validate', ['class' => 'button alert']) !!}
                    </div>
                  </div>
                                
                </div>
              </div>
            {!! Form::close() !!}
            
        </div>
      </div>
    </section>
	
@endsection