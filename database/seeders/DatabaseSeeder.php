<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Empleado;
use App\Models\Labor;
use App\Models\Role;
use App\Models\Sede;
use App\Models\Turno;
use App\Models\Unidad;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        Role::factory(5)->create();
        Empleado::factory(20)->create();
        Sede::factory(4)->create();
        Unidad::factory(7)->create();
        Labor::factory(5)->create();
        Turno::factory(20)->create();

        
    }
}
