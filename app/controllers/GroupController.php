<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 3/9/2015
 * Time: 4:19 PM
 */

class GroupController extends BaseController{

    public function __construct(){
        parent::__construct();
        $this->beforeFilter('crsf', array('on' => 'post'));
    }

    public function index(){

        if(Session::has('user')){
            $groups = DB::table('groups')->get();
            return View::make('groups')->with('groups', $groups);
        }else{
            return Redirect::to('/');
        }


    }

    public function newGroupForm(){

        if(Session::has('user')){

            return View::make('new_group');
        }else{
            return Redirect::to('/');
        }


    }

    public function create(){
        $validator = Validator::make(Input::all(), Group::$rules);

        if($validator->fails()){

            return Redirect::to('group/new')->withErrors($validator)->with('error', 'Unable to create group');

        }
        $group = new Group();
        $group->group_id = '';
        $group->group_name = Input::get('group_name');
        $group->admin_right = Input::get('admin_right');
        $group->report_right = Input::get('reporting_right');


        $group->save();

        return Redirect::to('group/new')->with('success', 'Group has been successfully created.');

    }

    public function postDestroy(){
        $group = Group::find(Input::get('id'));

        if($group){
            $group->delete();
            return Redirect::to('groups')
                ->with('message', 'Group Deleted');
        }

        return Redirect::to('groups')
            ->with('message', 'Something went wrong, please try again');
    }

} 