@extends('layout')
    @section('title')
	    Dashboard | Asset Management System
	@stop

	@section('row_1')
	    <div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
        					<i class="icon-barcode blue"></i>
        					<span class="title">Total Hardware Assets</span>
        					<span class="value">{{$stats['ha_total']}}</span>
        				</div>

        				<div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
        					<i class="icon-barcode green"></i>
        					<span class="title">Hardware Assets Available</span>
        					<span class="value">{{$stats['ha_available']}}</span>
        				</div>

        				<div class="span3 smallstat box mobileHalf noMargin" ontablet="span6" ondesktop="span3">
        					<i class="icon-certificate yellow"></i>
        					<span class="title">Total Software Assets</span>
        					<span class="value">{{$stats['sa_total']}}</span>
        				</div>

        				<div class="span3 smallstat mobileHalf box" ontablet="span6" ondesktop="span3">
        					<i class="icon-certificate green"></i>
        					<span class="title">Software Assets Available</span>
        					<span class="value">{{$stats['sa_available']}}</span>
        				</div>
    @stop
    @section('row_2')
    <div class="row-fluid">

        <div class="box span12">
    					<div class="box-header">
    						<h2><i class="icon-align-justify"></i><span class="break"></span>Recent Activity</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    					<div class="box-content">
    						<table class="table table-striped table-bordered bootstrap-datatable datatable">
    							  <thead>
    								  <tr>
    									  <th>Date</th>
    									  <th>Item</th>
    									  <th>Asset Tag</th>
    									  <th>Action</th>
    									  <th>User</th>
    								  </tr>
    							  </thead>
    							  <tbody>
    								@foreach($activities as $activity)

                                                <tr>
                                                	<td>{{$activity->created_at}}</td>
                                                	<td>{{$activity->name}}</td>
                                                	<td class="center">{{$activity->asset_tag}}</td>
                                                	<td class="center">
                                                	@if($activity->action_type == 0)
                                                	<span class="label label-important">Check out</span>
                                                	@else
                                                	<span class="label label-success">Check in</span>
                                                    @endif
                                                	</td>
                                                    <td class="center">
                                                    {{$activity->firstname." ".$activity->lastname}}
                                                	</td>
                                                </tr>
                                                @endforeach
    							  </tbody>
    						 </table>

    					</div>
    					</div>

    </div>
    @stop

    @section('row_3')
    <div class="box span6">
                                   <div class="box-header" data-original-title="">
                                    	<h2><i class="icon-bar-chart"></i><span class="break"></span>Hardware Asset Status</h2>
                                    		<div class="box-icon">
                                    			<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                                    			<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                                    			<a href="#" class="btn-close"><i class="icon-remove"></i></a>
                                    		</div>
                                    </div>
                                    <div class="box-content">
                                    <div id="donutchart" style="height: 300px;"></div>
                                    </div>
                            </div>
    @stop
