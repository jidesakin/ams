<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/25/2015
 * Time: 7:50 AM
 */

class DashboardController extends BaseController{

    public function __construct(){

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
            return View::make('new_user');
        }else{
            return Redirect::to('/');
        }
    }

} 