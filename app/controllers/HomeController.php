<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function login(){
        // User authentication

        $rules = array(
            'username' => 'required',
            'password' => 'required'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        //If the validator fails, redirect back to the form
        if($validator->fails()){
            return Redirect::to('/')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }else{

            // create user data for the authentication
            $user = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );



            //attempt login
            if(Auth::attempt($user)){
                //Login successful
                Session::put('user', Auth::user());
                return Redirect::intended('dashboard');
            }else{
                return Redirect::to('/')
                    ->withErrors('Invalid credentials')
                    ->withInput(Input::except('password'));
            }
        }



    }

    public function logout(){
        //Logout user
        Auth::logout();
        Session::forget('user');
        return Redirect::to('/')
            ->with('flash_notice', 'You have successfully logged out');
    }



}
