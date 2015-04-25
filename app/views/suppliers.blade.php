@extends('layout')

@section('title')
Suppliers | Asset Management System
@stop

@section('row_1')
    <a href="{{URL::to('supplier/new')}}" class="btn btn-success pull-right"><i class="icon-plus"></i>  Create New</a>
@stop


@section('row_2')
<div class="box span12">
<div class="box-header" data-original-title="">
						<h2><i class="icon-credit-card"></i><span class="break"></span>Suppliers</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
<div class="box-content">
<table class="table table-bordered bootstrap-datatable datatable">
    <thead>
        <th>Supplier Name</th>
        <th>Supplier Address</th>
        <th>Contact Name</th>
        <th>Phone</th>
        <th>Email Address</th>
        <th>Assets</th>
        <th>Licenses</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($suppliers as $supplier)

        <tr>
        	<td>{{$supplier->supplier_name}}</td>
        	<td>{{$supplier->address}}</td>
        	<td class="center">{{$supplier->contact_person}}</td>
        	<td class="center">{{$supplier->phone_number}}</td>
        	<td class="center">{{$supplier->email}}</td>
        	<td class="center">{{$supplier->number_of_hardware}}</td>
        	<td class="center">{{$supplier->number_of_software}}</td>

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
