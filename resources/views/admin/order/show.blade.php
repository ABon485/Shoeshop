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
            <strong>ID</strong>{{$manageOrder->total_id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>Total</strong>{{$manageOrder->total}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>Status</strong>{{$manageOrder->status}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>Name</strong>{{$manageOrder->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>Product_id</strong>{{$manageOrder->product_id}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="form-group">
            <strong>User_id</strong>{{$manageOrder->user_id}}
        </div>
    </div>
</div>

