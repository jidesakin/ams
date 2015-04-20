<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/25/2015
 * Time: 8:05 AM
 */

class UserController extends BaseController{

    public function __construct(){
        parent::__construct();
    }

    public function login($username, $password){
        if(Auth::attempt(array('username' => $username, 'password' => $password))){
            return Redirect::intended('dashboard');
        }
    }

    public function create(){
        //Create a new user
        $validator = Validator::make(Input::all(), User::$rules);

        if($validator->fails()){

            return Redirect::to('user/new')->withErrors($validator)->withInput(Input::except('password'));

        }
        $user = new User;
        $user->user_id = '';
        $user->group_id = Input::get('group_id');
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->email = Input::get('email');
        $user->telephone = Input::get('telephone');
        $user->profile_pic_url = 'img/avatar.jpg';
        $user->admin_right = Input::get('admin_right');
        $user->save();
        return Redirect::to('user/new')->with('flash_notice', 'User has been successfully created.');

    }

    public function handleCreate(){
        //handle create new user form submission
    }

    public function edit(User $user){
        //
    }
} 