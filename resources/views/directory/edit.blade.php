@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <!-- <h2>Edit</h2> -->
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
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


{!! Form::model($data, ['method' => 'PATCH','route' => ['directory.update', $data->id]]) !!}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Office:</strong>
            {!! Form::text('office', null, array('placeholder' => 'Office','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {!! Form::text('desc', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Local:</strong>
            {!! Form::text('local', null, array('placeholder' => 'Local','class' => 'form-control')) !!}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-block">
          <i class="fa fa-save"></i>
          <span>SAVE</span>
        </button>
    </div>
</div>
{!! Form::close() !!}


@endsection
