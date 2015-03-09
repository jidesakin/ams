<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/12/2015
 * Time: 6:27 AM
 */

class GroupsTableSeeder extends \Illuminate\Database\Seeder{

    public function run(){
        $group = new Group();
        $group->group_name = 'Admin';
        $group->admin_right = 1;
        $group->report_right = 1;
        $group->save();
    }
} 