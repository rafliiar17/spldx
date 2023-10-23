<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-blue">
    <div>
        @isset($logo)
            {{ $logo }}
        @else
            <Link href="/">
                <img src="{{ asset('logo/logo.png') }}" alt="PintuSekolah" class="w-27 h-20 fill-current text-blue-500 flex" />
            </Link>
        @endisset
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
