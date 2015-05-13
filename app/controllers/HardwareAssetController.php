<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 4/20/2015
 * Time: 6:19 PM
 */

class HardwareAssetController extends BaseController{



    public static $asset_status = array(
        0 => 'Deployed',
        1 => 'Requestable',
        2 => 'Checked out',
        3 => 'Undeployable'

    );


    public function index(){

        if(Session::has('user')) {

            //Retrieve all suppliers from the database
            $hardware_assets = DB::table('hardware_assets')->get();

//            var_dump($hardwareAssets);
            // Return a view to display all suppliers by passing suppliers variable to view
            return View::make('hardware_assets', array('hardware_assets' => $hardware_assets, 'asset_status' => HardwareAssetController::$asset_status));
        }else{
            return Redirect::to('/');
        }
    }

    public function create(){
        // Create a new hardware asset
        $validator = Validator::make(Input::all(), HardwareAsset::$rules);

        if($validator->fails()){
            return Redirect::to('asset/hardware/new')->withErrors($validator)->with('error', 'Invalid credentials! Please supply all the fields')->withInput();

        }

        $hardwareAsset = new HardwareAsset();
        $hardwareAsset->asset_id = '';
        $hardwareAsset->asset_tag = Input::get('asset_tag');
        $hardwareAsset->supplier_id = Input::get('supplier_id');
        $hardwareAsset->name = Input::get('asset_name');
        $hardwareAsset->model = Input::get('model');
        $hardwareAsset->category = Input::get('category');
        $hardwareAsset->serial_number = Input::get('serial_number');
        $hardwareAsset->assigned_to = Input::get('user_id');
        $hardwareAsset->cost_price = Input::get('purchase_cost');
        $hardwareAsset->status = Input::get('status_id');
        $hardwareAsset->location_id = Input::get('location_id');
        $hardwareAsset->purchased_date = Input::get('purchase_date');
        $hardwareAsset->notes = Input::get('notes');
        $hardwareAsset->warranty = Input::get('warranty');
//
        $hardwareAsset->end_of_life = '';

        $hardwareAsset->save();

        return Redirect::to('asset/hardware/new')->with('success', 'Asset has been successfully added');



    }

    public function getAssets(){
        // Gets deployed assets
        if(Session::has('user')) {

            $status = Input::get('status');


            //Retrieve all suppliers from the database
            $hardware_assets = DB::table('hardware_assets')->where('status', '=', $status)->get();

//            var_dump($hardwareAssets);
            // Return a view to display all suppliers by passing suppliers variable to view
            return View::make('hardware_assets', array('hardware_assets' => $hardware_assets, 'asset_status' => HardwareAssetController::$asset_status));
        }else{
            return Redirect::to('/');
        }
    }


    public function checkOutForm($asset_id){

        if(Session::has('user')) {

            $asset_details = DB::table('hardware_assets')->where('asset_id', '=', $asset_id)->get();
//            var_dump($asset_details);
            return View::make('checkout_asset', array('asset_details' => $asset_details))->with('asset_id');

        }else{
            return Redirect::to('/');
        }


    }

    public function checkOut(){

        $asset_id = Input::get('asset_id');

        $result = DB::table('hardware_assets')->where('asset_id', $asset_id)
            ->update(array('status' => '2'));


        if($result > 0){
            $checkOutActivity = new Activity();
            $checkOutActivity->activity_id = '';
            $checkOutActivity->user_id = Session::get('user')->user_id;
            $checkOutActivity->action_type = '0';
            $checkOutActivity->asset_type = '0';
            $checkOutActivity->details = Input::get('purpose');
            $checkOutActivity->asset_id = $asset_id;

            $checkOutActivity->save();

            return Redirect::to('asset/hardware/all')->with('success', 'You have successfully checked out the selected asset');
        }else{
            return Redirect::to('asset/hardware/all')->with('error', 'Oops! Something went wrong! Unable to check out the selected asset');

        }



    }

    public function checkInForm($asset_id){

        if(Session::has('user')) {

            $asset_details = DB::table('hardware_assets')->where('asset_id', '=', $asset_id)->get();

            return View::make('checkin_asset', array('asset_details' => $asset_details))->with('asset_id');

        }else{
            return Redirect::to('/');
        }
    }

    public function checkIn(){
        $asset_id = Input::get('asset_id');

        $result = DB::table('hardware_assets')->where('asset_id', $asset_id)
            ->update(array('status' => '1'));


        if($result > 0){
            $checkOutActivity = new Activity();
            $checkOutActivity->activity_id = '';
            $checkOutActivity->user_id = Session::get('user')->user_id;
            $checkOutActivity->action_type = '1';
            $checkOutActivity->details = Input::get('notes');
            $checkOutActivity->asset_id = $asset_id;

            $checkOutActivity->save();

            return Redirect::to('asset/hardware/all')->with('success', 'You have successfully checked in the selected asset');
        }else{
            return Redirect::to('asset/hardware/all')->with('error', 'Oops! Something went wrong! Unable to check out the selected asset');

        }

    }

    public function reportForm(){
        if(Session::has('user')) {

            return View::make('hardware_report_request', array('asset_status_options' => DashboardController::$asset_status));

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

                if ($asset_status == '5'){
                    $reports = DB::table('hardware_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->get();
                    $aggregates = DB::table('hardware_assets')->select(DB::raw('count(*) as total_asset_count, sum(cost_price) as total_cost, (select count(*) from hardware_assets where status = 1) as requestable_count,
                (select count(*) from hardware_assets where status = 2) as checked_out_count, (select count(*) from hardware_assets where status = 3) as undeployable_count, (select count(*) from hardware_assets where status = 0) as deployed_count'))
                        ->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->get();

                }else{
                    $reports = DB::table('hardware_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->where('status', '=', $asset_status)->get();

                }

                return View::make('hardware_report', array('reports' => $reports, 'aggregates' => $aggregates, 'start_date' => $start_date, 'end_date' => $end_date, 'asset_status' => $asset_status));


            }else{
                return Redirect::to('report/asset/hardware');
            }
        }else{
            return Redirect::to('/');
        }




    }

    public function scanNetwork(){
        if (Session::has('user')){
            try{
                $url = 'http://localhost:50098/ScannerService.asmx/GetAllDevicesJSON';

                    $client = new GuzzleHttp\Client();
                    $response = $client->post($url);

                    $devices = json_decode($response->getBody(), false);
//                var_dump($devices->devices);

                    return View::make("scan_result", array("devices" => $devices->devices));

            }catch (HttpConnectException $ex){

                return Redirect::to('dashboard')->with('error', "Connection Error! Please try agaain");
            }catch(\GuzzleHttp\Exception\RequestException $re){
                return Redirect::to('dashboard')->with('error', "Unable to process request! Please try agaain");

            }catch(Exception $e){
                return Redirect::to('dashboard')->with('scan_error_msg', 'Network Error! Please check your network and try again');

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

            if ($asset_status == '5'){
                $data = DB::table('hardware_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->get();

            }else{
                $data = DB::table('hardware_assets')->whereDate('purchased_date', '>=', $start_date, 'and', 'purchased_date', '<=', $end_date)->where('status', '=', $asset_status)->get();

            }

        }else{
            return Redirect::to('report/asset/hardware');
        }


        // passing the columns which I want from the result set. Useful when we have not selected required fields
        $arrColumns = array('asset_id', 'asset_tag', 'name', 'model', 'category', 'cost_price', 'purchased_date', 'warranty');

        // define the first row which will come as the first row in the csv
        $arrFirstRow = array('Asset ID', 'Asset Tag', 'Asset Name', 'Model', 'Category', 'Purchased Cost', 'Purchased Date', 'Warranty');

        // building the options array
        $options = array(
            'columns' => $arrColumns,
            'firstRow' => $arrFirstRow,
        );

        // creating the Files object from the Utility package.
        $Files = new Files;

        return $Files->convertToCSV($data, $options);
    }

    private function timeSublimit($k = 0.8){
        $limit = ini_get('maximum_execution_time');
        $sub_limit = round($limit * $k);
        if($sub_limit === 0){
            $sub_limit = INF;
        }
        return $sub_limit;
    }

    public function addFoundDevice($name){
        //Renders new user form

        if(Session::has('user')){
            $user_options = DB::table('users')->orderBy('username', 'asc')->lists('username', 'user_id');
            $supplier_options = DB::table('suppliers')->orderBy('supplier_name', 'asc')->lists('supplier_name', 'supplier_id');
            $location_options = DB::table('locations')->orderBy('location_name', 'asc')->lists('location_name', 'location_id');
            return View::make('new_hardware_asset', array('supplier_options' => $supplier_options, 'user_options' => $user_options, 'location_options' => $location_options, 'status' => DashboardController::$asset_status, 'device_name' => array($name)))->with('device_name', array($name));
        }else{
            return Redirect::to('/');
        }
    }


} 