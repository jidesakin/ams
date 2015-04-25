@extends('layout')

@section('title')
Software Assets | Asset Management System
@stop

@section('row_1')
        <a href="{{URL::to('asset/software/new')}}" class="btn btn-success pull-right"><i class="icon-plus"></i>  Create New</a>
    @stop


    @section('row_2')
    <div class="box span12">
    <div class="box-header" data-original-title="">
    						<h2><i class="icon-certificate"></i><span class="break"></span>Software Assets</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    <div class="box-content">
    <table class="table table-bordered bootstrap-datatable datatable">
        <thead>
            <th>Software Asset</th>
            <th>Serial</th>
            <th>Seats</th>
            <th>Remaining Seats</th>
            <th>Purchase Date</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($software_assets as $software_asset)

            <tr>
            	<td>{{$software_asset->name}}</td>
            	<td>{{$software_asset->serial_number}}</td>
            	<td class="center">{{$software_asset->seats}}</td>
            	<td class="center">{{$software_asset->remaining_seats}}</td>
            	<td class="center">{{$software_asset->purchased_date}}</td>
            							<td class="center">
            									<a class="btn btn-success" href="#">
            										<i class="icon-zoom-in "></i>
            									</a>
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
    @stop
