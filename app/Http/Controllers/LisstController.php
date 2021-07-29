<?php

namespace App\Http\Controllers;

use App\Models\lisst;
use Illuminate\Http\Request;

class LisstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(lisst $list)
    {
        $data = $list->where('user_id', Auth()->user()->id)->get();
        return view('teste', compact('data'));
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
    public function store(Request $request,lisst $list)
    {
        $list->create([
            'user_id'   =>  Auth()->user()->id,
            'name'      =>  $request->name,
            'quantidade'    =>  $request->quantidade
        ]);
        return redirect()->route('list.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lisst  $lisst
     * @return \Illuminate\Http\Response
     */
    public function show(lisst $lisst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lisst  $lisst
     * @return \Illuminate\Http\Response
     */
    public function edit(lisst $lisst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lisst  $lisst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lisst $lisst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lisst  $lisst
     * @return \Illuminate\Http\Response
     */
    public function destroy(lisst $lisst)
    {
        //
    }
}
