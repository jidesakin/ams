<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 4/21/2015
 * Time: 7:49 AM
 */

class SupplierController extends BaseController{

    public function __construct(){
        parent::__construct();
        $this->beforeFilter('crsf', array('on' => 'post'));
        $this->beforeFilter('auth', array('on' => array('index')));
    }

    /**
    Display all the list of suppliers
     **/
    public function index(){

        if(Session::has('user')) {

            //Retrieve all suppliers from the database
            $suppliers = DB::table('suppliers')->get();

            // Return a view to display all suppliers by passing suppliers variable to view
            return View::make('suppliers', array('suppliers' => $suppliers));
        }else{
            return Redirect::to('/');
        }
    }

    /**
    Gets the new supplier form
     **/
    public function newSupplierForm(){
        //Renders new user form
        if(Session::has('user')){
            return View::make('new_supplier');
        }else{
            return Redirect::to('/');
        }
    }

   /**
   Creates a new supplier from the submitted form
    **/
    public function create(){
        // Create a new supplier
        $validator = Validator::make(Input::all(), Supplier::$rules);

        if($validator->fails()){
            return Redirect::to('supplier/new')->withErrors($validator)->with('error', 'Invalid credentials! Please supply all the fields')->withInput();

        }

        $supplier = new Supplier();
        $supplier->supplier_id = '';
        $supplier->supplier_name = Input::get('supplier_name');
        $supplier->supplier_address = Input::get('supplier_address');
        $supplier->contact_person = Input::get('contact_person');
        $supplier->email = Input::get('email_address');
        $supplier->phone_number= Input::get('phone_number');


        $supplier->save();

        return Redirect::to('supplier/new')->with('success', 'Supplier has been successfully added');



    }
} 