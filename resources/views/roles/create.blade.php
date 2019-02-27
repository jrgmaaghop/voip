@extends('layouts.app')

@section('css')
<!-- Wait Me Css -->
<link href="{{asset('plugins/waitme/waitMe.css')}}" rel="stylesheet" />

<!-- Bootstrap Select Css -->
<link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
</div>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <!-- <div class="header">
        <h2>
          VERTICAL LAYOUT
          <small>With floating label</small>
        </h2>
      </div> -->
      <div class="body">
      {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

          <div class="form-group form-float">
            <div class="form-line">
              {!! Form::text('name', null, array('class' => 'form-control', 'type' => 'text' )) !!}
              <label class="form-label">Name</label>
            </div>
          </div>
          <hr>
          <strong>Permission:</strong><br/>
          <?php $ctr=0; ?>
          @foreach($permission as $value)

              {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name', 'id' =>'chkbx'.$ctr)) }}
              <label for="chkbx{{$ctr}}">{{ $value->name }}</label>
          <?php $ctr++; ?>
          <br/>
          @endforeach

          <button type="submit" class="btn bg-primary btn-block waves-effect">
              <i class="fa fa-save"></i>
              <span>SAVE</span>
          </button>

        </form>

      </div>
    </div>
  </div>
</div>

@endsection
