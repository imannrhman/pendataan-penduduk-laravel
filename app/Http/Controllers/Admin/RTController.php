<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRTRequest;
use App\Models\Civilian;
use App\Models\RT;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class RTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $list_rt = RT::get();
        return view('admin.rt.index', ['list_rt' => $list_rt]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.rt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRTRequest $request)
    {
        $rt = RT::create($request->except('head_of_rt'));

        $civilian = Civilian::firstWhere('id', $request->only('head_of_rt'));

        $rt->civilian()->attach($civilian);

        return redirect('rt');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\RT $rt
     * @return \Illuminate\Http\Response
     */
    public function show(RT $rt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\RT $rt
     * @return \Illuminate\Http\Response
     */
    public function edit(RT $rt)
    {
        return view('admin.rt.edit', ['rt' => $rt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\RT $rt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RT $rt)
    {
        $rt = RT::find($rt->id);


        $rt->no_rt =  $request->get('no_rt');
        $rt->updated_at = new \DateTime;
        $rt->save();

        $rt->civilian()->detach();
        $civilian = Civilian::firstWhere('id', $request->get('head_of_rt'));
        $rt->civilian()->attach($civilian);
        return redirect('rt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\RT $rt
     * @return \Illuminate\Http\Response
     */
    public function destroy(RT $rt)
    {
        $rt = RT::find($rt->id);
        $rt->civilian()->detach();
        $rt->delete();
        $response=[];
        $response["success"] = true;
        $response["message"] = "Berhasil menghapus data";
        return response()->json($response, 201);
    }
}
