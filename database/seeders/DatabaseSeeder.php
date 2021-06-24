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
            'name' => 'Orange TV',
        ]);

        Commercial::create([
            'station_id' => 1,
            'name' => 'Dedoles',
            'duration' => 120,
        ]);

        DB::table('programs')->insert([
            ['station_id' => 1, 'name' => 'Program 1', 'genre' => 'action', 'duration' => 3600, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 2', 'genre' => 'comedy', 'duration' => 2700, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 3', 'genre' => 'drama', 'duration' => 1500, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 4', 'genre' => 'fantasy', 'duration' => 2700, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 5', 'genre' => 'horror', 'duration' => 5400, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 6', 'genre' => 'mystery', 'duration' => 7200, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 7', 'genre' => 'romance', 'duration' => 3600, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 8', 'genre' => 'thriller', 'duration' => 1800, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 9', 'genre' => 'western', 'duration' => 3600, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 10', 'genre' => 'action', 'duration' => 3600, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 11', 'genre' => 'comedy', 'duration' => 3600, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 12', 'genre' => 'drama', 'duration' => 5400, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 13', 'genre' => 'fantasy', 'duration' => 5400, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 14', 'genre' => 'horror', 'duration' => 2700, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 15', 'genre' => 'mystery', 'duration' => 3600, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 16', 'genre' => 'romance', 'duration' => 1800, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 17', 'genre' => 'thriller', 'duration' => 1800, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 18', 'genre' => 'western', 'duration' => 1800, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 19', 'genre' => 'action', 'duration' => 7200, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 20', 'genre' => 'comedy', 'duration' => 7200, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 21', 'genre' => 'drama', 'duration' => 3600, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 22', 'genre' => 'fantasy', 'duration' => 2700, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 23', 'genre' => 'horror', 'duration' => 7200, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 24', 'genre' => 'mystery', 'duration' => 3600, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
            ['station_id' => 1, 'name' => 'Program 25', 'genre' => 'romance', 'duration' => 4500, 'program_day' => 174, 'year' => 2021, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
