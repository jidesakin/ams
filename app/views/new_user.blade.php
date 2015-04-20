@extends('layout')

    @section('title')
	    Create New User | Asset Management System
	@stop

	@section('row_1')
                <div class="box span12">
	                    <div class="box-header">
    						<h2><i class="icon-user"></i>Create New User</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    					<div class="box-content">
    						{{ Form::open(array('url'=> 'user/create', 'class' => 'form-horizontal')) }}

    						  <fieldset>
    						  @if($errors->has)
    						    <div class="alert alert-error">
    						    <ul class="errors">
                                 @foreach($errors->all() as $message)
                                 <li>{{ $message }}</li>
                                 @endforeach
                                 </ul>
    						    </div>
    						  @endif
    						  <div class="alert alert-success control-group">

    						  </div>

    							<div class="control-group">
    							  <label class="control-label" for="firstname">First Name </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="firstname" id="firstname" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="lastname">Last Name </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="lastname" id="lastname" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="username">Username </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="username" id="username" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="password">Password </label>
    							  <div class="controls">
    								<input type="password" class="span6" name="password" id="password" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="email">Email Address </label>
    							  <div class="controls">
    								<input type="email" class="span6" name="email" id="email" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="telephone">Telephone </label>
    							  <div class="controls">
    								<input type="tel" class="span6" name="telephone" id="telephone" />

    							  </div>
    							</div>
    							<div class="control-group">
    							  <label class="control-label" for="group">Group </label>
    							  <div class="controls">
                                    {{ Form::select('group_id', $group_options) }}

    							  </div>
    							</div>
    							<div class="control-group">
                                    <label class="control-label" for="admin_right">Admin right</label>
                                    <div class="controls">
                                    	<input type="checkbox" class="span6" name="admin_right" id="admin_right" />

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