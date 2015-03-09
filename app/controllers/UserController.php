<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/25/2015
 * Time: 8:05 AM
 */

class UserController extends BaseController{

    public function login($username, $password){
        if(Auth::attempt(array('username' => $username, 'password' => $password))){
            return Redirect::intended('dashboard');
        }
    }

    public function create(){
        //Create a new user

    }

    public function handleCreate(){
        //handle create new user form submission
    }

    public function edit(User $user){
        //
    }
} 