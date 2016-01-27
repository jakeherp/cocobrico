@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>Register</h3>
          
          <div class="alert progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
            <span class="progress-meter" style="width: 33%"></span>
          </div>

          @include ('errors.list')

            {!! Form::open(['url' => 'register', 'method' => 'post']) !!}
              {!! Form::hidden('_method', 'PUT', []) !!}
              {!! Form::hidden('register_token', $user->register_token, []) !!}
              <div class="row">
                <div class="large-12 columns">
                
				          <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                    {!! Form::email('email', $user->email, ['class' => 'input-group-field', 'placeholder' => 'Email Address', 'readonly']) !!}
                  </div>
                  <label>
                  	Please choose a password
                    <div class="input-group">
                      <span class="input-group-label"><i class="fa fa-lock"></i></span>
                      {!! Form::password('password_1', null, ['class' => 'input-group-field', 'placeholder' => 'Password']) !!}
                    </div>
                    <div class="input-group">
                      <span class="input-group-label"><i class="fa fa-lock"></i></span>
                      {!! Form::password('password_2', null, ['class' => 'input-group-field', 'placeholder' => 'Password wiederholen']) !!}
                    </div>
                  </label>
                  
                  <label>
                  	Your business
                    {!! Form::select('business', array('wholesale' => 'Wholesale', 'retail' => 'Retail', 'lounge' => 'Lounge / Bar', 'other' => 'Other'), 'wholesale') !!}
                  </label>
                  {!! Form::submit('Continue &raquo;', ['class' => 'button alert']) !!}
                    </div>
                  </div>
                                
                </div>
              </div>
            {!! Form::close() !!}
            
        </div>
      </div>
    </section>
	
@endsection