@extends('layout')

    @section('title')
        Hardware Asset Report | Asset Management System
    @stop


    @section('row_1')

      <div class="box span6">
            	                    <div class="box-header">
                						<h2><i class="icon-bar-chart"></i> View Hardware Asset Report</h2>
                						<div class="box-icon">
                							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
                						</div>
                					</div>
                					<div class="box-content">
                						{{ Form::open(array('url'=> 'report/asset/hardware/view', 'class' => 'form-horizontal')) }}

                                                    						  <fieldset>
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
                                                                                 <div class="control-group">
                                                    							  <label class="control-label" for="asset_status"> Asset Status </label>
                                                    							  <div class="controls">
                                                                                    {{ Form::select('asset_status', $asset_status_options) }}
                                                    							  </div>
                                                    							</div>


                                                    							<div class="control-group">
                                                    							  <label class="control-label" for="start_date"> Start Date </label>
                                                    							  <div class="controls">
                                                    								<input type="date" class="span6" name="start_date" id="start_date" >

                                                    							  </div>
                                                    							</div>

                                                    							<div class="control-group">
                                                    							  <label class="control-label" for="end_date"> End Date </label>
                                                    							  <div class="controls">
                                                    								<input type="date" class="span6" name="end_date" id="end_date" >

                                                    							  </div>
                                                    							</div>

                                                    							<div class="form-actions">
                                                    							  <button type="submit" class="btn btn-primary">View</button>
                                                    							  <button type="reset" class="btn">Cancel</button>

                                                    							</div>
                                                    						  </fieldset>
                                                    						{{ Form::close() }}

                					</div>
                			</div>
                			<div class="box span6">
            	                    <div class="box-header">
                						<h2><i class="icon-download"></i>Download Report</h2>
                						<div class="box-icon">
                							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
                						</div>
                					</div>
                					<div class="box-content">
                						{{ Form::open(array('url'=> 'report/asset/hardware/download', 'class' => 'form-horizontal')) }}

                                                    						  <fieldset>
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
                                                                                 <div class="control-group">
                                                    							  <label class="control-label" for="asset_status"> Asset Status </label>
                                                    							  <div class="controls">
                                                                                    {{ Form::select('asset_status', $asset_status_options) }}
                                                    							  </div>
                                                    							</div>


                                                    							<div class="control-group">
                                                    							  <label class="control-label" for="start_date"> Start Date </label>
                                                    							  <div class="controls">
                                                    								<input type="date" class="span6" name="start_date" id="start_date" >

                                                    							  </div>
                                                    							</div>

                                                    							<div class="control-group">
                                                    							  <label class="control-label" for="end_date"> End Date </label>
                                                    							  <div class="controls">
                                                    								<input type="date" class="span6" name="end_date" id="end_date" >

                                                    							  </div>
                                                    							</div>

                                                    							<div class="form-actions">
                                                    							  <button type="submit" class="btn btn-primary"><span class="icon-download"></span>Download CSV</button>
                                                    							  <button type="reset" class="btn">Cancel</button>

                                                    							</div>
                                                    						  </fieldset>
                                                    						{{ Form::close() }}

                					</div>
                			</div>


    @stop

    @section('row_2')


    @stop
