@extends('layouts.app')

@section('content')
    
    <section class="row" id="content">

	  <div class="large-12 column">
      	<h1><i class="fa fa-download"></i> Downloads</h1>
      </div>

      <div class="large-12 columns">
      
        <h4>The following documents are available for download <span class="secondary label">{{ count($user->files) }}</span></h4>
      
		<table class="scroll datatable">
          <thead>
            <tr>
              <th width="20%">File</th>
              <th>Description</th>
              <th width="10%"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($files as $file)
                <tr>
                <td><i class="fa fa-file-pdf-o"></i> {{ $file->name }}</td>
                <td>{{ $file->description }}</td>
                <td><a class="alert button pull-right" href="../storage/files/{{ $file->filename }}"><i class="fa fa-download"></i></a></td>
              </tr>
            @endforeach
          </tbody>
        </table>  

        <ul class="pagination text-center" role="navigation" aria-label round="Pagination">
          <li class="pagination-previous disabled">Previous <span class="show-for-sr">page</span></li>
          <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
          <li><a href="#" aria-label round="Page 2">2</a></li>
          <li><a href="#" aria-label round="Page 3">3</a></li>
          <li><a href="#" aria-label round="Page 4">4</a></li>
          <li class="pagination-next"><a href="#" aria-label round="Next page">Next <span class="show-for-sr">page</span></a></li>
        </ul>

      </div>

    </section>
    
@endsection