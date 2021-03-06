@extends('layout')

@section('title')

Users | Asset Management System
@stop

@section('row_1')
        <a href="{{URL::to('user/new')}}" class="btn btn-success pull-right"><i class="icon-plus"></i>  Create New</a>
    @stop


    @section('row_2')
    <div class="box span12">
    <div class="box-header" data-original-title="">
    						<h2><i class="icon-user"></i><span class="break"></span>Users</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    <div class="box-content">
    <table class="table table-bordered bootstrap-datatable datatable">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Group</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($users as $user)

            <tr>
            	<td>{{$user->firstname}}</td>
            	<td>{{$user->lastname}}</td>
            	<td class="center">{{$user->username}}</td>
            	<td class="center">{{$user->telephone}}</td>
            	<td class="center">{{$user->email}}</td>
            	<td class="center">{{$user->group_name}}</td>


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
