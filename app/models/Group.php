<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/12/2015
 * Time: 2:10 AM
 */

class Group extends Eloquent {

    protected $table = "groups";

    public static $rules = array(

    );

    public function users(){
        return $this->hasMany('User');
    }

} 