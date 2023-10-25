<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Student') }}
            </h2>
            <Link href="{{ route('managements.students.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 text-white rounded-md shadow-md shadow-indigo-200">
            Back
            </Link>
        </div>
    </x-slot>

    <div class="py-10 container-fluid">
        
            <x-splade-form :action="route('managements.students.store')" class="container px-4 max-w7xl mx-auto  rounded-xl">
            <div class="grid gap-1 grid-cols-2">
                <div> 
                    <div class="max-w-sm ml-20 py-4 px-6 bg-white rounded-md shadow-sm shadow-gray-300">
                        <x-splade-input name="StudentNisn" label="Nomor Induk Siswa Nasional" class="pb-3"/>
                        <x-splade-input name="StudentNis" label="Nomor Induk Sekolah" class="pb-3"/>
                        <x-splade-input name="StudentFname" label="First Name" class="pb-3"/>
                        <x-splade-input name="StudentLname" label="Last Name" class="pb-3"/>
                        
                        <x-splade-select name="StudentGender" label="Gender" class="pb-3">
                            <option value="">Choose One</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </x-splade-select>
        
                        <x-splade-select name="StudentReligion" label="Religion" class="pb-3">
                            <option value="">Choose One</option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Protestan</option>
                            <option value="4">Buddha</option>
                            <option value="5">Hindu</option>
                            <option value="6">Konghucu</option>
                            <option value="7">Atheis</option>
                        </x-splade-select><x-splade-submit class="mb-2 mt-3"/>
                </div>
            </div>
            
            </x-splade-form> 
        </div>
    </div>
</x-app-layout>
