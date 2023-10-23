<?php

namespace App\Tables;

use App\Models\schgrade;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Maatwebsite\Excel\Excel;

class schgrades extends AbstractTable
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
        return schgrade::query();
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
            ->withGlobalSearch(columns: ['SchGrade','SchClass','SchStatus'])
            // ->column('id', sortable: true)
            ->column('SchGrade', sortable: true)
            ->column('SchClass', sortable: true)
            ->column('SchStatus', sortable: true)
            ->selectFilter(key: 'SchStatus', label: 'Status', options: [
                '0' => 'Non-Active',
                '1' => 'Active',
                '99'=> 'Blocked'
                ])
            ->column('actions', canBeHidden:false, exportAs:false)
            ->paginate(10)
            
            ->export(
                label: 'Excel export',
                filename: 'Grade.xlsx',
                type: Excel::XLSX
            );
    }
}
