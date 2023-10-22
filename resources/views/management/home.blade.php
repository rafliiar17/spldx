<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
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
                                <x-nav-link href="{{ route('managements.configs.index') }}" :active="request()->routeIs('managements.configs.index')">
                                    {{ __('Config') }}
                                </x-nav-link>
                                <x-nav-link href="{{ route('managements.class.index') }}" :active="request()->routeIs('managements.class.index')">
                                    {{ __('Class') }}
                                </x-nav-link>
                            </div>
                        </div>
        
                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="data.open = ! data.open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path v-bind:class="{'hidden': data.open, 'inline-flex': ! data.open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path v-bind:class="{'hidden': ! data.open, 'inline-flex': data.open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                </div>
        
                <!-- Responsive Navigation Menu -->
                {{-- <div v-bind:class="{'block': data.open, 'hidden': ! data.open }" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-responsive-nav-link>
        
                        <x-responsive-nav-link href="{{ route('docs') }}" :active="request()->routeIs('docs')">
                            {{ __('Documentation') }}
                        </x-responsive-nav-link>
        
                        <x-responsive-nav-link href="{{ route('bootstrap') }}" :active="request()->is('bootstrap','tab/bs/1','tab/bs/2','tab/bs/3')">
                            {{ __('Bootstrap') }}
                        </x-responsive-nav-link>
        
                        <x-responsive-nav-link href="{{ route('daisyui') }}" :active="request()->is('daisyui','tab/dui/1','tab/dui/2','tab/dui/3')">
                            {{ __('DaisyUI') }}
                        </x-responsive-nav-link>
        
                        <x-responsive-nav-link href="{{ route('flowbite') }}" :active="request()->is('flowbite','tab/fb/1','tab/fb/2','tab/fb/3')">
                            {{ __('Flowbite') }}
                        </x-responsive-nav-link>
        
                        <x-responsive-nav-link href="{{ route('preline') }}" :active="request()->is('preline','tab/prl/1','tab/prl/2','tab/prl/3')">
                            {{ __('Preline') }}
                        </x-responsive-nav-link>
        
                        <x-responsive-nav-link href="{{ route('rippleui') }}" :active="request()->is('rippleui','tab/rui/1','tab/rui/2','tab/rui/3')">
                            {{ __('RippleUI') }}
                        </x-responsive-nav-link>
                    </div>
                </div> --}}
            </nav>
        </x-splade-data>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
