@extends('layout')

    @section('title')
        Create New License | Asset Management System
    @stop

    @section('row_1')
                        <div class="box span12">
        	                    <div class="box-header">
            						<h2><i class="icon-certificate"></i>Create New Software Assets</h2>
            						<div class="box-icon">
            							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
            							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
            						</div>
            					</div>
            					<div class="box-content">
            						{{ Form::open(array('url'=> 'asset/software/create', 'class' => 'form-horizontal')) }}

            						  <fieldset>

    						  @if($errors->has())
                                  						<ul class="errors">

                                  						<div class="alert alert-error">
                                                                                          @foreach($errors->all() as $message)
                                                                                                                      <li>{{ $message }}</li>
                                                                                                                      @endforeach
                                                                                       </div>




                                                          </ul>
                                                          @endif
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
            							  <label class="control-label" for="software_name">Software Name </label>
            							  <div class="controls">
            								<input type="text" class="span6" name="software_name" id="software_name" required=""/>

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="serial_number">Serial Number</label>
            							  <div class="controls">
            								<input type="text" class="span6" name="serial_number" id="serial_number" required/>

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="licensed_to_name">Licensed to Name </label>
            							  <div class="controls">
            								<input type="text" class="span6" name="licensed_to_name" id="licensed_to_name" />

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="licensed_to_email">Licensed to Email </label>
            							  <div class="controls">
            								<input type="text" class="span6" name="licensed_to_email" id="licensed_to_email" />

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="seats">Seats </label>
            							  <div class="controls">
            								<input type="text" class="span6" name="seats" id="seats" required/>

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="supplier">Supplier </label>
            							  <div class="controls">
            								{{ Form::select('supplier_id', $supplier_options) }}

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="order_number">Order Number </label>
            							  <div class="controls">
                                            <input type="text" class="span6" name="order_number" id="order_number" />
            							  </div>
            							</div>
            							<div class="control-group">
                                            <label class="control-label" for="purchase_date">Purchase Date</label>
                                            <div class="controls">
                                            	<input type="date" class="span6" name="purchase_date" id="purchase_date">

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
                                                     							  <label class="control-label" for="purchase_order_number">Purchase Order Number </label>
                                                     							  <div class="controls">
                                                                                     <input type="text" class="span6" name="purchase_order_number" id="purchase_order_number" />
                                                     							  </div>
                                                     							</div>

                                        <div class="control-group">
                                                                                    <label class="control-label" for="expiration_date">Expiration Date</label>
                                                                                    <div class="controls">

                                                                                    	<input type="date" class="date span6" name="expiration_date" id="expiration_date">

                                                                                    </div>

                                                                                </div>


                        <div class="control-group">
                            <label class="control-label" for="notes"> Notes</label>
                                <div class="controls">
                                    <textarea name="notes" id="notes" class="span6"></textarea>
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

