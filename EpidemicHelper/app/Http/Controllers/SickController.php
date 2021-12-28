<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sick;
use App\Models\Country;
use App\Models\Severity;
use App\Models\Year;
use App\Models\Month;
use App\Models\Day;
class SickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sicks = Sick::select('*')
        ->leftJoin("Severity", "Severity.severity_level_id", "=", "Sick.severity_level_id")
        ->leftJoin("Country", "Country.country_id", "=", "Sick.country_id")
        ->get();
        return view('sicks.index' , compact('sicks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       

        
        return view('severityLevelSearch');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sick $sick)
    {
        // //
        $sopts = Severity::all();
        $copts = Country::all();
        $yopts = Year::all();
        $mopts = Month::all();
        $dopts = Day::all();
        
        // $flight = Flight::where('airplane_id',$flightdata->airplane_id)->leftJoin("Airport", "Airport.airport_id", "=", "Flight.airport_id")->get();
        return view('sicks.edit', compact( 'copts' ,'sopts' ,'yopts','mopts','dopts','sick'));//compact將變數傳出，套用相同變數名稱
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sick $sick)
    {
        Sick::where('severity_level_id',$sick->severity_level_id)
        ->where('country_id',$sick->country_id)
        ->where('year_id',$sick->year_id)
        ->where('month_id',$sick->month_id)
        ->where('day_id',$sick->day_id) -> update([     'severity_level_id' => $request->input('severity_name') ,
                                                        'country_id' => $request->input('_country_name') ,
                                                        'year_id' => $request->input('_year') ,
                                                        'month_id' => $request->input('_month') ,
                                                        'day_id' => $request->input('_day')]);
        
        // $flight->update();

        return redirect()->route('sicks.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
