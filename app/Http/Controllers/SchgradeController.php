<?php

namespace App\Http\Controllers;

use App\Models\Schgrade;
use App\Http\Requests\StoreSchgradeRequest;
use App\Http\Requests\UpdateSchgradeRequest;
use ProtoneMedia\Splade\Facades\Toast;
use App\Tables\schgrades;

class SchgradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('management.grade.index',[
            'schgrade'=> schgrades::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management.grade.create',[
            'schgrades' => Schgrade::class
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchgradeRequest $request)
    {
        $this->validate($request, [
            'SchGrade'=>['required','string','min:1'],
            'SchClass'=> ['required','string','min:1'],
        ]);
        Schgrade::create($request->all());
        return redirect()->route('managements.grades.index')->with(Toast::class,'Success add data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schgrade $schgrade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schgrade $schgrade)
    {
        return view('management.grade.edit',compact('schgrade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchgradeRequest $request, Schgrade $schgrade)
    {
       $schgrade->update([
        'SchGrade'=> $request->get('SchGrade'),
        'SchClass'=> $request->get('SchClass'),
        'SchStatus'=> $request->get('SchStatus'),
       ]);
       return redirect()->route('managements.grades.index')->with(Toast::class,'Success Update Data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schgrade $schgrade)
    {
        $schgrade->delete();
        Toast::title('Success Deleted Data!');
        return redirect()->route('managements.grades.index')->with('success','deleted data');
    }
}
