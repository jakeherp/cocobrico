@extends('layouts.auth')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>Register</h3>
          
          <div class="alert progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
            <span class="progress-meter" style="width: 67%"></span>
          </div>

          @include ('errors.list')

            {!! Form::open(['url' => 'customer/create', 'method' => 'post', 'files' => true]) !!}
              <div class="row">
                <div class="large-12 columns">



                  <label>
                  	Company Details
                      <div class="input-group">{!! Form::text('company', '', ['class' => 'input-group-field', 'placeholder' => 'Company *']) !!}</div>

                      <div class="input-group">{!! Form::text('firstName', '', ['class' => 'input-group-field', 'placeholder' => 'First Name *']) !!}</div>
                      <div class="input-group">{!! Form::text('lastName', '', ['class' => 'input-group-field', 'placeholder' => 'Last Name *']) !!}</div>
                      <div class="input-group">{!! Form::text('taxId', '', ['class' => 'input-group-field', 'placeholder' => 'Tax ID']) !!}</div>
                  </label>
                  <label>
                  	Proof of Incorporation
                      <div class="input-group">{!! Form::file('proofOfIncorporation') !!}</div>
                  </label>
                  <label>
					Address
                      <div class="input-group">{!! Form::text('address1', '', ['class' => 'input-group-field', 'placeholder' => 'Address Line 1 *']) !!}</div>
                      <div class="input-group">{!! Form::text('address2', '', ['class' => 'input-group-field', 'placeholder' => 'Address Line 2']) !!}</div>
                      <div class="input-group">{!! Form::text('city', '', ['class' => 'input-group-field', 'placeholder' => 'City *']) !!}</div>
                      <div class="input-group">{!! Form::text('postCode', '', ['class' => 'input-group-field', 'placeholder' => 'Post Code *']) !!}</div>
                      <div class="input-group">{!! Form::select('country', $countries) !!}</div>
                  </label>
                  <label>
                  	Contact Details
                      <div class="input-group">{!! Form::text('phone', '', ['class' => 'input-group-field', 'placeholder' => 'Telephone *']) !!}</div>
                      <div class="input-group">{!! Form::text('fax', '', ['class' => 'input-group-field', 'placeholder' => 'Fax']) !!}</div>
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