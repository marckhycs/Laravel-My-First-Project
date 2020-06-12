<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $data = \App\Services::all();
        return view('service.index', compact('data'));
    }


    public function create(){
        return view('service.create');
    }

    public function store(){

        //validating info
        $data = request()->validate([
            'name' => 'required',
        ]);

        \App\Services::create($data);
        return redirect('/service');

      /*
        $service = new \App\Services();
        //getting the data 
        $service->name = request('name');
        //saving to database
        $service->save();
        //redirecting back to the page
       */
    }

    public function show(\App\Services $services){
        return view('service.show', compact('services'));
    }
}
