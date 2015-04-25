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

} 