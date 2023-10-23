<?php

namespace App\Http\Controllers;

use App\Models\Schconfig;
use ProtoneMedia\Splade\Facades\Toast;
use App\Http\Requests\StoreSchconfigRequest;
use App\Http\Requests\UpdateSchconfigRequest;
use App\Tables\schconfigs;

class SchconfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view("management.home",[
            'mhome' => Schconfig::class
        ]);
    }

    public function index()
    {
        return view("management.config.index",[
            'schconfig' => schconfigs::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management.config.create',[
            'schconfig'=> Schconfig::class
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchconfigRequest $request)
    {
        $this->validate($request, [
            'SchCode' => 'required|min:1',
            'SchValue'=> 'required|min:1',
        ]);

        Schconfig::create($request->all());
        return redirect()->route('managements.configs.index')->with(Toast::class,'Success insert');

    }

    /**
     * Display the specified resource.
     */
    public function show(Schconfig $schconfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schconfig $schconfig)
    {
        return view('management.config.edit',compact('schconfig'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchconfigRequest $request, Schconfig $schconfig)
    {
        $schconfig->update([
            'SchCode'=> $request->get('SchCode'),
            'SchValue'=> $request->get('SchValue'),
        ]);
        Toast::title('success updated');
        return redirect()->route('managements.configs.index')->with('success','nice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schconfig $schconfig)
    {
        $schconfig->delete();
        Toast::title('Success Deleted Data!');
        return redirect()->route('managements.configs.index')->with('success','deleted data');
    }
}
