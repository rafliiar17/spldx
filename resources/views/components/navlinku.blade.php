<div class="max-w-7xl mx-4 px-6 sm:px-16 lg:px-8">
    <div class="flex justify-between h-16">
        <div class="flex">
            <!-- Navigation Links -->
            <div class="hidden space-x-2 sm:-my-px sm:ml-1 sm:flex">
                <x-nav-link href="{{ route('managements.home') }}" :active="request()->routeIs('managements.home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('managements.configs.index') }}" :active="request()->routeIs('managements.configs.index')">
                    {{ __('Config') }}
                </x-nav-link>
                <x-nav-link href="{{ route('managements.grades.index') }}" :active="request()->routeIs('managements.grades.index')">
                    {{ __('Grade/Class') }}
                </x-nav-link>
                <x-nav-link href="{{ route('managements.courses.index') }}" :active="request()->routeIs('managements.courses.index')">
                    {{ __('Courses') }}
                </x-nav-link>
                <x-nav-link href="{{ route('managements.students.index') }}" :active="request()->routeIs('managements.students.index')">
                    {{ __('Students') }}
                </x-nav-link>
        </div>