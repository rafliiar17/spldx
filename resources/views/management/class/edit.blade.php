<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Config') }}
            </h2>
            <Link href="{{ route('managements.classes.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 text-white rounded-md shadow-md shadow-indigo-200">
            Back
            </Link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-splade-form :default="$schclass" method="PUT" :action="route('managements.classes.update', $schclass->id)" class="max-w-md mx-auto py-4 px-6 bg-white rounded-md shadow-sm shadow-gray-300">
                <x-splade-input name="schGrade" label="Grade" value="" class="pb-3"/>
             
                <x-splade-input name="schClass" label="Class" class="pb-3"/>
                <x-splade-select name="schStatus" Label="Status" class="pb-3">
                    <option value="0">Non-Active</option>
                    <option value="1">Active</option>
                    <option value="99">Block</option>
                 </x-splade-select>
                <x-splade-submit class="mb-2 mt-3"/>
            </x-splade-form>
        </div>
    </div>
</x-app-layout>
