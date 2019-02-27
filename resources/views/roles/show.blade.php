@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
        <div class="pull-left">
            <h2> Role:   {{ $role->name }}</h2>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong><br>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success bg-blue-grey" style="font-size:1em;" >{{ $v->name }}</label> <br><br>
                    <!-- <h4> <span class="label bg-blue-grey">{{ $v->name }}</span></h4> -->
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
