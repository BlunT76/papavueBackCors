<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Auth;
use App\Category;

//use App\User;
//use App\Link;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
                //$use_id = $request->user()->id;
                //$user = $request->user();
                //$currentuserid = Auth::user()->id;
                //$cat = Category::where('user_id',$user_id)->get();
                //$links = 
                //->comments()->where('title', 'foo')->first();
                //return App\Category::find(1)->links()->where('user_id', $user_id)->get();
        // return response()->json([
        //     'cat' => $request->user()->id
        // ]);
                //return $comment;
                //return Category::with('links.from')->find($user_id);
                //$req = User::with('getCategory.links')->find(2);
        $res = Category::with('links')->get();
        return response()->json([
            'cat' => $res
        ]);
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
        $cat = new Category;
        $cat->name = $request->name;
        $cat->user_id = $user_id;
        $cat->save();

        return response()->json([
            'message' => $user_id
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
