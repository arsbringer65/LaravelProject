<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Todo;
use \App\Models\Item;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory(2)->create();
        $user = User::create([
        	 'name' => 'Abdul Rauf Sultan',
        	 'email' => 'ars@mail.com',
        	 'password' =>  bcrypt('password')
        ]);

        $user = User::create([
        	 'name' => 'Test',
        	 'email' => 'test@mail.com',
        	 'password' =>  bcrypt('password')
        ]);



        $school = Todo::create([
        	'user_id' => $user->id,
        	'title' => 'School Works',
        	'description' => 'House Resposibility'
        ]);
        $home = Todo::create([
        	'user_id' => $user->id,
        	'title' => 'Home Responsibility',
        	'description' => 'House Works'
        ]);

        Item::create([
        	'todo_id' => $school->id,
        	'name' => 'Midterm Exam',
        	'status' => 'not done'
        ]);
        Item::create([
        	'todo_id' => $school->id,
        	'name' => 'Coding',
        	'status' => 'not done'
        ]);
        Item::create([
        	'todo_id' => $school->id,
        	'name' => 'Research Method Chapter 2',
        	'status' => 'not done'
        ]);
        Item::create([
        	'todo_id' => $home->id,
        	'name' => 'Research Method Chapter 2',
        	'status' => 'not done'
        ]);
    }
}
