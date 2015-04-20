@extends('layout')

    @section('title')
	    Create New Asset | Asset Management System
	@stop

	@section('row_1')
                <div class="box span12">
	                    <div class="box-header">
    						<h2><i class="icon-barcode"></i>Create New Asset</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    					<div class="box-content">
    						{{ Form::open(array('url'=> 'asset/create', 'class' => 'form-horizontal')) }}
    						<ul class="errors">
                            @foreach($errors->all() as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                            </ul>
    						  <fieldset>
    							<div class="control-group">
    							  <label class="control-label" for="asset_tag">Asset Tag </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="asset_tag" id="asset_tag" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="serial_number">Serial Number</label>
    							  <div class="controls">
    								<input type="text" class="span6" name="serial_number" id="serial_number" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="asset_name">Asset Name </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="asset_name" id="asset_name" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="model">Model </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="model" id="model" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="purchase_date">Purchase Date</label>
    							  <div class="controls">
    								<input type="date" class="span6 datepicker" name="purchase_date" id="purchase_date" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="supplier">Supplier </label>
    							  <div class="controls">
    								<input type="tel" class="span6" name="supplier" id="supplier" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="purchase_cost">Purchase Cost </label>
    							  <div class="controls">
    							  <div class="input-append">
    								<input type="text" class="span6" name="purchase_cost" id="purchase_cost" />
                                    <span class="add-on">.00</span>
    							  </div>
    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="warranty">Warranty </label>
    							  <div class="controls">
    							  <div class="input-append">
    								<input type="text" class="span6" name="warranty" id="warranty" />
                                    <span class="add-on">months</span>
    							  </div>
    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="status">Status </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="status" id="status" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="notes">Notes </label>
    							  <div class="controls">
    								<textarea class="span6" name="notes" id="notes"></textarea>

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="location">Default Location </label>
    							  <div class="controls">
    								{{ Form::select('location', array('class' => 'chzn-done'))}}

    							  </div>
    							</div>

    							<div class="control-group">
    							  <label class="control-label" for="group">Checkout to </label>
    							  <div class="controls">
                                    {{ Form::select('group_id', $group_options) }}

    							  </div>
    							</div>
    							<div class="control-group">
                                    <label class="control-label" for="requestable">User may request this asset</label>
                                    <div class="controls">
                                    	<input type="checkbox" class="span6" name="requestable" id="requestable" />

                                    </div>
                                </div>


    							<div class="form-actions">
    							  <button type="submit" class="btn btn-primary">Save</button>
    							  <button type="reset" class="btn">Cancel</button>
    							</div>
    						  </fieldset>
    						{{ Form::close() }}

    					</div>
    			</div>

    @stop