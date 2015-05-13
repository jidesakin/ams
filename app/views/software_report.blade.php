@extends('layout')

@section('title')
Software Asset Report | Asset Management System
@stop

@section('row_1')
    <a href="{{URL::to('report/asset/software')}}" class="btn btn-inverse pull-right"><i class="icon-circle-arrow-left"></i>  Back</a>
@stop


@section('row_2')
<div class="box span12">
<div class="box-header" data-original-title="">
						<h2><i class="icon-bar-chart"></i><span class="break"></span>Software Asset Report for {{$start_date. " to ". $end_date}}</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
<div class="box-content">
<table class="table table-bordered bootstrap-datatable datatable">
    <thead>
        <th> Name</th>
        <th>Serial Number </th>
        <th>Seats</th>
        <th>Remaining Seats</th>
        <th>Purchased Cost (in Naira)</th>
        <th>Purchased Date</th>
        <th>Expiration Date</th>


    </thead>
    <tbody>
        @foreach($reports as $report)

        <tr>
        	<td>{{$report->name}}</td>
        	<td>{{$report->serial_number}}</td>
        	<td>{{$report->seats}}</td>
        	<td>{{$report->remaining_seats}}</td>
        	<td class="center">{{$report->cost_price.".00"}}</td>
        	<td class="center">{{$report->purchased_date}}</td>
        	<td class="center">{{$report->expiration_date}}</td>

        </tr>
        @endforeach
    </tbody>
</table>

</div>
</div>


@stop

@section('row_3')
<div class="box span12">
<div class="box-header" data-original-title="">
						<h2><i class="icon-bar-chart"></i><span class="break"></span>Summary Software Report for {{$start_date. " to ". $end_date}}</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
<div class="box-content">

<table class="table table-bordered">
    <thead>
        <th> Unlicensed</th>
        <th> Licensed</th>
        <th> Zero Seats</th>
        <th>Total Number of Software Assets</th>
        <th>Total Asset Worth (in Naira)</th>

    </thead>
    <tbody>
        @foreach($aggregates as $aggregate)

        <tr>
        	<td>{{$aggregate->unlicensed_count}}</td>
        	<td>{{$aggregate->licensed_count}}</td>
        	<td class="center">{{$aggregate->zero_seats_count}}</td>
        	<td class="center">{{$aggregate->total_asset_count}}</td>
        	<td class="center">{{$aggregate->total_cost.".00"}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@stop
