@extends('layout')

@section('title')
Software Assets | Asset Management System
@stop

@section('row_1')
@if(Session::has('error'))
                                     						    <div class="alert alert-error">
                                     						        {{Session::get('error')}}
                                     						    </div>
                                     						  @endif
                                     						  @if(Session::has('success'))
                                     						  <div class="alert alert-success control-group">
                                                                    {{Session::get('success')}}
                                     						  </div>
                                                               @endif
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
            							        <a class="btn btn-primary" href="{{URL::to('asset/software/assign/'.$software_asset->asset_id)}}">Assign to</a>

            									<a class="btn btn-info" href="{{URL::to('asset/software/edit/'.$software_asset->asset_id)}}">
            										<i class="icon-edit "></i>
            									</a>

            									{{--<a class="btn btn-danger" href="{{URL::to('asset/software/delete/'.$software_asset->asset_id)}}">--}}
            										{{--<i class="icon-trash "></i>--}}
            									{{--</a>--}}
            								</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    @stop
