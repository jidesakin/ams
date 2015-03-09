@extends('layout')
    @section('title')
	    Dashboard | Asset Management System
	@stop

	@section('row_1')
	    <div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
        					<i class="icon-barcode blue"></i>
        					<span class="title">Total Assets</span>
        					<span class="value">4 589</span>
        				</div>

        				<div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
        					<i class="icon-barcode green"></i>
        					<span class="title">Assets Available</span>
        					<span class="value">789</span>
        				</div>

        				<div class="span3 smallstat box mobileHalf noMargin" ontablet="span6" ondesktop="span3">
        					<i class="icon-certificate green"></i>
        					<span class="title">Total Licenses</span>
        					<span class="value">$1 999,99</span>
        				</div>

        				<div class="span3 smallstat mobileHalf box" ontablet="span6" ondesktop="span3">
        					<i class="icon-certificate yellow"></i>
        					<span class="title">Licenses Available</span>
        					<span class="value">$19 999,99</span>
        				</div>
    @stop
    @section('row_2')
    <div class="row-fluid">

        <div class="box span6">
    					<div class="box-header">
    						<h2><i class="icon-align-justify"></i><span class="break"></span>Recent Activity</h2>
    						<div class="box-icon">
    							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
    							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
    							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
    						</div>
    					</div>
    					<div class="box-content">
    						<table class="table table-striped table-bordered">
    							  <thead>
    								  <tr>
    									  <th>Date</th>
    									  <th>Item</th>
    									  <th>Action</th>
    									  <th>User</th>
    								  </tr>
    							  </thead>
    							  <tbody>
    								<tr>
    									<td>Samppa Nori</td>
    									<td class="center">2012/01/01</td>
    									<td class="center">Member</td>
    									<td class="center">
    										<span class="label label-success">Active</span>
    									</td>
    								</tr>
    								<tr>
    									<td>Estavan Lykos</td>
    									<td class="center">2012/02/01</td>
    									<td class="center">Staff</td>
    									<td class="center">
    										<span class="label label-important">Banned</span>
    									</td>
    								</tr>
    								<tr>
    									<td>Chetan Mohamed</td>
    									<td class="center">2012/02/01</td>
    									<td class="center">Admin</td>
    									<td class="center">
    										<span class="label">Inactive</span>
    									</td>
    								</tr>
    								<tr>
    									<td>Derick Maximinus</td>
    									<td class="center">2012/03/01</td>
    									<td class="center">Member</td>
    									<td class="center">
    										<span class="label label-warning">Pending</span>
    									</td>
    								</tr>
    								<tr>
    									<td>Friderik Dávid</td>
    									<td class="center">2012/01/21</td>
    									<td class="center">Staff</td>
    									<td class="center">
    										<span class="label label-success">Active</span>
    									</td>
    								</tr>
    							  </tbody>
    						 </table>
    						 <div class="pagination pagination-centered">
    						  <ul>
    							<li><a href="#">Prev</a></li>
    							<li class="active">
    							  <a href="#">1</a>
    							</li>
    							<li><a href="#">2</a></li>
    							<li><a href="#">3</a></li>
    							<li><a href="#">4</a></li>
    							<li><a href="#">Next</a></li>
    						  </ul>
    						</div>
    					</div>
    					</div>
    					<div class="box span6">
                               <div class="box-header" data-original-title="">
                                	<h2><i class="icon-list-alt"></i><span class="break"></span>Asset Status</h2>
                                		<div class="box-icon">
                                			<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
                                			<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                                			<a href="#" class="btn-close"><i class="icon-remove"></i></a>
                                		</div>
                                </div>
                                <div class="box-content">
                                <div id="donutchart" style="height: 300px;"></div>
                                </div>
                        </div>
    </div>
    @stop
