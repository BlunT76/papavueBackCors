<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user_id = $request->user()->id;
        $newlink = new Link;
        $newlink->desc = $request->desc;
        $newlink->url = $request->url;
        $newlink->category_id = $request->cat_id;
        $newlink->user_id = $user_id;
        $newlink->save();
        return response()->json([
            'message' => 'Successfully created link!'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $user_id = $request->user()->id;
        // $newlink = new Link;
        // $newlink->desc = $request->desc;
        // $newlink->url = $request->url;
        // $newlink->category_id = $request->cat_id;
        // $newlink->user_id = $user_id;
        // $newlink->save();
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        //
    }
}
