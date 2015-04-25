<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 4/21/2015
 * Time: 6:32 PM
 */

class LocationController extends BaseController{


    /**
     * Index function loads all the locations from the database
    **/

    public function index(){

        if(Session::has('user')) {

            //Retrieve all suppliers from the database
            $locations = DB::table('locations')->get();


            // Return a view to display all suppliers by passing suppliers variable to view
            return View::make('locations', array('locations' => $locations));
        }else{
            return Redirect::to('/');
        }
    }
    /**
     * Method to load the form for new location
    **/
    public function newLocationForm(){
        if(Session::has('user')){
            return View::make('new_location');
        }else{
            return Redirect::to('/');
        }

    }


    /**
    Create a new location
     **/

    public function create(){
        // Create a new location
        $validator = Validator::make(Input::all(), Location::$rules);

        if($validator->fails()){
            return Redirect::to('location/new')->withErrors($validator)->with('error', 'Invalid credentials! Please supply all the fields')->withInput();

        }

        $location = new Location();
        $location->location_id = '';
        $location->location_name = Input::get('location_name');
        $location->address = Input::get('location_address');
        $location->city = Input::get('city');
        $location->state = Input::get('state');
        $location->postal_code = Input::get('postal_code');
        $location->country = Input::get('country');

        $location->save();

        return Redirect::to('location/new')->with('success', 'Location has been successfully added');





    }

} 