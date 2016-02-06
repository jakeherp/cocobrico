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
                      <div class="input-group">{!! Form::text('billingCompanyName', '', ['class' => 'input-group-field', 'placeholder' => 'Company *']) !!}</div>
                  </label>
                      <div class="input-group">{!! Form::text('billingFirstName', '', ['class' => 'input-group-field', 'placeholder' => 'First Name *']) !!}</div>
                      <div class="input-group">{!! Form::text('billingLastName', '', ['class' => 'input-group-field', 'placeholder' => 'Last Name *']) !!}</div>
                      <div class="input-group">{!! Form::text('taxID', '', ['class' => 'input-group-field', 'placeholder' => 'Tax ID']) !!}</div>
                  <label>
                  	Proof of Incorporation
                      <div class="input-group">{!! Form::file('proofOfIncorporation') !!}</div>
                  </label>
                  <label>
					Address
                      <div class="input-group">{!! Form::text('billingAddress1', '', ['class' => 'input-group-field', 'placeholder' => 'Address Line 1 *']) !!}</div>
                  </label>
                      <div class="input-group">{!! Form::text('billingAddress2', '', ['class' => 'input-group-field', 'placeholder' => 'Address Line 2']) !!}</div>
                      <div class="input-group">{!! Form::text('billingCity', '', ['class' => 'input-group-field', 'placeholder' => 'City *']) !!}</div>
                      <div class="input-group">{!! Form::text('billingPostCode', '', ['class' => 'input-group-field', 'placeholder' => 'Post Code *']) !!}</div>
                      <div class="input-group">{!! Form::select('billingCountry', $countries) !!}</div>
                  <label>
                  	Contact Details
                      <div class="input-group">{!! Form::text('billingPhone', '', ['class' => 'input-group-field', 'placeholder' => 'Telephone *']) !!}</div>
                  </label>
                      <div class="input-group">{!! Form::text('billingFax', '', ['class' => 'input-group-field', 'placeholder' => 'Fax']) !!}</div>

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