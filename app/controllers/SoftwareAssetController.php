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
} 