<div>

    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none xl:order-last">
        <!-- Breadcrumb -->


        <article>
            <div>

                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="-mt-5 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">

                        <div
                            class=" sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">

                            <div
                                class="mt-20 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                                <button type="button"
                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                    <!-- Heroicon name: solid/mail -->
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                    </svg>
                                    <span>Message</span>
                                </button>
                                <button type="button"
                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                    <!-- Heroicon name: solid/phone -->
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                    </svg>
                                    <span>Call</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="  mt-2 min-w-0 flex-1">
                        <h1 class="text-2xl font-bold text-gray-900 truncate">
                            Name:
                        </h1>
                        <p class="mt-1 text-sm text-gray-600">Role : </p>
                    </div>
                </div>
            </div>


            <div class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    @foreach(config('usermgt.user_profile') as $attribute)

                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">

                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">


                            </dd>
                        </div>
                    @endforeach


                </dl>
            </div>

        </article>
    </main>


</div>
