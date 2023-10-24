<x-app-layout>
    <x-slot name="header">
        <x-splade-data default="{ open: false }">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                
                <x-navlinku> {{-- INI PERLU UNTUK NAVBAR     --}}
                
                </x-navlinku>            
                        </div>
                        <div class="content-stretch">
                            <Link href="{{ route('managements.grades.create') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md font-semibold hover:bg-green-400 shadow-md shadow-slate-200 hover:text-white items-center">
                                New Grade
                                </Link>
                            </div>
                        </div>
                       
                    </nav>
                    
                </x-splade-data>
    </x-slot>

    

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 shadow-md bg-white">
                <x-splade-table :for="$schgrade">
                    <x-splade-cell SchStatus as="$schgrade">
                        @if ($schgrade->SchStatus==0)
                            Non-Active
                        @elseif ($schgrade->SchStatus==1)
                            Active
                        @else 
                            Blocked
                        @endif
                    </x-splade-cell>
                    <x-splade-cell actions as="$schgrade">
                        <Link href="{{ route('managements.grades.edit', $schgrade->id) }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md font-semibold hover:bg-yellow-400 hover:shadow-md hover:shadow-slate-200 hover:text-white mr-3"> Edit </Link>
                        <Link confirm="Hapus Config" confirm-text="Apakah kamu yakin akan menghapusnya?" confirm-button="Ya, hapus" cancel-button="Batal" href="{{ route('managements.grades.destroy', $schgrade->id) }}" method="DELETE" class="px-4 py-2 bg-slate-700 text-white rounded-md hover:bg-red-500 hover:shadow-md hover:shadow-slate-300"> Hapus </Link>
                    </x-splade-cell>
                </x-splade-table>
                
            </div>
        </div>
    </div>
</x-app-layout>
