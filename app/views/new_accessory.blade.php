@extends('layout')

    @section('title')
	    Create New Accessory | Asset Management System
	@stop

	@section('row_1')
                <div class="box span8">
	                    <div class="box-header">
    						<h2><i class="icon-keyboard"></i>Create New Accessory</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    					<div class="box-content">
    						{{ Form::open(array('url'=> 'accessory/create', 'class' => 'form-horizontal')) }}

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
    							  <label class="control-label" for="accessory_name">Accessory Name </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="accessory_name" id="accessory_name" />

    							  </div>
    							</div>


    							<div class="control-group">
    							  <label class="control-label" for="category">Category </label>
    							  <div class="controls">
                                    {{ Form::select('category', $categories, array('placeholder' => 'Please select a category')) }}

    							  </div>
    							</div>


    							<div class="control-group">
    							  <label class="control-label" for="quantity">Quantity </label>
    							  <div class="controls">
    								<input type="number" class="span6" name="quantity" id="quantity" />

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
    			<div class="box span4">
                        <div class="box-header" data-original-title="">
                        						<h2><i class="icon-info"></i><span class="break"></span> About Accessories</h2>
                        						<div class="box-icon">
                        							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                        							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                        							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
                        						</div>
                        					</div>
                        <div class="box-content">
                            <p>Accessories are anything you issue to users but that do not have a serial number (or you do not care about tracking them uniquely). For example, computer mice or keyboards.</p>
                        </div>
                        </div>

    @stop