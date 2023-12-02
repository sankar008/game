<?php

namespace App\Http\Controllers;

use App\Models\Jodi;
use App\Models\Marketserial;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['allgameDetails'] = Jodi::get();
        $jodiNumber = Marketserial::get()->map(function ($items) {
            $marketId = collect(explode(',', $items->market_id));
            $market = $marketId->map(function ($mar) {
                if (Jodi::where('id', $mar)->count() > 0) {
                    return Jodi::where('id', $mar)->first();
                }
            });
            return $market;
        })->first();

        $blankArray = [];
        $jodiNumber = array_merge($blankArray, array_filter($jodiNumber->toArray()));
        $data['livegameDetails'] = $jodiNumber;

        return view('home', $data);
    }

    public function panel(Request $request, $slug_name)
    {
        $panel = Jodi::where('slug_name', $slug_name)->with('all_jodi_number');
        $panel_days = $panel->first();
        $dataArray = [];
        $DaysArray = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
        $data['days'] = [];

        if ($panel_days->is_monday == 'Yes') {
            $data['days'][0] = 'Mon';
        }

        if ($panel_days->is_tuesday == 'Yes') {
            $data['days'][1] = 'Tue';
        }

        if ($panel_days->is_wednesday == 'Yes') {
            $data['days'][2] = 'Wed';
        }

        if ($panel_days->is_thusday == 'Yes') {
            $data['days'][3] = 'Thu';
        }

        if ($panel_days->is_friday == 'Yes') {
            $data['days'][4] = 'Fri';
        }

        if ($panel_days->is_saturday == 'Yes') {
            $data['days'][5] = 'Sat';
        }

        if ($panel_days->is_sunday == 'Yes') {
            $data['days'][6] = 'Sun';
        }

        $dataArray = [];
        $panel_result = $panel->get()->map(function ($items) use ($data, $DaysArray) {
            foreach ($items->all_jodi_number as $result) {
                $start_week = Carbon::parse($result->date)->startOfWeek()->format('Y-m-d');
                $end_week = Carbon::parse($result->date)->endOfWeek()->format('Y-m-d');
                $array_key = $start_week . ' To ' . $end_week;
                $dayOfTheWeek = Carbon::parse($result->date)->dayOfWeek;

                if (array_key_exists($array_key, $DaysArray)) {
                    $dataArray[$array_key][$DaysArray[$dayOfTheWeek]] = $result->toArray();
                } else {
                    $dataArray[$array_key][$DaysArray[$dayOfTheWeek]] = $result->toArray();
                }
            }
            return $dataArray;
        });

        $data['gridData'] = count($panel_result) > 0 ? $panel_result[0] : [];

        $data['panel'] = $panel_days;
        return view('panel', $data);
    }

    public function jodi(Request $request, $slug_name)
    {
        $data = [];
        return view('jodi', $data);
    }
}
