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
    public function edit($id, lisst $lisst)
    {
        $data = $lisst->find($id);
        return view('update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lisst  $lisst
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, lisst $lisst)
    {
        $update = $lisst->find($id);
        $update->update($request->all());
        return redirect()->route('list.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lisst  $lisst
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, lisst $lisst)
    {
       $list = $lisst->find($id);
       $list->delete();
       return redirect()->route('list.index');
    }
    public function destroyall(lisst $lisst)
    {

        $list = $lisst->where('user_id', Auth()->user()->id)->get();
        foreach ($list as $key => $value) {
            $value->delete();

        }
        return redirect()->route('list.index');

    }

}
