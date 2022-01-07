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
        
        return view('services.edit', compact('service'));
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

        return redirect()->route('services.index')->with('Success', 'Service updated!');;
    }

    public function destroy($services_id)  //CHECK BALIK NIII
    {
        
        $services_id = Service::find($services_id);
        $services_id->delete();

        return redirect('/services')->with('Success', 'Service deleted!');
    }
    
}
