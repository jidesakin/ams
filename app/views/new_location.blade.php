@extends('layout')

@section('title')

Create New Location

@stop

@section('row_1')
                <div class="box span12">
	                    <div class="box-header">
    						<h2><i class="icon-map-marker"></i>Create New Location</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    					<div class="box-content">
    						{{ Form::open(array('url'=> 'location/create', 'class' => 'form-horizontal')) }}
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
    							  <label class="control-label" for="location_name">Location Name </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="location_name" id="location_name" required/>

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="location_address">Location Address </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="location_address" id="location_address" required/>

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="city">City </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="city" id="city" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="state">State </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="state" id="state" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="postal_code">Postal Code </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="postal_code" id="postal_code" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="country">Country </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="country" id="country" required/>

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