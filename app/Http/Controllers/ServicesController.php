<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Services;

class ServicesController extends Controller
{
    public function index(){
        $data =Services::all();
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

    public function show(Services $services){
        return view('service.show', compact('services'));
    }

    public function edit(Services $services){
        return view('service.edit', compact('services'));
    }

    public function update(Services $services){
        $data = request()->validate([
            'name' => 'required',
        ]);

        $services->update($data);

        return redirect('/service');
    }

    public function destroy(Services $services){
    
        $services->delete();
        return redirect('/service');
    }
}
