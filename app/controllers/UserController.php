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

    public function index(){
        //Fetches all the users and displays them in a datatable
        $users = DB::table('users')->join('groups', 'users.group_id', '=',
        'groups.group_id')
            ->select('users.user_id', 'users.firstname', 'users.lastname', 'users.username','users.telephone', 'users.email', 'groups.group_name')->get();

        return View::make('users', array('users' => $users));
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

            return Redirect::to('user/new')->withErrors($validator)->withInput(Input::except('password'))->with('error', 'Invalid credentials! Unable to create user');

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

//        var_dump($user);

        return Redirect::to('user/new')->with('success', 'User has been successfully created.');

    }


    public function edit(User $user){
        //
    }


} 