<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Civilian;
use Illuminate\Http\Request;

class CivilianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Civilian  $civilian
     * @return \Illuminate\Http\Response
     */
    public function show(Civilian $civilian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Civilian  $civilian
     * @return \Illuminate\Http\Response
     */
    public function edit(Civilian $civilian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Civilian  $civilian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Civilian $civilian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Civilian  $civilian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Civilian $civilian)
    {
        //
    }

    public function searchCivilian(Request $request) {
        $civilians = [];
        if($request->has('q')){
            $search = $request->q;
            $civilians =Civilian::select("id", "full_name")
                ->where('full_name', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($civilians);
    }
}
