@extends('layout')

    @section('title')
	    Create New Group | Asset Management System
	@stop

	@section('row_1')
                <div class="box span8">
	                    <div class="box-header">
    						<h2><i class="icon-group"></i>Create New Group</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    					<div class="box-content">
    						{{ Form::open(array('url'=> 'group/create', 'class' => 'form-horizontal')) }}

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
    							  <label class="control-label" for="group_name">Group Name </label>
    							  <div class="controls">
    								<input type="text" class="span6" name="group_name" id="group_name" />

    							  </div>
    							</div>
                              <fieldset>
                                <legend>Admin</legend>
                                <div class="control-group">

                                                                    	<label class="control-label" for="admin_right">Admin Right </label>
                                                                    		<div class="controls">
                                                                    		<label class="radio">
                                                                    		<div class="radio" id="admin_allow">
                                                                    		<span>
                                                                    		    <input type="radio" name="admin_right" id="admin_right_allow" value="1">
                                                                    		</span>
                                                                    		</div>
                                                                    		Allow
                                                                    		</label>
                                                                    		<div style="clear:both"></div>

                                                                    		<label class="radio">
                                                                    		<div class="radio" id="admin_allow">
                                                                    		<span class="checked" >
                                                                    		    <input type="radio" name="admin_right" id="admin_right_deny" value="0" checked>
                                                                    		</span>
                                                                    		</div>
                                                                    		Deny
                                                                    		</label>



                                                                    		</div>
                                  </div>
                                  </fieldset>
                                  <fieldset>

                                  <legend>Reporting</legend>
                                                                  <div class="control-group">

                                                                                                      	<label class="control-label" for="reporting_right">Reporting Right </label>
                                                                                                      		<div class="controls">
                                                                                                      		<label class="radio">
                                                                                                      		<div class="radio" id="reporting_allow">
                                                                                                      		<span>
                                                                                                      		    <input type="radio" name="reporting_right" id="reporting_right_allow" value="1">
                                                                                                      		</span>
                                                                                                      		</div>
                                                                                                      		Allow
                                                                                                      		</label>
                                                                                                      		<div style="clear:both"></div>

                                                                                                      		<label class="radio">
                                                                                                      		<div class="radio" id="reporting_deny">
                                                                                                      		<span class="checked" >
                                                                                                      		    <input type="radio" name="reporting_right" id="reporting_right_deny" value="0" checked>
                                                                                                      		</span>
                                                                                                      		</div>
                                                                                                      		Deny
                                                                                                      		</label>



                                                                                                      		</div>
                                                                    </div>

                                  </fieldset>






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
                        						<h2><i class="icon-info"></i><span class="break"></span> About Groups</h2>
                        						<div class="box-icon">
                        							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                        							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                        							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
                        						</div>
                        					</div>
                        <div class="box-content">
                        <p>Groups are various departments within an organisation. A group is made up of users.</p>
                        </div>
                        </div>

    @stop