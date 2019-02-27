@extends('layouts.app')

@section('css')
<link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  <h2>Users Management</h2>
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif

  <div class="x_panel">
    <div class="x_title">
      <h2>List<small>of Users</small></h2>
      <div class="pull-right">
          <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Actions</th>
          </tr>
        </thead>


        <tbody>
          @foreach ($data as $key => $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                @if(!empty($user->getRoleNames()))
                  @foreach($user->getRoleNames() as $v)
                     <label class="label label-success">{{ $v }}</label>
                  @endforeach
                @endif
              </td>
              <td>
                 <a class="btn btn-info btn-xs" href="{{ route('users.show',$user->id) }}" data-toggle="tooltip" data-placement="top" title="View"><span class="fa fa-eye"></span></a>
                 <a class="btn btn-primary btn-xs" href="{{ route('users.edit',$user->id) }}" data-toggle="tooltip" data-placement="top" title="Edit"><span class="fa fa-pencil"></span></a>
                  {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                  <button type="submit" name="button" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span></button>
                  {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

{{-- $data->render() --}}

@endsection

@section('script')
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{ asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

@endsection
