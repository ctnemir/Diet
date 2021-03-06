<x-app-layout title="Diet - Hasta Detay">
    <div class="container grid px-6 mx-auto">
        <div class="mb-3 flex justify-between ">
            <h2 class="mt-6 mb-1 text-2xl font-semibold text-gray-700 dark:text-gray-200 inline-block">
                Hasta Detay
            </h2>

            <a href="/patient/{{$data->id}}/edit">
                <button class="px-3 py-2 mt-5 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </button>
            </a>
        </div>

        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Ad Soyad
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{$data->name}}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        GSM
                    </p>
                    <p class="text-base font-semibold text-gray-700 dark:text-gray-200">
                        {{$data->gsm}}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        E-posta
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{$data->email}}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Hastal??k
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        @if(isset($data->disease->name))
                        {{$data->disease->name}}
                            @endif
                    </p>
                </div>
            </div>
        </div>

        <h1>Diyet Program??</h1>

        <div class="bg-white py-5 dark:bg-gray-800 shadow">
            <ul class="flex flex-row">
            @foreach(json_decode($data->dietMethod->method , true)["week"] as $i=> $day)
                <li class=" mx-auto w-1/12 text-center font-bold px-2 bg-indigo-100 top-0">
                    <label for="">{{$day["name"]}}</label>
                <ul class="">
                    @foreach($day["meals"] as $j => $meal)
                        <li class="mx-auto mt-2 text-center font-medium bg-indigo-200">{{$j+1}}.??????n</li>
                        <li class="bg-indigo-200">
                            <ul class="mb-4">
                                @foreach($meal as $k => $food)
                                    <li class="mx-auto py-2 border-t- border-b border-gray-700 text-center font-light">{{$food}}</li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
                </li>
            @endforeach
            </ul>
        </div>
        <div id="toggleJsonTrigger" class="bg-indigo-600 w-full h-20 mt-5 text-center align-baseline pt-6">
            <span class="text-bold text-xl text-indigo-100">JSON</span>
        </div>
        <div id="jsonOutput" class="w-full p-5 mb-40 bg-indigo-100 text-gray-700">
            {{$data->output}}
        </div>
    </div>
</x-app-layout>
