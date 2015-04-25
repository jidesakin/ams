@extends('layout')

@section('title')
Groups | Asset Management System
@stop

    @section('row_1')
        <a href="{{URL::to('group/new')}}" class="btn btn-success pull-right"><i class="icon-plus"></i>  Create New</a>
    @stop


    @section('row_2')
    <div class="box span12">
    <div class="box-header" data-original-title="">
    						<h2><i class="icon-group"></i><span class="break"></span>Groups</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    <div class="box-content">
    <table class="table table-bordered bootstrap-datatable datatable">
        <thead>
            <th>Group Name</th>
            <th>Admin Right</th>
            <th>Report Right</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($groups as $group)

            <tr>
            	<td>{{$group->group_name}}</td>
            	<td>
            	    @if($group->admin_right == 1)
            	    <span class="label label-success">Yes</span>
                    @else
                    <span class="label label-important">No</span>
                    @endif
            	</td>
            	<td>
            	    @if($group->report_right == 1)
            	    <span class="label label-success">Yes</span>
                    @else
                    <span class="label label-important">No</span>
                    @endif
            	</td>
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