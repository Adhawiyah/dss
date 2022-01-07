<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Service;
use Illuminate\Http\Request;
use DB;
use App\Seller;

class ServiceController extends Controller
{
  
    public function index()
    {
        $services = Service::with('seller')
        ->get(); //edited
        return view('services.index', compact('services'));
    }

    public function create()
    {
        $seller = Seller::pluck('location','id');

        return view('services.create',compact('seller'));
    }

    public function store(Request $request)
    {      
        $services = Service::create([
            'service_type'=>$request->service_type,
            'service_status'=>$request->service_status,
            'seller_id' => $request->seller_id,
        ]);

        return redirect()->route('services.index')->with('Success!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Service $service)
    {
        $seller = Seller::pluck('location','id');
        return view('services.edit', compact('service','seller'));
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());

        return redirect()->route('services.index')->with('Success', 'Service has been edited!');;
    }

    public function destroy($services_id)  
    {
        
        $services_id = Service::find($services_id);
        $services_id->delete();

        return redirect('/services')->with('Success', 'Service deleted!');
    }
    
}
