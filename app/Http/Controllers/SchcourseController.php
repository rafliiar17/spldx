<?php

namespace App\Http\Controllers;

use App\Models\Schcourse;
use App\Http\Requests\StoreSchcourseRequest;
use App\Http\Requests\UpdateSchcourseRequest;
use App\Tables\schcourses;
use ProtoneMedia\Splade\Components\Toast;

class SchcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('management.course.index',[
            'schcourses'=> schcourses::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management.course.create',[
            'schcourses'=> Schcourse::class
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchcourseRequest $request)
    {
        $this->validate($request,[
            'SchCourseName'=> 'required|min:1',
            // 'SchCourseStatus'=> 'required',
        ]);
        Schcourse::create($request->all());
        return redirect()->route('managements.courses.index')->with(Toast::class,'Success add data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schcourse $schcourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schcourse $schcourse)
    {
        return view('management.course.edit',compact('schcourse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchcourseRequest $request, Schcourse $schcourse)
    {
        $schcourse->update([
            'SchCourseName'=> $request->get('SchCourseName'),
            'SchCourseStatus'=> $request->get('SchCourseStatus'),
        ]);
        return redirect()->route('managements.courses.index')->with(Toast::class,('Success Update Data!') .''. $schcourse->id .'');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schcourse $schcourse)
    {
        $schcourse->delete();
        return redirect()->route('managements.courses.index')->with(Toast::class,('Success Update Data!') .''. $schcourse->id .'');
    }
}
