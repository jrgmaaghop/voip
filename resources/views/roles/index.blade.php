@extends('layouts.app')

@section('content')
  <h2>Role Management</h2>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Role List</h2>
        @can('role-create')
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
        </div>
        @endcan
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr class="headings">
                <th class="column-title">#</th>
                <th class="column-title">Label</th>
                <th class="column-title no-link last"><span class="nobr">Action</span></th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; ?>
              @foreach($roles as $key => $role)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $role->name }}</td>
                  <td class=" last">
                    <a class="btn btn-default btn-xs"  href="{{ route('roles.show',$role->id) }}"  data-toggle="tooltip" data-placement="top" title="View"> <span class="fa fa-eye"></span> </a>
                    @can('role-edit')
                      <a class="btn btn-info btn-xs" href="{{ route('roles.edit',$role->id) }}"  data-toggle="tooltip" data-placement="top" title="Edit">  <span class="fa fa-pencil"></span> </a>
                    @endcan
                    @can('role-delete')
                      {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                          <button type="submit" name="button" class="btn btn-danger btn-xs"  data-toggle="tooltip" data-placement="top" title="Delete"><span class="fa fa-trash"></span></button>
                      {!! Form::close() !!}
                    @endcan
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
  {{-- $roles->render() --}}

@endsection
