@extends('layout')

@section('title')
    Hardware Assets | Asset Management System
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
        <a href="{{URL::to('asset/hardware/new')}}" class="btn btn-success pull-right"><i class="icon-plus"></i>  Create New</a>
    @stop

    @section('row_2')
    <div class="box span12">
    <div class="box-header" data-original-title="">
    						<h2><i class="icon-barcode"></i><span class="break"></span>Hardware Assets</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    <div class="box-content">
    <table class="table table-bordered bootstrap-datatable datatable">
        <thead>
            <th>Asset Name</th>
            <th>Asset Tag</th>
            <th>Serial</th>
            <th>Model</th>
            <th>Status</th>
            <th>In/Out</th>
            {{--<th>Actions</th>--}}
        </thead>
        <tbody>
            @foreach($hardware_assets as $hardware_asset)

            <tr>
            	<td>{{$hardware_asset->name}}</td>
            	<td>{{$hardware_asset->asset_tag}}</td>
            	<td class="center">{{$hardware_asset->serial_number}}</td>
            	<td class="center">{{$hardware_asset->model}}</td>
            	<td class="center">{{$asset_status[$hardware_asset->status]}}</td>
            	<td class="center">
            	@if($hardware_asset->status == 1 || $hardware_asset->status == 3)
            	<a href="{{URL::to('asset/hardware/checkout/'.$hardware_asset->asset_id)}}" class="btn btn-primary">Check out</a>
            	@elseif($hardware_asset->status == 2 || $hardware_asset->status == 0)
            	<a href="{{URL::to('asset/hardware/checkin/'.$hardware_asset->asset_id)}}" class="btn btn-success">Check in</a>
            	@endif
            	</td>
                {{--<td class="center">--}}

            									{{--<a class="btn btn-info" href="#">--}}
            										{{--<i class="icon-edit "></i>--}}
            									{{--</a>--}}
            									{{--<a class="btn btn-danger" href="#">--}}
            										{{--<i class="icon-trash "></i>--}}
            									{{--</a>--}}
            								{{--</td>--}}
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    @stop