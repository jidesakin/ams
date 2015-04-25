<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 4/25/2015
 * Time: 5:57 AM
 */

class Accessory extends Eloquent{

    protected $table = "accessories";

    public static $categories = array(
        1 => 'Power Cable',
        2 => 'Mouse',
        3 => 'Keyboard',
        4 => 'Mouse Pad',
        5 => 'Network Cable',
        6 => 'Spare part',
        7 => 'Speakers',
        8 => 'Others'
    );

    public static $rules = array(
        'accessory_name' => 'required',
        'category' => 'required',
        'quantity' => 'required|integer'
    );

} 