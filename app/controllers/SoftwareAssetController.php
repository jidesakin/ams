<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 4/22/2015
 * Time: 11:38 PM
 */

class SoftwareAssetController extends BaseController{



    public function __construct(){
        parent::__construct();
        $this->beforeFilter('crsf', array('on' => 'post'));
        $this->beforeFilter('auth', array('on' => array('index')));
    }

    public function index(){
        if(Session::has('user')){
            $software_assets = DB::table('software_assets')->orderBy('name', 'asc')->get();
            return View::make('software_assets', array('software_assets' => $software_assets));
        }else{
            return Redirect::to('/');
        }
    }

    public function newSoftwareAssetForm(){
        if(Session::has('user')){
            $supplier_options = DB::table('suppliers')->orderBy('supplier_name', 'asc')->lists('supplier_name', 'supplier_id');
            return View::make('new_software_asset', array('supplier_options' => $supplier_options));
        }else{
            return Redirect::to('/');
        }
    }


    public function create(){
        //Create a new software asset
        $validator = Validator::make(Input::all(), SoftwareAsset::$rules);

        if($validator->fails()){

            return Redirect::to('asset/software/new')->withErrors($validator)->with('error', 'Unable to create software asset');

        }
        $sa = new SoftwareAsset();
        $sa->asset_id = '';
        $sa->supplier_id = Input::get('supplier_id');
        $sa->name = Input::get('software_name');
        $sa->serial_number = Input::get('serial_number');
        $sa->assigned_to = "";
        $sa->cost_price = Input::get('purchase_cost');
        $sa->purchased_date = Input::get('purchase_date');
        $sa->licensed_to_name = Input::get('licensed_to_name');
        $sa->licensed_to_email = Input::get('licensed_to_email');
        $sa->seats = Input::get('seats');
        $sa->remaining_seats = Input::get('seats');
        $sa->status = '1';
        $sa->order_number = Input::get('order_number');
        $sa->purchase_order_number = Input::get('purchase_order_number');
        $sa->expiration_date = Input::get('expiration_date');
        $sa->notes = Input::get('notes');

        $sa->save();

        return Redirect::to('asset/software/new')->with('success', 'Software Asset has been successfully created.');

    }

    public function assignForm($asset_id){

        if(Session::has('user')) {
            $asset_details = DB::table('software_assets')->where('asset_id', '=', $asset_id)->get();

            return View::make('assign_software_asset', array('asset_details' => $asset_details))->with('asset_id');

        }else{
            return Redirect::to('/');
        }

    }

    public function assign(){
        $asset_id = Input::get('asset_id');

        $result = DB::table('software_assets')->where('asset_id', '=', $asset_id)->decrement('remaining_seats');


        if($result > 0){
            $assignActivity = new Activity();
            $assignActivity->activity_id = '';
            $assignActivity->user_id = Session::get('user')->user_id;
            $assignActivity->action_type = '0';
            $assignActivity->asset_type = '1';
            $assignActivity->details = Input::get('purpose');
            $assignActivity->asset_id = $asset_id;

            $assignActivity->save();

            return Redirect::to('asset/software/all')->with('success', 'You have successfully assigned the selected asset');
        }else{
            return Redirect::to('asset/hardware/all')->with('error', 'Oops! Something went wrong! Unable to assign the selected asset');

        }
    }

    public function edit($asset_id){
        if(Session::has('user')) {
            $asset_details = DB::table('software_assets')->where('asset_id', '=', $asset_id)->get();
            $supplier_options = DB::table('suppliers')->orderBy('supplier_name', 'asc')->lists('supplier_name', 'supplier_id');

            return View::make('edit_software_asset', array('asset_details' => $asset_details[0], 'supplier_options' => $supplier_options))->with('asset_id');

        }else{
            return Redirect::to('/');
        }

    }

    public function delete($asset_id){

    }

    public function update(){
        $validator = Validator::make(Input::all(), SoftwareAsset::$rules);

        if($validator->fails()){

            return Redirect::to('asset/software/new')->withErrors($validator)->with('error', 'Unable to create software asset');

        }
        $sa = new SoftwareAsset();
        $sa->asset_id = Input::get('asset_id');
        $sa->supplier_id = Input::get('supplier_id');
        $sa->name = Input::get('software_name');
        $sa->serial_number = Input::get('serial_number');
        $sa->assigned_to = "";
        $sa->cost_price = Input::get('purchase_cost');
        $sa->purchased_date = Input::get('purchase_date');
        $sa->licensed_to_name = Input::get('licensed_to_name');
        $sa->licensed_to_email = Input::get('licensed_to_email');
        $sa->seats = Input::get('seats');
        $sa->remaining_seats = Input::get('seats');
        $sa->status = '1';
        $sa->order_number = Input::get('order_number');
        $sa->purchase_order_number = Input::get('purchase_order_number');
        $sa->expiration_date = Input::get('expiration_date');
        $sa->notes = Input::get('notes');

        DB::table('software_assets')->where('asset_id', '=', $sa->asset_id)->update($sa->toArray());


        return Redirect::to('asset/software/new')->with('success', 'Software Asset has been successfully created.');

    }

    public function reportForm(){
        if(Session::has('user')) {

            return View::make('software_report_request', array('asset_status_options' => SoftwareAsset::$asset_status));

        }else{
            return Redirect::to('/');
        }
    }

    public function report(){

        if(Session::has('user')){
            if(Input::exists(array('asset_status', 'start_date', 'end_date'))){
                $asset_status = Input::get('asset_status');
                $start_date = Input::get('start_date');
                $end_date = Input::get('end_date');
                $aggregates = array();

                if ($asset_status == '3'){
                    $reports = DB::table('software_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->get();
                    $aggregates = DB::table('software_assets')->select(DB::raw("count(*) as total_asset_count, sum(cost_price) as total_cost, (select count(*) from software_assets where serial_number = '') as unlicensed_count,
                (select count(*) from software_assets where serial_number != '') as licensed_count, (select count(*) from software_assets where remaining_seats = 0) as zero_seats_count"))
                        ->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->get();

                }else if($asset_status == '2'){
                    $reports = DB::table('software_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->where('status', '=', $asset_status)->get();

                }else if($asset_status == '1'){

                }else{

                }

                return View::make('software_report', array('reports' => $reports, 'aggregates' => $aggregates, 'start_date' => $start_date, 'end_date' => $end_date, 'asset_status' => $asset_status));


            }else{
                return Redirect::to('report/asset/software');
            }
        }else{
            return Redirect::to('/');
        }




    }

    public function getCSVLink()
    {
        if(Input::exists(array('asset_status', 'start_date', 'end_date'))){
            $asset_status = Input::get('asset_status');
            $start_date = Input::get('start_date');
            $end_date = Input::get('end_date');

            if ($asset_status == '3'){
                $data = DB::table('software_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->get();

            }else if ($asset_status == '2'){
                $data = DB::table('software_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->where('serial_number', '=', '')->get();

            }else if($asset_status == '1'){
                $data = DB::table('software_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->where('serial_number', '!=', '')->get();

            }else{
                $data = DB::table('software_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->where('remaining_seats', '=', '0')->get();

            }

        }else{
            return Redirect::to('report/asset/software');
        }


        // passing the columns which I want from the result set. Useful when we have not selected required fields
        $arrColumns = array('asset_id', 'name', 'serial_number', 'seats', 'remaining_seats', 'cost_price', 'purchased_date', 'expiration_date');

        // define the first row which will come as the first row in the csv
        $arrFirstRow = array('Asset ID', 'Asset Name', 'Serial Number', 'Total Seats', 'Remaining Seats', 'Purchased Cost', 'Purchased Date', 'Expiration Data');

        // building the options array
        $options = array(
            'columns' => $arrColumns,
            'firstRow' => $arrFirstRow,
        );

        // creating the Files object from the Utility package.
        $Files = new Files;

        return $Files->convertToCSV($data, $options);
    }
}