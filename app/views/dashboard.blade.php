@extends('layout')
    @section('title')
	    Dashboard | Asset Management System
	@stop

	@section('row_1')
	    <div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
        					<i class="icon-barcode blue"></i>
        					<span class="title">Total Assets</span>
        					<span class="value">400</span>
        				</div>

        				<div class="span3 smallstat box mobileHalf" ontablet="span6" ondesktop="span3">
        					<i class="icon-barcode green"></i>
        					<span class="title">Assets Available</span>
        					<span class="value">320</span>
        				</div>

        				<div class="span3 smallstat box mobileHalf noMargin" ontablet="span6" ondesktop="span3">
        					<i class="icon-certificate yellow"></i>
        					<span class="title">Total Licenses</span>
        					<span class="value">299</span>
        				</div>

        				<div class="span3 smallstat mobileHalf box" ontablet="span6" ondesktop="span3">
        					<i class="icon-certificate green"></i>
        					<span class="title">Licenses Available</span>
        					<span class="value">234</span>
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
    									<td>2015/01/01</td>
    									<td class="center">UPS</td>
    									<td class="center">
    									    <span class="label label-important">Checkout</span>
    									</td>
    									<td class="center">
    										Babajide Owosakin
    									</td>
    								</tr>
    								<tr>
    								    <td class="center">2012/02/01</td>
    									<td> Cisco Switch</td>
    									<td class="center">
                                            <span class="label label-success">Checkin</span>
                                        </td>
    									<td class="center">Emmanuel Evans</td>

    								</tr>
    								<tr>
                                        								    <td class="center">2012/02/01</td>
                                        									<td> Cisco Router</td>
                                        									<td class="center">
                                                                                <span class="label label-success">Checkin</span>
                                                                            </td>
                                        									<td class="center">Abdul Ozimdede</td>

                                        								</tr>
    								<tr>
                                         <td class="center">2015/02/01</td>
                                         <td> Cisco Switch</td>
                                         <td class="center">
                                             <span class="label label-important">Checkout</span>
                                         </td>
                                         <td class="center">Emmanuel Evans</td>

                                    </tr>
                                    <tr>
                                                                             <td class="center">2015/03/02</td>
                                                                             <td> HP Deskjet 2050</td>
                                                                             <td class="center">
                                                                                 <span class="label label-important">Checkout</span>
                                                                             </td>
                                                                             <td class="center">Wale Owoeye</td>

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
                                	<h2><i class="icon-bar-chart"></i><span class="break"></span>Asset Status</h2>
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
