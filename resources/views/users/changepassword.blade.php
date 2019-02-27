@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="x_content">

  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
         @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
      </ul>
    </div>
  @endif

  @isset($data['error'])
    <div class="alert alert-danger">
      <strong>Whoops!</strong> Wrong password!<br><br>
    </div>
  @endisset

  @isset($data['success'])
    <div class="alert alert-success">
      <strong>Password </strong> updated!<br><br>
    </div>
  @endisset

  <form method="POST" action="{{route('passwordupdate')}}" class="form-horizontal form-label-left" novalidate>
    <span class="section"></span>
    @csrf
    <input type="hidden" name="id" value="{{Auth::user()->id}}">
    <div class="item form-group">
      <label for="oldpassword" class="control-label col-md-3">Old Password</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="oldpassword" type="password" name="oldpassword" class="form-control col-md-7 col-xs-12" required="required">
      </div>
    </div>
    <div class="item form-group">
      <label for="password" class="control-label col-md-3">Password</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="password" type="password" name="password" data-validate-length="5,30" class="form-control col-md-7 col-xs-12" required="required">
      </div>
    </div>
    <div class="item form-group">
      <label for="confirm-password" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="confirm-password" type="password" name="confirm-password" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Cancel</button>
        <button id="send" type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection

@section('script')
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>
@endsection
