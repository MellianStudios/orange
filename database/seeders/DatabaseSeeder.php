<?php

namespace Database\Seeders;

use App\Models\Commercial;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Station;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        Station::create([
            'name' => 'Template',
        ]);

        Commercial::create([
            'name' => 'Dedoles',
            'duration' => 120,
        ]);

        DB::table('programs')->insert([
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '', 'genre' => '', 'duration' => 0, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
