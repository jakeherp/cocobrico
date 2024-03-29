@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>{{ trans('auth.signup') }}</h3>
          
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
                    {!! Form::email('email', $user->email, ['class' => 'input-group-field', 'placeholder' => trans('auth.email'), 'readonly']) !!}
                  </div>
                  <label>
                  	{{ trans('auth.choosepassword') }}
                    <div class="input-group">
                      <span class="input-group-label"><i class="fa fa-lock"></i></span>
                      {!! Form::password('password', ['id' => 'passwordInput', 'class' => 'input-group-field', 'placeholder' => trans('auth.password')]) !!}
                    </div>
                    <div id="password" class="callout warning">
                    </div>
                  </label>
                    <div class="input-group">
                      <span class="input-group-label"><i class="fa fa-lock"></i></span>
                      {!! Form::password('password_2', ['class' => 'input-group-field', 'placeholder' => trans('auth.passwordrepeat')]) !!}
                    </div>
                  
                  <label>
                  	{{ trans('auth.business') }}
                    {!! Form::select('business', array('wholesale' => trans('auth.wholesale'), 'retail' => trans('auth.retail'), 'lounge' => trans('auth.lounge'), 'other' => trans('auth.other')), 'wholesale') !!}
                  </label>
                  {!! Form::submit(trans('auth.continue') . ' &raquo;', ['class' => 'button alert']) !!}
                    </div>
                  </div>
                                
                </div>
              </div>
            {!! Form::close() !!}
            
        </div>
      </div>
    </section>

    <script>
      $(document).ready(function(){
        $('#passwordInput').on('input',function(e){
          var val = $(this).val();
          var error = '';
          if((val.length < 8) || !(val.match(/[A-Z]/)) || !(val.match(/[a-z]/)) || !(val.match(/\d/))){
            if(val.length < 8){
              error = '<p>{{ trans('auth.rule1') }}</p>';
            }
            if(!(val.match(/[A-Z]/))){
              error = error + '<p>{{ trans('auth.rule2') }}</p>';
            }
            if(!(val.match(/[a-z]/))){
              error = error + '<p>{{ trans('auth.rule3') }}</p>';
            }
            if(!(val.match(/\d/))){
              error = error + '<p>{{ trans('auth.rule4') }}</p>';
            }
            $('#password').show('slow');
          }
          else{
             $('#password').hide('slow');
          }
          $('#password').html(error);
        });
      });
    </script>
	
@endsection