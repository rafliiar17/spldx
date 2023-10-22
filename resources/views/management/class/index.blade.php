<x-app-layout>
    <x-slot name="header">
        <x-splade-data default="{ open: false }">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                
                <div class="max-w-7xl mx-4 px-6 sm:px-16 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Navigation Links -->
                            <div class="hidden space-x-2 sm:-my-px sm:ml-1 sm:flex">
                                <x-nav-link href="{{ route('managements.home') }}" :active="request()->routeIs('managements.home')">
                                    {{ __('Home') }}
                                </x-nav-link>
                                <x-nav-link href="{{ route('managements.configs.index') }}" :active="request()->routeIs('managements.configs.*')">
                                    {{ __('Config') }}
                                </x-nav-link>
                                <x-nav-link href="{{ route('managements.classes.index') }}" :active="request()->routeIs('managements.classes.*')">
                                    {{ __('Class') }}
                                </x-nav-link>
                            </div>
                            
                        </div>
                        <div class="content-stretch">
                            <Link href="{{ route('managements.classes.create') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md font-semibold hover:bg-gray-400 shadow-md shadow-slate-200 hover:text-white items-center">
                                New Class
                                </Link>
                            </div>
                        </div>
                       
                    </nav>
                    
                </x-splade-data>
        {{-- <div class="flex justify-between">
            <div class=" space-x-1 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link href="{{ route('managements.home') }}" :active="request()->routeIs('managements.home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('managements.configs.index') }}" :active="request()->is('managements.configs.index')">
                    {{ __('Config') }}
                </x-nav-link>
            </div>
             --}}
            
    </x-slot>

    

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 shadow-md bg-white">
            <x-splade-table :for="$schclass">
                <x-splade-cell actions as="$schclass">
                    <Link href="{{ route('managements.classes.edit', $schclass->id) }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md font-semibold hover:bg-gray-400 hover:shadow-md hover:shadow-gray-200 hover:text-white mr-3"> Edit </Link>
                    <Link confirm="Hapus Kelas?" confirm-text="Apakah kamu yakin akan menghapusnya?" confirm-button="Ya, hapus" cancel-button="Batal" href="{{ route('managements.classes.destroy', $schclass->id) }}" method="DELETE" class="px-4 py-2 bg-slate-700 text-white rounded-md hover:bg-slate-500 hover:shadow-md hover:shadow-slate-300"> Hapus </Link>
                </x-splade-cell>
                {{-- <x-slot:empty-state>
                    <p>Whoops!</p>
                </x-slot> --}}
            </x-splade-table>
            
        </div>
    </div>
</div>
</x-app-layout>
