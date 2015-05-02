<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/25/2015
 * Time: 7:33 AM
 */

class HardwareAsset extends Eloquent {

    protected $table = 'hardware_assets';

    protected $primaryKey = 'asset_id';

    public static $rules = array(
        'asset_tag' => 'required',
        'serial_number' => 'required',
        'asset_name' => 'required',
        'purchase_date' => 'required',
        'purchase_cost' => 'required',
        'category' => 'required',
        'supplier_id' => 'required'
    );

    public static function saveFormData($data){
        DB::table('hardware_asset');
    }

} 