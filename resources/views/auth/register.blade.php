@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>Register</h3>
          <p>Please fill in the form!</p>

          @include ('errors.list')

            {!! Form::open([action('Auth\AuthController@create', $tempUser->token)]) !!}
              <div class="row">
                <div class="large-12 columns">
                
				          <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                    {!! Form::email('email', $tempUser->email, ['class' => 'input-group-field', 'placeholder' => 'Email Address', 'readonly']) !!}
                  </div>
                  <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                    {!! Form::text('token', $tempUser->token, ['class' => 'input-group-field', 'placeholder' => 'Token', 'readonly']) !!}
                  </div>
                  <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                    {!! Form::password('password_1', null, ['class' => 'input-group-field', 'placeholder' => 'Password']) !!}
                  </div>
                  <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                    {!! Form::password('password_2', null, ['class' => 'input-group-field', 'placeholder' => 'Password wiederholen']) !!}
                  </div>
                  {!! Form::submit('Register', ['class' => 'button alert']) !!}

                    </div>
                  </div>
                                
                </div>
              </div>
            {!! Form::close() !!}
            
        </div>
      </div>
    </section>
	
@endsection