@extends('layouts.app')

@section('content')

    <section class="row" id="content">

	    <div class="large-12 column">
        
      	<h1><i class="fa fa-cog"></i> Settings</h1>
      </div>

      <div class="large-8 medium-6 small-12 columns">
        <div class="callout">
          <div class="row">
            <div class="large-12 column">
              <button class="success button pull-right" data-open="editAddress"><i class="fa fa-plus"></i> Add address</button>
              <h4>Addresses</h4>

              <div class="callout warning">If you make changes to your existing addresses, the account will be suspended until the address change has been approved by a member of staff.</div>
            </div>
          </div>
          <div class="row"> 
          @foreach($user->getActiveIdentity()->addresses as $address)
            <div class="large-6 medium-12 columns">
              <h5>Billing Address</h5>
              <a class="tiny secondary button pull-right" data-open="editAddress">Edit</a>
              <strong>{{ $address->companyName }}</strong><br>
              {{ $address->firstName }} {{ $address->lastName }}<br>
              {{ $address->address1 }}<br>
              {{ $address->address2 }}<br>
              {{ $address->city }}<br>
              {{ $address->postCode }}<br>
              {{ $address->country->name }}
            </div>
            <div class="large-6 medium-12 columns">
              <h5>Shipping Address</h5>
              <a class="tiny secondary button pull-right" data-open="editAddress">Edit</a>
              <strong>{{ $address->companyName }}</strong><br>
              {{ $address->firstName }} {{ $address->lastName }}<br>
              {{ $address->address1 }}<br>
              {{ $address->address2 }}<br>
              {{ $address->city }}<br>
              {{ $address->postCode }}<br>
              {{ $address->country->name }}
            </div>
          @endforeach
          </div>
        </div>
      </div>
      <div class="large-4 medium-6 small-12 columns">
        <div class="callout">
          <div class="row">
            <div class="large-12 column">
              <h4>Account Details</h4>
              <a class="tiny secondary button pull-right" data-open="editAccount">Edit</a>
              <strong>Name:</strong> {{ $user->firstname }} {{ $user->lastname }}<br>
              <strong>Email:</strong> {{ $user->email }}<br>
              <strong>Password:</strong> ********<br>
              <strong>Proof of Incorporation:</strong> <a href="#">Download</a><br>
              <strong>Type of Business:</strong> Wholesale
            </div>
          </div>
        </div>
      </div>

    </section>

      
      <div class="reveal" id="editAddress" data-reveal>
        <h3>Change Billing Address</h3>

                  <label>
                    Company Details
                      <div class="input-group">{!! Form::text('companyName', '', ['class' => 'input-group-field', 'placeholder' => 'Company *', 'value' => $address->companyName]) !!}</div>
                  </label>
                      <div class="input-group">{!! Form::text('firstName', '', ['class' => 'input-group-field', 'placeholder' => 'First Name *', 'value' => $address->firstName]) !!}</div>
                      <div class="input-group">{!! Form::text('lastName', '', ['class' => 'input-group-field', 'placeholder' => 'Last Name *', 'value' => $address->lastName]) !!}</div>
                      <div class="input-group">{!! Form::text('taxID', '', ['class' => 'input-group-field', 'placeholder' => 'Tax ID']) !!}</div>
                  <label>
                    Proof of Incorporation
                      <div class="input-group">{!! Form::file('proofOfIncorporation') !!}</div>
                  </label>
                  <label>
          Address
                      <div class="input-group">{!! Form::text('address1', '', ['class' => 'input-group-field', 'placeholder' => 'Address Line 1 *']) !!}</div>
                  </label>
                      <div class="input-group">{!! Form::text('address2', '', ['class' => 'input-group-field', 'placeholder' => 'Address Line 2']) !!}</div>
                      <div class="input-group">{!! Form::text('city', '', ['class' => 'input-group-field', 'placeholder' => 'City *']) !!}</div>
                      <div class="input-group">{!! Form::text('postCode', '', ['class' => 'input-group-field', 'placeholder' => 'Post Code *']) !!}</div>
                  <label>
                    Contact Details
                      <div class="input-group">{!! Form::text('phone', '', ['class' => 'input-group-field', 'placeholder' => 'Telephone *']) !!}</div>
                  </label>
                      <div class="input-group">{!! Form::text('fax', '', ['class' => 'input-group-field', 'placeholder' => 'Fax']) !!}</div>

                  {!! Form::submit('Continue &raquo;', ['class' => 'button alert']) !!}

        <button class="close-button" data-close aria-label="Close reveal" type="button">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="reveal" id="editAccount" data-reveal>
        <h3>Change Billing Address</h3>

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


        <button class="close-button" data-close aria-label="Close reveal" type="button">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

@endsection