<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/4/2015
 * Time: 4:18 AM
 */

class IndexController extends BaseController {

    public function index(){
        return View::make('index');
    }
} 