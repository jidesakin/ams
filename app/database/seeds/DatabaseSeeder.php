<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


        $this->call('GroupsTableSeeder');
        $this->command->info("Groups table seeded");

        $this->call('UsersTableSeeder');
        $this->command->info("Users table seeded");
	}

}
