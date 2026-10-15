<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

           <div class="flex">
                {{--<div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>--}}

                <div class="hidden sm:flex sm:ms-10 space-x-8">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">

                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-sm text-gray-500 bg-white rounded-md">
                                {{ Auth::user()->currentTeam->name }}
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                Team Settings
                            </x-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-dropdown-link href="{{ route('teams.create') }}">
                                    Create New Team
                                </x-dropdown-link>
                            @endcan
                        </x-slot>
                    </x-dropdown>
                </div>
                @endif

                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex text-sm rounded-full">
                                <img class="h-8 w-8 rounded-full"
                                     src="{{ Auth::user()->profile_photo_url }}"
                                     alt="{{ Auth::user()->name }}">
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="px-4 py-2 text-xs text-gray-400">
                                Manage Account
                            </div>

                            <x-dropdown-link href="{{ route('user.profile') }}">
                                Profile
                            </x-dropdown-link>

                            <div class="border-t border-gray-200"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Log Out
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <div class="flex items-center sm:hidden">
                <button @click="open = !open">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" class="sm:hidden">
        <x-responsive-nav-link href="{{ route('dashboard') }}">
            Dashboard
        </x-responsive-nav-link>

        <x-responsive-nav-link href="{{ route('user.profile') }}">
            Profile
        </x-responsive-nav-link>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link href="{{ route('logout') }}"
                onclick="event.preventDefault(); this.closest('form').submit();">
                Log Out
            </x-responsive-nav-link>
        </form>
    </div>
</nav>
