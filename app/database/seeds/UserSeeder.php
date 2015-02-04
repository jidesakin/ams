<?php
/**
 * Created by PhpStorm.
 * User: Babajide Owosakin
 * Date: 1/4/2015
 * Time: 10:49 PM
 */

class UserSeeder extends DatabaseSeeder {

    public function run(){
        $users = [
            [
                "username" => "owosakin jide",
                "password" => Hash::make("PROgrammer"),
                "email" => "jideowosakin@gmail.com"
            ]
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
} 