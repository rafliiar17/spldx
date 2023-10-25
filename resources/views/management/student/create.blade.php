
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between mb-1">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Student') }}
            </h2>
            <Link href="{{ route('managements.students.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 text-white rounded-md shadow-md shadow-indigo-200">
            Back
            </Link>
        </div>
    </x-slot>
        <div class="p-10">
            <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 rounded-xl">
                <x-splade-form :action="route('managements.students.store')">
        
                    <div class="grid gap-2 mb-2 md:grid-cols-2 max-w-12xl p-10 bg-white rounded-xl">
                        <div class="grid gap-2 mb-2 md:grid-cols-2">
                            <x-splade-input type="number" name="StudentNisn" label="Nomor Induk Siswa Nasional" class="pb-3" required min="0"/>
                            <x-splade-input type="number" name="StudentNis" label="Nomor Induk Sekolah" class="pb-3 block" required min="0"/>
                        </div>
                        
                        <div class="grid gap-2 mb-2 md:grid-cols-2">
                            <x-splade-select name="StudentGender" label="Jenis Kelamin" placeholder="select one" required>
                                <option value="">choose one</option>
                                <option value="M">Laki-Laki</option>
                                <option value="F">Perempuan</option>
                             </x-splade-select>
                             <x-splade-select name="StudentReligion" label="Religion" class="pb-3" required>
                                <option value="">Choose One</option>
                                <option value="1">Islam</option>
                                <option value="2">Kristen</option>
                                <option value="3">Protestan</option>
                                <option value="4">Buddha</option>
                                <option value="5">Hindu</option>
                                <option value="6">Konghucu</option>
                                <option value="7">Atheis</option>
                            </x-splade-select>
                        </div>
                        <div class="grid gap-2 mb-2 md:grid-cols-2">
                            <x-splade-input name="StudentFname" label="Nama Depan" class="pb-3" required/>
                            <x-splade-input name="StudentLname" label="Nama Akhir" class="pb-3 block"/>
                        </div>
                        <div class="grid gap-2 mb-2 md:grid-cols-2">
                            <x-splade-input name="StudentPob" label="Tempat Lahir" class="pb-3" required/>
                            <x-splade-input name="StudentDob" label="Tanggal Lahir" class="pb-3 block" date required/>
                        </div>
                        <div>
                            <x-splade-input name="StudentAddress" label="Alamat" class="pb-3 block"/>
                        </div>
                        <div>  
                            <div class="grid gap-4 mb-4 md:grid-cols-4">
                                <div>
                                    <x-splade-input name="StudentVillage" label="Kelurahan" class="pb-3 block"/>
                                </div>
                                    <x-splade-input name="StudentSubdistrict" label="Kecamatan" class="pb-3 block"/>   
                                    <x-splade-input name="StudentDistrict" label="Kabupaten" class="pb-3 block"/>   
                                    <x-splade-input name="StudentProvince" label="Provinsi" class="pb-3 block"/>   
                            </div>
                            
                        </div>
                        <div>
                            <x-splade-input id="StudentEmail" name="StudentEmail" type="email" :label="__('Email')" required autocomplete="email" class="pb-3"/>
                            <x-splade-input type="number" name="StudentWhatsapp" label="Whatsapp" class="pb-3 block" min="62" value="62" placeholder="+62"/>
                        </div>
                        <div class="grid gap-2 mb-2 md:grid-cols-2">
                           
                            <x-splade-input id="password" name="password" type="password" :label="__('New Password')" autocomplete="new-password" min="8" />
                            <x-splade-input id="password_confirmation" name="password_confirmation" type="password" :label="__('Confirm Password')" autocomplete="new-password" min="8" />
                            <div>
                                @foreach ($schgrades as $kelas)
                                     <x-splade-select name="schgrades_id" :options="$kelas" choices label="KELAS"/>
                                @endforeach

                            </div>                    
                        </div>
                        <div>
                       
                    </div>
                    
                </div>
                <x-splade-submit class="max-w7xl flex mx-auto mb-2 mt-3"/>
    
                </x-splade-form>
            </div>
        </div>
</x-app-layout>