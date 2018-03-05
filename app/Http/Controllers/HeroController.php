<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    //
    public function index()
{
    $heroes = \App\Hero::orderBy('name', 'ASC')->get();

    return view('hero/index', ['heroes' =>$heroes]);
}


    public function store(Request $request)
    {
        $newRow = new \App\Emergency();

        $newRow->subject = $request->input('subject');
        $newRow->description = $request->input('description');
        $newRow->save();
    }
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();
        // for some reason you have to access hero/[insert hero] twice for the content to appear
        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }
}
