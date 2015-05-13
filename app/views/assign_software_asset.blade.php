@extends('layout')

    @section('title')
        Assign Software Asset | Asset Management System
    @stop


    @section('row_1')

      <div class="box span12">
            	                    <div class="box-header">
                						<h2><i class="icon-signout"></i>Asset Software Asset</h2>
                						<div class="box-icon">
                							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
                						</div>
                					</div>
                					<div class="box-content">
                						{{ Form::open(array('url'=> 'asset/software/assign/confirm', 'class' => 'form-horizontal')) }}

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
                                                                                 <div class="control-group" hidden="">
                                                    							  <label class="control-label" for="asset_id"> Asset Id </label>
                                                    							  <div class="controls">
                                                    								<input type="text" class="span6" name="asset_id" id="asset_id" value="{{$asset_details[0]->asset_id}}">

                                                    							  </div>
                                                    							</div>
                                                    							        							<div class="control-group">
                                                                                                                             <label class="control-label" for="name"> Software Name </label>
                                                                                                                                    							  <div class="controls">
                                                                                                                                    								<input type="text" class="span6" name="name" id="name" value="{{$asset_details[0]->name}}" readonly>

                                                                                                                                    							  </div>
                                                                                                                                    							</div>

                                                    							<div class="control-group">
                                                    							  <label class="control-label" for="avail_seats"> Available Seats </label>
                                                    							  <div class="controls">
                                                    								<input type="text" class="span6" name="avail_seats" id="avail_seats" value="{{$asset_details[0]->remaining_seats}}" readonly>

                                                    							  </div>
                                                    							</div>

                                                    							<div class="control-group">
                                                    							  <label class="control-label" for="purpose"> Purpose </label>
                                                    							  <div class="controls">
                                                    								<textarea type="text" class="span6" name="purpose" id="purpose" ></textarea>

                                                    							  </div>
                                                    							</div>

                                                    							<div class="form-actions">
                                                    							  <button type="submit" class="btn btn-primary">Submit</button>
                                                    							  <button type="reset" class="btn">Cancel</button>
                                                    							</div>
                                                    						  </fieldset>
                                                    						{{ Form::close() }}

                					</div>
                			</div>


    @stop

    @section('row_2')


    @stop
