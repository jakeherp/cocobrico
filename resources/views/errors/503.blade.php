@extends('layouts.app')

@section('content')

    <section id="content" class="row">
    
      <div class="large-12 column">
        <h1><i class="fa fa-exclamation-circle"></i> {{ trans('errors.503') }}</h1>
        
        <div class="callout">{{ trans('errors.503desc') }}</div>
      </div>
    
    </section>
        
@endsection