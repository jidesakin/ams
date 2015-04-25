@extends('layout')

    @section('title')
        Locations | Asset Management System
    @stop

    @section('row_1')
        <a href="{{URL::to('location/new')}}" class="btn btn-success pull-right"><i class="icon-plus"></i>  Create New</a>
    @stop

    @section('row_2')
    <div class="box span12">
    <div class="box-header" data-original-title="">
    						<h2><i class="icon-map-marker"></i><span class="break"></span>Locations</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    <div class="box-content">
    <table class="table table-bordered bootstrap-datatable datatable">
        <thead>
            <th>Location Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($locations as $location)

            <tr>
            	<td>{{$location->location_name}}</td>
            	<td>{{$location->address}}</td>
            	<td class="center">{{$location->city}}</td>
            	<td class="center">{{$location->state}}</td>
            	<td class="center">{{$location->country}}</td>
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
