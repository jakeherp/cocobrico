@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>{{ trans('auth.signup') }}</h3>
          
          <div class="alert progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
            <span class="progress-meter" style="width: 67%"></span>
          </div>

          @include ('errors.list')

            {!! Form::open(['url' => 'register/step3', 'method' => 'post', 'files' => true]) !!}
              <div class="row">
                <div class="large-12 columns">

                  <label>
                  	{{ trans('auth.companydetails') }}
                      <div class="input-group">{!! Form::text('company', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.company') }} *']) !!}</div>

                      <div class="input-group">{!! Form::text('firstName', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.firstname') }} *']) !!}</div>
                      <div class="input-group">{!! Form::text('lastName', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.lastname') }} *']) !!}</div>
                      <div class="input-group">{!! Form::text('taxId', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.taxid') }}']) !!}</div>
                  </label>
                  <label>
                  	{{ trans('auth.proofofincorporation') }}
                      <div class="input-group">{!! Form::file('proofOfIncorporation') !!}</div>
                  </label>
                  <label>
				          	{{ trans('auth.address') }}
                      <div class="input-group">{!! Form::text('address1', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.address1') }} *']) !!}</div>
                      <div class="input-group">{!! Form::text('address2', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.address2') }}]) !!}</div>
                      <div class="input-group">{!! Form::text('city', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.city') }} *']) !!}</div>
                      <div class="input-group">{!! Form::text('postCode', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.postcode') }} *']) !!}</div>
                      <div class="input-group">{!! Form::select('country', array('ISO' => 'NAME')) !!}</div>
                  </label>
                  <label>
                  	{{ trans('auth.contactdetails') }}
                      <div class="input-group">{!! Form::text('phone', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.phone') }} *']) !!}</div>
                      <div class="input-group">{!! Form::text('fax', '', ['class' => 'input-group-field', 'placeholder' => '{{ trans('auth.fax') }}']) !!}</div>
                  </label>

                  {!! Form::submit('{{ trans('auth.continue') }} &raquo;', ['class' => 'button alert']) !!}

                    </div>
                  </div>
                                
                </div>
              </div>
            {!! Form::close() !!}
            
        </div>
      </div>
    </section>
	
@endsection