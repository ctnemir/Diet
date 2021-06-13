<x-app-layout title="Diet - Hastalık Listesi">
    <div class="container grid px-6 mx-auto">
        <div class="mb-3 flex justify-between ">
        <h2 class="mt-6 mb-1 text-2xl font-semibold text-gray-700 dark:text-gray-200 inline-block">
            Hastalık Listesi
        </h2>

        <a href="/disease/create">
            <button class="px-3 py-2 mt-5 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </a>
        </div>
        <!-- Cards -->{{--
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total clients
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        6389
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Account balance
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        $ 46,760.89
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        New sales
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        376
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Pending contacts
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        35
                    </p>
                </div>
            </div>
        </div>
        --}}
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-hidden">
                <table class="w-full">
                    <thead class="whitespace-no-wrap">
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Hastalık Adı</th>
                        <th class="px-4 py-3">Açıklama</th>
                        <th class="px-4 py-3">Seçenekler</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($data as $disease)
                        <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <a href="/disease/{{$disease->id}}/edit">
                            <div class="flex items-center text-sm">
                                <div>
                                    <p class="font-semibold">{{$disease->name}}</p>
                                </div>
                            </div>
                            </a>
                        </td>
                        <td class="px-4 py-3">
                            <div class=" break-words ">
                                {{$disease->description}}
                            </div>
                        </td>
                        <td class="px-4 py-4 text-xs text-center text-purple-700 flex">
                            <div class="mr-6">
                                <a href="/disease/{{$disease->id}}/edit" class="inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <form action="/disease/{{$disease->id}}" method="POST" class="inline-block">
                                    @csrf @method('DELETE')
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">--}}
{{--                <span class="flex items-center col-span-3">--}}
{{--                    Showing 21-30 of 100--}}
{{--                </span>--}}
{{--                <span class="col-span-2"></span>--}}
{{--                <!-- Pagination -->--}}{{----}}
{{--                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">--}}
{{--                    <nav aria-label="Table navigation">--}}
{{--                        <ul class="inline-flex items-center">--}}
{{--                            <li>--}}
{{--                                <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">--}}
{{--                                    <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">--}}
{{--                                        <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>--}}
{{--                                    </svg>--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">--}}
{{--                                    1--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">--}}
{{--                                    2--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">--}}
{{--                                    3--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">--}}
{{--                                    4--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <span class="px-3 py-1">...</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">--}}
{{--                                    8--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">--}}
{{--                                    9--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">--}}
{{--                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">--}}
{{--                                        <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>--}}
{{--                                    </svg>--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </span>--}}
{{--            </div>--}}
        </div>
    </div>
</x-app-layout>
