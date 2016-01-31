@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>Admin - Sign in</h3>

          @if ($errors->any())
              @foreach ($errors->all() as $error)
                <div class="callout alert">
                  {{ $error }}
                </div>
              @endforeach
          @endif

            {!! Form::open(['url' => 'admin', 'method' => 'post']) !!}
              <div class="row">
                <div class="large-12 columns">
                
				          <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                    {!! Form::text('username', session('username'), ['class' => 'input-group-field', 'placeholder' => 'Username']) !!}
                  </div>  
                  <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                    {!! Form::password('password', null, ['class' => 'input-group-field', 'placeholder' => 'Password']) !!}
                  </div>  
                  {!! Form::submit('Login', ['class' => 'button alert']) !!}
                  <div class="float-right text-right">
                  	<a href="#" class="text-right">Did you forget your password?</a>
                  </div>

                </div>
               </div>
            {!! Form::close() !!}              
                </div>
              </div>
            
            
        </div>
      </div>
    </section>
	
@endsection