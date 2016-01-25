@extends('layouts.app')

@section('content')

	<section id="content" class="row">
    
      <div class="large-12 column">
      	<h1><i class="fa fa-exclamation-circle"></i> {{ trans('errors.404') }}</h1>
        
        <div class="callout">{{ trans('errors.404desc') }}</div>
      </div>
    
    </section>
	    
@endsection