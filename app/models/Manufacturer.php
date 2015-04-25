<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 4/21/2015
 * Time: 6:39 PM
 */

class Manufacturer extends Eloquent {

    protected $table = 'manufacturers';

    public static $rules = array(
        'manufacturer_name' => 'required',
        'address' => 'required',
        'email_address' => 'required'

    );

} 