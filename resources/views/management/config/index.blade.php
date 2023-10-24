<x-app-layout>
    <x-slot name="header">
        <x-splade-data default="{ open: false }">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                
                <x-navlinku> {{-- INI PERLU UNTUK NAVBAR     --}}
                
                </x-navlinku>            
                        </div>
                        <div class="content-stretch">
                            <Link href="{{ route('managements.configs.create') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md font-semibold hover:bg-green-400 shadow-md shadow-slate-200 hover:text-white items-center">
                                Add Data
                                </Link>
                            </div>
                        </div>
                       
                    </nav>
                    
                </x-splade-data>
    </x-slot>

    

    <div class="py-10">
            <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 shadow-md bg-white rounded-xl">
                <x-splade-table :for="$schconfig">
                    <x-splade-cell no="$schconfig->SchCode->count()">
                        @foreach ($schconfig as $no)
                            {{ $no->no }}
                        @endforeach
                    </x-splade-cell>
                                                   

                    <x-splade-cell actions as="$schconfig">
                        <Link href="{{ route('managements.configs.edit', $schconfig->id) }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md font-semibold hover:bg-yellow-400 hover:shadow-md hover:shadow-slate-200 hover:text-white mr-3"> Edit </Link>
                        <Link confirm="Hapus Config" confirm-text="Apakah kamu yakin akan menghapusnya?" confirm-button="Ya, hapus" cancel-button="Batal" href="{{ route('managements.configs.destroy', $schconfig->id) }}" method="DELETE" class="px-4 py-2 bg-slate-700 text-white rounded-md hover:bg-red-500 hover:shadow-md hover:shadow-slate-300"> Hapus </Link>
                    </x-splade-cell>
                </x-splade-table>
                
            </div>
        </div>
    </div>
</x-app-layout>
