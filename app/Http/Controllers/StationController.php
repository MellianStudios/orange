<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Carbon\Carbon;
use Inertia\Inertia;
use Inertia\Response;

class StationController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Station/Index', [
            'stations' => Station::all(),
        ]);
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function show(int $id): Response
    {
        $now = Carbon::now();
        $start_of_year = Carbon::make($now->year . '-01-01');
        $day_number = $now->diffInDays($start_of_year);

        $station = Station::where('id', $id)->with([
            'programs' => function ($query) use ($day_number, $now) {
                $query->where('program_day', $day_number)->where('year', $now->year);
            },
            'commercials'
        ])->first();

        $schedule = [];

        $date_time = $now->startOfDay();

        foreach ($station->programs as $program) {
            $schedule[] = [
                'name' => $program->name,
                'genre' => $program->genre,
                'start' => $date_time->format('d.m.Y H:i:s'),
                'end' => $date_time->addSeconds($program->duration)->format('d.m.Y H:i:s'),
            ];

            $commercial = $station->commercials->first();

            $schedule[] = [
                'name' => $commercial->name,
                'genre' => 'commercial',
                'start' => $date_time->format('d.m.Y H:i:s'),
                'end' => $date_time->addSeconds($commercial->duration)->format('d.m.Y H:i:s'),
            ];
        }

        return Inertia::render('Station/Show', [
            'schedule' => $schedule,
        ]);
    }
}
