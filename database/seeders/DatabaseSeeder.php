<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan Gomez',
            'email' => 'juan@mail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Melisa Perez',
            'email' => 'melisa@mail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Miguel Mendez',
            'email' => 'miguel@mail.com',
            'password' => Hash::make('12345678'),
        ]);

        Category::create(['name' => 'Terror',]);
        Category::create(['name' => 'Comedy',]);
        Category::create(['name' => 'Action',]);
        Category::create(['name' => 'Thriller',]);
        Category::create(['name' => 'Drama',]);
    
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'client']);

        $one = User::find(1);
        $one->roles()->attach(1);
        
        $two = User::find(2);
        $two->roles()->attach(2);

        $three = User::find(3);
        $three->roles()->attach(2);

    }
}
