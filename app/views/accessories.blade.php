@extends('layout')

@section('title')
    Accessories | Asset Management System
@stop

@section('row_1')
        <a href="{{URL::to('accessory/new')}}" class="btn btn-success pull-right"><i class="icon-plus"></i>  Create New</a>
    @stop

    @section('row_2')
    <div class="box span8">
    <div class="box-header" data-original-title="">
    						<h2><i class="icon-keyboard"></i><span class="break"></span>Accessories</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    <div class="box-content">
    <table class="table table-bordered bootstrap-datatable datatable">
        <thead>
            <th>Accessory Name</th>
            <th>Total</th>
            <th>Available</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($accessories as $accessory)

            <tr>
            	<td>{{$accessory->accessory_name}}</td>
            	<td>{{$accessory->total}}</td>
            	<td class="center">{{$accessory->available}}</td>
            	<td class="center">

            										@if($accessory->available > 0)
            										<a href="#" class="btn btn-primary"> Check out</a>
            										@else
            										<a  href="#" class="btn btn-primary" disabled> Check out</a>
            										@endif
            										<a class="btn btn-info" href="#">
            										<i class="icon-edit "></i>
            									</a>

            									<a class="btn btn-danger" href="#">
            										<i class="icon-trash "></i>
            									</a>
            								</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>

        <div class="box span4">
        <div class="box-header" data-original-title="">
        						<h2><i class="icon-info"></i><span class="break"></span> About Accessories</h2>
        						<div class="box-icon">
        							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
        							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
        							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
        						</div>
        					</div>
        <div class="box-content">
            <p>Accessories are anything you issue to users but that do not have a serial number (or you do not care about tracking them uniquely). For example, computer mice or keyboards.</p>
        </div>
        </div>
    @stop