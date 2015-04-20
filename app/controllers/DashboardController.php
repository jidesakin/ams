<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/25/2015
 * Time: 7:50 AM
 */

class DashboardController extends BaseController{

    public function __construct(){
        parent::__construct();
        $this->beforeFilter('crsf', array('on' => 'post'));
        $this->beforeFilter('auth', array('on' => array('index')));
    }

    public function index(){
        //Opens the dashboard after user login
        if(Session::has('user')){
            return View::make('dashboard');
        }else{
            return Redirect::to('/');
        }

    }

    public function newUserForm(){
        //Renders new user form
        if(Session::has('user')){
            $group_options = DB::table('groups')->orderBy('group_name', 'asc')->lists('group_name', 'group_id');
            return View::make('new_user', array('group_options' => $group_options));
        }else{
            return Redirect::to('/');
        }
    }


    public function newAssetForm(){
        //Renders new user form
        if(Session::has('user')){
            $group_options = DB::table('groups')->orderBy('group_name', 'asc')->lists('group_name', 'group_id');
            return View::make('new_asset', array('group_options' => $group_options));
        }else{
            return Redirect::to('/');
        }
    }

} 