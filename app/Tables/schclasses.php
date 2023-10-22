<?php

namespace App\Tables;

use App\Models\schclass;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\AbstractTable;

class schclasses extends AbstractTable
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
        return schclass::query();
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
            ->withGlobalSearch(columns: ['schGrade','schClass','schStatus'])
            // ->column('id', sortable: true)
            ->column(key:'schGrade',label: 'Grades', sortable: true)
            ->column(key:'schClass',label: 'Class', sortable: true)
            ->column(key:'schStatus', label:'Status',sortable: true)
            ->column('actions', canBeHidden:false, exportAs:false)
            ->paginate(10)
            ->export(
                label: 'Excel export',
                filename: 'config.xlsx',
                type: Excel::XLSX
            );

            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction()
            // ->export()
    }
}
