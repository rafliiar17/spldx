<?php

namespace App\Tables;

use App\Models\schstudent;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class schstudents extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return schstudent::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['StudentNisn','StudentNis','StudentFName','StudentLname','StudentGender','StudentReligion','StudentPob','StudentDob','StudentAddress','StudentVillage','StudentSubdistrict','StudentDistrict','StudentProvince','StudentCountry','StudentEmail','StudentWhatsapp','schgrades_id','StudentStatus','email_verified_at','StudentPassword','remember_token','created_at','updated_at'])
            ->column('StudentNisn', label:'Nisn',sortable:true)
            ->column('StudentNis', label:'Nis',sortable:true)
            ->column('StudentFname', label:'Fname',sortable:true)
            ->column('StudentLname', label:'Lname',sortable:true)
            ->column('StudentGender', label:'Gender',sortable:true)
            ->column('StudentReligion', label:'Agama',sortable:true)
            ->column('StudentPob', label:'Tempat Lahir',sortable:true)
            ->column('StudentDob', label:'Tanggal Lahir',sortable:true)
            ->column('StudentAddress', label:'Alamat',sortable:true)
            ->column('StudentVillage', label:'Kelurahan',sortable:true)
            ->column('StudentSubdistrict', label:'Kecamatan',sortable:true)
            ->column('StudentDistrict', label:'Kabupaten',sortable:true)
            ->column('StudentProvince', label:'Provinsi',sortable:true)
            ->column('StudentCountry', label:'Negara',sortable:true)
            ->column('StudentEmail', label:'Email',sortable:true)
            ->column('StudentWhatsapp', label:'Whatsapp',sortable:true)
            ->column('schgrades_id', label:'schgrades_id',sortable:true)
            ->column('StudentStatus', label:'Status',sortable:true)
            ->column('password', label:'Password',sortable:true)
            ->column('actions', canBeHidden:false, exportAs:false)
            ->paginate(10);
            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction()
            // ->export()
    }
}
