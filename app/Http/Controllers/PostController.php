<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view("posts.form");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.form"); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function put(Request $request)
    {
        return $request->all();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return $request->all();
    }
}