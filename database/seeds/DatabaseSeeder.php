<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
        $this->call([
            ArtistsTableSeeder::class,
            TypesTableSeeder::class,
            LocalitysTableSeeder::class,
            RolesTableSeeder::class,
            LocationsTableSeeder::class,
            ArtistesTypeTableSeeder::class,
            UsersTableSeeder::class,
            ShowsTableSeeder::class,
            ArtistesTypeShowTableSeeder::class,
            RepresentationsTableSeeder::class,
            RepresentationsUsersTableSeeder::class,
            ReservationsTableSeeder::class
        ]);
    }
}

