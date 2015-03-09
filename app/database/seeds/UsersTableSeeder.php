<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 2/12/2015
 * Time: 6:32 AM
 */

class UsersTableSeeder  extends Seeder{

    public function run(){
        $user = new User();
        $user->group_id = '1';
        $user->firstname = 'Babajide';
        $user->lastname = 'Owosakin';
        $user->username = "jidesakin";
        $user->password = Hash::make("PROgrammer");
        $user->email = 'jideowosakin@gmail.com';
        $user->telephone = '07034846346';
        $user->admin_right = 1;
        $user->save();

    }
} 