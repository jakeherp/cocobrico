@extends('layouts.admin')

@section('content')

    <table class="scroll" style="width: 100%; padding:0px !important; margin: 0px !important;">
          <thead>
            <tr>
              <th style="min-width: 250px;">Customer Name</th>
              <th style="min-width: 250px;">Customer Company</th>
              <th style="min-width: 200px;">Email</th>
              <th style="min-width: 100px;">Status</th>
              <th style="min-width: 100px;">Date added</th>
              <th style="min-width: 100px;">Options</th>
            </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
             <tr>
              <td>{{$user->firstname}} {{$user->lastname}}</td>
              <td>COMPANYNAME</td>
              <td>{{$user->email}}</td>
              <td>
                @if($user->hasPermission('is_customer'))
                  active
                @else
                  inactive
                @endif
              </td>
              <td>{{$user->created_at}}</td>
              <td>
                {!! Form::open(['url' => 'admin/users', 'method' => 'post', 'files' => false]) !!}
                  {!! Form::hidden('userId', $user->id, []) !!}
                  <button role="submit" class="tiny button success has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Activate Customer"
                  @if($user->hasPermission('is_customer'))
                    disabled
                  @endif
                  ><i class="fa fa-thumbs-up"></i></button>
                {!! Form::close() !!}
                <a href="#" class="tiny button warning has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Edit Customer"><i class="fa fa-pencil"></i></a>
                <a href="#" class="tiny button alert has-tip" data-tooltip aria-haspopup="true" data-disable-hover='false' tabindex=1 title="Delete Customer"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          @endforeach
		  </tbody>
    </table>
@endsection