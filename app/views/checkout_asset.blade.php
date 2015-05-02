@extends('layout')

    @section('title')
        Checkout Asset | Asset Management System
    @stop


    @section('row_1')

      <div class="box span12">
            	                    <div class="box-header">
                						<h2><i class="icon-signout"></i>Checkout Asset</h2>
                						<div class="box-icon">
                							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
                						</div>
                					</div>
                					<div class="box-content">
                						{{ Form::open(array('url'=> 'asset/hardware/checkout/confirm', 'class' => 'form-horizontal')) }}

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
                                                                                                                             <label class="control-label" for="asset_tag"> Asset Tag </label>
                                                                                                                                    							  <div class="controls">
                                                                                                                                    								<input type="text" class="span6" name="asset_tag" id="asset_tag" value="{{$asset_details[0]->asset_tag}}" readonly>

                                                                                                                                    							  </div>
                                                                                                                                    							</div>

                                                    							<div class="control-group">
                                                    							  <label class="control-label" for="asset_name"> Asset Name </label>
                                                    							  <div class="controls">
                                                    								<input type="text" class="span6" name="asset_name" id="asset_name" value="{{$asset_details[0]->name}}" readonly>

                                                    							  </div>
                                                    							</div>

                                                    							<div class="control-group">
                                                    							  <label class="control-label" for="purpose"> Purpose </label>
                                                    							  <div class="controls">
                                                    								<textarea type="text" class="span6" name="purpose" id="purpose" required></textarea>

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
