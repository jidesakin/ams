<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    public static $rules = array(
        'group_id' => 'required|integer',
        'firstname' => 'required',
        'lastname' => 'required',
        'username' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'telephone' => 'required'
    );


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    protected $hidden = ["password"];

    public function getAuthIdentifier(){
        return $this->getKey();
    }

    public function getAuthPassword(){
        return $this->password;
    }

    public function getRememberToken(){
        return $this->remember_token;
    }

    public function setRememberToken($value){
        $this->remember_token = $value;
    }

    public function getRememberTokenName(){
        return "remember_token";
    }

    public function getReminderEmail(){
        return $this->email;
    }

    public function group(){
        return $this->belongsTo('Group');
    }

}
