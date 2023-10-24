<?php

namespace App\Tables;

use App\Models\schconfig;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Maatwebsite\Excel\Excel;
class schconfigs extends AbstractTable
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
        return schconfig::query();
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
            ->withGlobalSearch(columns: ['SchCode','SchValue'])
            ->column('no')
            ->column('SchCode', label: 'Code', sortable: true, canBeHidden:false ) 
            ->column('SchValue', label: 'Value', sortable:true, canBeHidden:false)
            ->column('actions', canBeHidden:false, exportAs:false)
            ->paginate(10)
        
            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction()
            ->export(
                label: 'Excel export',
                filename: 'config.xlsx',
                type: Excel::XLSX
            );
    }
}
