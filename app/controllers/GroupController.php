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

    public function getIndex(){
        return View::make('groups.index')
            ->with('groups', Group::all());
    }

    public function postCreate(){
        $validator = Validator::make(Input::all(), Group::$rules);

        if ($validator->passes()){
            $group = new Group;
            $group->name = Input::get('name');
            $group->save();
        }

        return Redirect::to('group/new')
            ->with('message', 'Something went wrong')
            ->withErrors($validator)
            ->withInput();
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