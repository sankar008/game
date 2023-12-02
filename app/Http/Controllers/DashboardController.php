<?php

namespace App\Http\Controllers;

use App\Models\Jodi;
use App\Models\Jodinumber;
use App\Models\Marketserial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use LDAP\Result;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        return view('admin.dashboard');
    }

    public function remderJodiList(){
        return view('admin.jodi_list');
    }

    public function remderMarketSerial(){
        $marketId = Marketserial::select('market_id')->first();
        $data['serial_no'] = $marketId->market_id;
        return view('admin.jodi_serial', $data);
    }

    public function remderMarketResult(){
        $marketId = [];
        $data['serial_no'] = [];
        return view('admin.market_result', $data);
    }

    public function getMarketSerial(){        
        $jodiNumber = Marketserial::get()->map(function($items){
            $marketId = collect(explode(',', $items->market_id));
            $market = $marketId->map(function($mar){
                if(Jodi::select(['name', 'start_time', 'end_time', 'result', 'id'])->where('id', $mar)->count() > 0){
                    return Jodi::select(['name', 'start_time', 'end_time', 'result', 'id'])->where('id', $mar)->get()->map(function($items){
                        $items->start_time = date('h:i a', strtotime($items->start_time));
                        $items->end_time = date('h:i a', strtotime($items->end_time));
                        return $items;
                    })->first();
                }
                
            });
            return $market;
        })->first();  

        $blankArray = [];
        $jodiNumber = array_merge($blankArray, array_filter($jodiNumber->toArray()));       
           
        return response()->json(['status' => 'success', 'data' => collect($jodiNumber)]);
    }

    public function getJodiList(Request $request){
        $name = $request->name??0;
        $jodiDetails = Jodi::select("*") ->when($name >0, function($q) use ($name){
            $q->where('name', $name);
        })->orderBy('id', 'DESC')->get()->map(function($items, $key){
            $items->start_time_format = date('h:i a', strtotime($items->start_time));
            $items->end_time_format = date('h:i a', strtotime($items->end_time));
            $items->before_time = $items->before_time >0?$items->before_time: '';
            $items->after_time = $items->after_time > 0? $items->after_time: '';
            $items->rowId = ++$key;
            return $items;
        });

        return response()->json(['status' => 'success', 'data' => $jodiDetails]);

    }

    public function addJodiList(Request $request){ 
        date_default_timezone_set("Asia/Kolkata");  
        
        $jodi = new Jodi([
            'name' => $request->input('name'),
            'slug_name' => Str::slug($request->input('name')),
            'start_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->start_time)),
            'end_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->end_time)),
            'after_time' => $request->after_time??0,
            'before_time' => $request->before_time??0,
            'result' => $request->result,
            'is_monday' => $request->is_monday??"No",
            'is_tuesday' => $request->is_tuesday??"No",
            'is_wednesday' => $request->is_wednesday??"No",
            'is_thusday' => $request->is_thusday??"No",
            'is_friday' => $request->is_friday??"No",
            'is_saturday' => $request->is_saturday??"No",
            'is_sunday' => $request->is_sunday??"No",
            'background_color' => $request->background_color??"No",
            'start_time_color' => $request->start_time_color??"No",
            'end_time_color' => $request->end_time_color??"No",
            'name_color' => $request->name_color??"No",
            'result_color' => $request->result_color??"No",
            'details' => $request -> input('details')??'',
        ]);

        $jodi->save();

        $jodino = Jodinumber::updateOrCreate(["date" => date('Y-m-d'), 'jodi_id' => $jodi->id], [
            "result" => $request->result,
            'start_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->start_time)),
            'end_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->end_time)),
            "date" => date('Y-m-d'),
            "jodi_id"  => $jodi->id
        ]);


        return response()->json(['status' => 'success', 'data' => [], 'message' => 'One record inserted successfully!!']);
    }

    public function updateJodiList(Request $request){
        $jodi = Jodi::where('id', $request->id)->update([
            'name' => $request->input('name'),
            'slug_name' => Str::slug($request->input('name')),
            'start_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->start_time)),
            'end_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->end_time)),
            'after_time' => $request->after_time??0,
            'before_time' => $request->before_time??0,
            'result' => $request->result,
            'is_monday' => $request->is_monday??"No",
            'is_tuesday' => $request->is_tuesday??"No",
            'is_wednesday' => $request->is_wednesday??"No",
            'is_thusday' => $request->is_thusday??"No",
            'is_friday' => $request->is_friday??"No",
            'is_saturday' => $request->is_saturday??"No",
            'is_sunday' => $request->is_sunday??"No",
            'background_color' => $request->background_color??"No",
            'start_time_color' => $request->start_time_color??"No",
            'end_time_color' => $request->end_time_color??"No",
            'name_color' => $request->name_color??"No",
            'result_color' => $request->result_color??"No",
            'details' => $request -> input('details')??''
        ]);

        $jodino = Jodinumber::updateOrCreate(["date" => date('Y-m-d'), 'jodi_id' => $request->id], [
            "result" => $request->result,
            'start_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->start_time)),
            'end_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->end_time)),
            "date" => date('Y-m-d'),
            "jodi_id"  => $request->id
        ]);

        return response()->json(['status' => 'success', 'data' => [], 'message' => 'Data update successfully!!']);
    }

    public function addMarketSerial(Request $request){
      
        $inputData = [
            'market_id' => $request->market_id
        ];
        Marketserial::updateOrCreate(['id'   => 1], $inputData);
        return response()->json(['status' => 'success', 'data' => [], 'message' => 'Market serial updated successfully!!']);
    }

    public function getMarketResult(Request $request){
        $name = $request->name??0;  
        $jodiDetails = Jodi::select("*")->with('jodi_number')->get()->map(function($items){
            $items->result = $items->jodi_number?->result;
            $items->start_time_format = $items->result != ''?date('h:i a', strtotime($items->jodi_number?->start_time)):'';
            $items->end_time_format = $items->result != ''?date('h:i a', strtotime($items->jodi_number?->end_time)):'';
            $items->start_time = $items->result != ''?$items->jodi_number?->start_time:date('Y-m-d H:i:s', time());
            $items->end_time = $items->result != ''?$items->jodi_number?->end_time:date('Y-m-d H:i:s', time());
            return $items;
        });

        return response()->json(['status' => 'success', 'data' => $jodiDetails]);
    }

    public function updateMarketResult(Request $request){

        $jodino = Jodinumber::updateOrCreate(["date" => date('Y-m-d'), 'jodi_id' => $request->id], [
            "result" => $request->result,
            'start_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->start_time)),
            'end_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->end_time)),
            "date" => date('Y-m-d'),
            "jodi_id"  => $request->id
        ]);

        $jodi = Jodi::where(['id' => $request->id])->update([
            "result" => $request->result,
            'start_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->start_time)),
            'end_time' => date("Y-m-d").' '.date("H:i:s", strtotime($request->end_time)),
        ]);

        return response()->json(['status' => 'success', 'data' => [], 'message' => 'Market serial updated successfully!!']);

    }
}
