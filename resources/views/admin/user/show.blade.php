@extends('admin.layouts')

@section('content')
<div class="row">
    <div class="col-lg-12" margin-tb>
        <div class="pull-left">
            <h2>Show Order</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('admin.index')}}">Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>ID</strong>{{$manageUser->user_id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>Name</strong>{{$manageUser->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>Password</strong>{{$manageUser->password}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>Phone</strong>{{$manageUser->phone}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>Email</strong>{{$manageUser->email}}
        </div>
    </div>
</div>

