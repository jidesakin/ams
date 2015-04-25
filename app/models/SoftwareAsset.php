<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/25/2015
 * Time: 7:32 AM
 */

class SoftwareAsset extends Eloquent {

    protected $table = 'software_assets';

    public static $rules = array(
        'software_name' => 'required',
        'serial_number' => 'required',
        'seats' => 'required'

    );

} 