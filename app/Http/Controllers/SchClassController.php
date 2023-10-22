<?php

namespace App\Http\Controllers;

use App\Models\Schclass;
use App\Http\Requests\StoreSchclassRequest;
use App\Http\Requests\UpdateSchclassRequest;
use ProtoneMedia\Splade\Facades\Toast;

class SchclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home(){
        return view("management.home",[
            "mhome"=> Schclass::all()
        ]);
    }
    public function index()
    {
        return view("management.class.index",[
            "schclasses"=> Schclass::all()
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("management.class.create",[
            "schclass"=> Schclass::class
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchclassRequest $request)
    {
        $this->validate($request, [
            "schGrade"=> "required|min:1",
            "schClass"=> "required|min:1",
            "schStatus"=> "required|min:1",
        ]);
        Schclass::create($request->all());
        return redirect()->route("managements.class.index")->with("success","add data");
    }

    /**
     * Display the specified resource.
     */
    public function show(Schclass $schclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schclass $schclass)
    {
        return view("managements.class.edit",compact("schclass"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchclassRequest $request, Schclass $schclass)
    {
        $schclass->update([
            "schGrade"=> $request->get("schGrade"),
            "schClass"=> $request->get("schClass"),
            "schStatus"=> $request->get("schStatus"),
        ]);
        Toast::title("Success updated!");
        return redirect()->route("managements.class.index")->with("success","updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schclass $schclass)
    {
        $schclass->delete();
        Toast::title("success deleted!");
        return redirect()->route("managements.class.index")->with("success","deleted!");
    }
}
