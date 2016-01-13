@extends('layouts.app')

@section('content')

	<section class="row" id="login">
      <div class="large-6 small-12 large-centered columns">
        <div class="callout large">
          <h3>Sign in</h3>
          <p>Please enter your email address to get started.</p>

            <form action="login.html">
              <div class="row">
                <div class="large-12 columns">
                
                  <div class="input-group">
                    <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                    <input class="input-group-field" type="email" placeholder="Email Address">
                    <div class="input-group-button">
                      <input type="submit" class="button alert" value="Validate">
                    </div>
                  </div>  
                                
                </div>
              </div>
            </form>
            
        </div>
      </div>
    </section>
	
@endsection