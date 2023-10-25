<?php

namespace App\Http\Controllers;

use App\Models\Schgrade;
use App\Models\Schstudent;
use App\Http\Requests\StoreSchstudentRequest;
use App\Http\Requests\UpdateSchstudentRequest;
use App\Tables\schstudents;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SchstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('management.student.index',[
            'schstudents'=> schstudents::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management.student.create',[
            'schstudents'=> Schstudent::class,
            'schgrades' => Schgrade::query()->latest()->get('id','SchGrade','SchClass'),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchstudentRequest $request)
    {
        $this->validate($request, [
            'StudentNisn'=>['required','min:5'],
            'StudentNis'=>['required','min:5'],
            'StudentFname'=>['required','min:1'],
            'StudentLname'=>['required','min:1'],
            'StudentGender'=>['required','min:1'],
            'StudentReligion'=>['required','min:1'],
            'StudentPob'=>['required','min:1'],
            'StudentDob'=>['required','min:1'],
            'StudentAddress'=>['required','min:1'],
            'StudentVillage'=>['required','min:1'],
            'StudentSubdistrict'=>['required','min:1'],
            'StudentDistrict'=>['required','min:1'],
            'StudentProvince'=>['required','min:1'],
            'StudentWhatsapp'=>['required','min:1'],
            'StudentToken' => ['required'],
            'StudentEmail' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::defaults(),Hash::make($request->password)],
            'schgrades_id',
        ]);
        SchStudent::create($request->all());
        return redirect()->route('managements.students.index')->with('success','add data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schstudent $schstudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schstudent $schstudent)
    {
        return view('management.student.edit',compact('schstudent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchstudentRequest $request, Schstudent $schstudent)
    {
        $schstudent->update([
            'StudentNisn'=> $request->get('StudentNisn'),
            'StudentNis'=> $request->get('StudentNis'),
            'StudentFname'=> $request->get('StudentFname'),
            'StudentLname'=> $request->get('StudentLname'),
            'StudentGender'=> $request->get('StudentGender'),
            'StudentReligion'=> $request->get('StudentReligion'),
            'StudentAddress'=> $request->get('StudentAddress'),
            'StudentVillage'=> $request->get('StudentVillage'),
            'StudentSubdistrict'=> $request->get('StudentSubdistrict'),
            'StudentDistrict'=> $request->get('StudentDistrict'),
            'StudentProvince'=> $request->get('StudentProvince'),
            'StudentCountry'=> $request->get('StudentCountry'),
            'StudentWhatsapp'=> $request->get('StudentWhatsapp'),
            'StudentEmail'=> $request->get('StudentEmail'),
            'schgrades_id'=> $request->get('schgrades_id'),
        ]);
        return redirect()->route('managements.students.index')->with('success','update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schstudent $schstudent)
    {
        $schstudent->delete();
        return redirect()->route('managements.students.index')->with('success','delete data');
    }
    
    
}
