<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Admin\Admin::create([
            "name" => "Administrator",
            "username" => "admin",
            "email" => "admin@example.com",
            "password" => "123456",
            "role_id" => \App\Models\Role\Role::first()->id
        ]);

    }
}
