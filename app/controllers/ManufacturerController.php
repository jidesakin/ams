<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 4/21/2015
 * Time: 6:34 PM
 */

class ManufacturerController extends BaseController{


    /**
    Fetches all the manufacturers and display in a datatable
     **/
    public function index(){

        if(Session::has('user')) {

            //Retrieve all suppliers from the database
            $manufacturers = DB::table('manufacturers')->get();

            // Return a view to display all suppliers by passing suppliers variable to view
//            return View::make('manufacturer', array('manufacturers' => $manufacturers));
            return View::make('manufacturer')->with('manufacturers', $manufacturers);
        }else{
            return Redirect::to('/');
        }
    }

    public function newManufacturerForm(){
        if(Session::has('user')){
            return View::make('new_manufacturer');
        }else{
            return Redirect::to('/');
        }

    }

    public function create(){
        // Create a new manufacturer
        $validator = Validator::make(Input::all(), Manufacturer::$rules);

        if($validator->fails()){
            return Redirect::to('manufacturer/new')->withErrors($validator)->with('error', 'Invalid credentials! Please supply all the fields')->withInput();

        }

        $manufacturer = new Manufacturer();
        $manufacturer->manufacturer_id = '';
        $manufacturer->manufacturer_name = Input::get('manufacturer_name');
        $manufacturer->email_address = Input::get('email_address');
        $manufacturer->phone_number = Input::get('phone_number');
        $manufacturer->address = Input::get('address');



        $manufacturer->save();

        return Redirect::to('manufacturer/new')->with('success', 'Manufacturer has been successfully added');



    }

} 