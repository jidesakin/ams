<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 4/21/2015
 * Time: 6:39 PM
 */

class Location extends Eloquent{

    protected $table = 'locations';

    public static $rules = array(
        'location_name' => 'required',
        'location_address' => 'required',
        'country' => 'required'

    );
} 