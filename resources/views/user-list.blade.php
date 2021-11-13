<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white mt-1">
        <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->


        <div class="flex flex-col min-w-0 flex-1 overflow-hidden">

            <div class="flex-1 relative z-0 flex overflow-hidden">

                <aside class=" xl:order-first xl:flex xl:flex-col flex-shrink-0 w-96 border-r border-gray-200">
                    <div class="px-1 pt-6 pb-4 ">

                        <div class=" flex justify-between">


                            <div>
                                <h2 class="text-lg font-medium text-gray-900">Users</h2>
                                <p class="mt-1 text-sm text-gray-600">
                                    Search directory of {{number_format($Count, 0,'.',',')}}  Users
                                </p>
                            </div>
                            <div>
                                <button wire:click.prevent="UserCreateNew"

                                        type="button" class="inline-flex items-center px-2 py-0.5 border border-gray-400 shadow-sm text-xs leading-4 font-medium rounded-md text-gray-600 bg-transparent hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Add New
                                    <svg class="h-6 w-6" x-description="Heroicon name: solid/plus-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <form class="mt-6 flex space-x-4" action="#">
                            <div class="flex-1 min-w-0">
                                <label for="search" class="sr-only">Search</label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <!-- Heroicon name: solid/search -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <input type="search" name="search" id="search"
                                           class="focus:ring-green-500 focus:border-green-300 block w-full pl-10 sm:text-sm border-gray-300 rounded-md"
                                           placeholder="Search">
                                </div>
                            </div>
                            @if(!$UserCreate)
                            <button type="submit"
                                    class="inline-flex justify-center px-3.5 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                <!-- Heroicon name: solid/filter -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                                @endif
                        </form>
                    </div>
                    <!-- Directory list -->
                    <nav class="flex-1 min-h-0 overflow-y-auto" aria-label="Directory">
                        <div class="relative">

                            <ul role="list" class="relative z-0 divide-y divide-gray-200">


                                @forelse($Users as $UserId => $user)
                                    <li>
                                        <div
                                            class="relative px-3 py-1 flex items-center space-x-3 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-gray-500" >
                                            <div class="flex-shrink-0">
                                                @if($user->roles->count())
                                                    <img class="h-8 w-8 rounded-full"
                                                         src="{{cache()->remember($user->roles->first()->name,  13336 , fn()=> 'https://ui-avatars.com/api/?name='.$user->name.'&rounded=true&length=2&background=A7F3D0')}} "
                                                         alt="User Role">
                                                @else
                                                    <img class="h-8 w-8 rounded-full"
                                                         src="https://ui-avatars.com/api/?name=N A&rounded=true&length=2&background=A7F3D0 "
                                                         alt="User Role">
                                                @endif
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <a href="#" class="focus:outline-none" wire:click="SelectUser({{$user->id}})">
                                                    <!-- Extend touch target to entire panel -->
                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                    <p class="text-sm font-medium text-gray-900">
                                                        {{$user->name}}
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate">
                                                        {{$user->email}}
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <li>
                                        <div>
                                            <div class="flex-1 min-w-0">
                                                <a href="#" class="focus:outline-none">
                                                    <!-- Extend touch target to entire panel -->
                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                    <p class="text-sm font-medium text-gray-900">
                                                        No Users Found
                                                    </p>

                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                @endforelse

                            </ul>
                            <div class=" px-2 py-2">
                                {{ $Users->links() }}
                            </div>
                        </div>

                    </nav>
                </aside>
                @if($UserCreate)
                    @livewire('user-create')
                @endif
                @if($SelectedUser)
                    @include('usermgt::user-tabs')
                @endif
            </div>
        </div>
    </div>


</div>
