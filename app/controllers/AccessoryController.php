<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 4/25/2015
 * Time: 5:58 AM
 */

class AccessoryController extends BaseController{

    public function __construct(){
        parent::__construct();
        $this->beforeFilter('crsf', array('on' => 'post'));
        $this->beforeFilter('auth', array('on' => array('index')));
    }



    public function index(){
        if(Session::has('user')) {

            //Retrieve all suppliers from the database
        $accessories = DB::table('accessories')->get();

        // Return a view to display all suppliers by passing suppliers variable to view
        return View::make('accessories', array('accessories' => $accessories));
        }else{
                return Redirect::to('/');
            }
    }

    public function newAccessoryForm(){
        if(Session::has('user')) {

            // Return a view to create a new record of accessory
            return View::make('new_accessory', array('categories' => Accessory::$categories));
        }else{
            return Redirect::to('/');
        }
    }

    public function create(){
        // Create a new hardware asset
        $validator = Validator::make(Input::all(), Accessory::$rules);

        if($validator->fails()){
            return Redirect::to('accessory/new')->withErrors($validator)->with('error', 'Invalid credentials! Please supply all the fields')->withInput();

        }

        $accessory = new Accessory();
        $accessory->accessory_id = '';
        $accessory->accessory_name = Input::get('accessory_name');
        $accessory->category = Input::get('category');
        $accessory->total = Input::get('quantity');
        $accessory->available = Input::get('quantity');


        $accessory->save();

        return Redirect::to('accessory/new')->with('success', 'Accessory has been successfully added');



    }

}