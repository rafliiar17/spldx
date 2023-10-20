<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-6xl mx-auto py-3 px-2 sm:px-5 lg:px-2">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
