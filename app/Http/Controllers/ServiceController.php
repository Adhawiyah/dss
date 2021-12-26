<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
  
    public function index()
    {
        $services = Service::all();
        return view('services.servicesList', compact('services'));
    }

    public function create()
    {
       return view('services.servicesCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_type'=>'required',
            'service_status'=>'required',
        ]);

        $services = Service::create([
            'service_type'=>$request->service_type,
            'service_status'=>$request->service_status,
        ]);

        return redirect()->route('services.index')->with('Success!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('services.servicesEdit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_type'=>'required',
            'service_status'=>'required',
        ]);

        $services = Service::find($id);
        $services->service_type = $request->service_type;
        $services->service_status = $request->service_status;
        $services->save();
    }

    public function destroy($services_id)  //CHECK BALIK NIII
    {
        
        $services_id = Service::find($services_id);
        $services_id->delete();

        return redirect('/services')->with('success', 'Contact deleted!');
    }
}
