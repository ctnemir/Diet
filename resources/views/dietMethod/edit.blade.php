<x-app-layout title="Diet - Yeni Diyet Metodu">
    <form id="methodForm" action="/dietMethod/{{$data->id}}" method="POST" >
        @csrf
        @method('PUT')
    <div class="p-6 shadow bg-white dark:bg-gray-800 mx-3 mt-5">
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Diyet Yöntemi Adı</span>
            <input value="{{$data->name}}" name="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
        </label>
    </div>

    <div class="flex flex-col md:px-3 md:pt-5">
        @foreach($data["method"]["week"] as $i => $day)
        <div class="dayDiv my-2  md:p-3 w-full flex flex-row shadow bg-white dark:bg-gray-800">
            <div class="flex flex-col">
                <div class=" dayNameDiv mb-3 flex flex-row text-gray-500 focus-within:text-indigo-600">
                    <input data-id ="{{$i}}" class="dayNameInput inline-block w-32 h-9 text-sm text-black dark:text-gray-300
                    dark:border-gray-600 dark:bg-gray-700 focus:border-indigo-400 focus:outline-none
                    focus:shadow-outline-indigo dark:focus:shadow-outline-gray form-input"
                           value="{{$day["name"]}}" readonly/>

                    <button type="button" class="addMealButton inline-block h-9 w-9 ml-5
                    text-white transition-colors duration-150 bg-indigo-500 dark:bg-indigo-600 border border-transparent
                    rounded-md active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none
                    focus:shadow-outline-indigo">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </button>
                </div>
                <div class="mealsDiv flex flex-row flex-wrap justify-start">
                @foreach($day["meals"] as $j => $meal)
                        <div class="mealDiv  flex flex-col  w-96 my-2 md:mx-16 pb-3 px-6 md:px-2 bg-indigo-100 dark:bg-indigo-400 rounded">
                            <div class="w-24 h-7 px-6 mb-3 mx-auto  flex justify-center rounded-b">

                                <div class="deleteMeal bg-indigo-200 hover:bg-indigo-400 dark:hover:bg-indigo-600 dark:bg-indigo-500 rounded-bl px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>

                                <div class="addFood bg-indigo-200 hover:bg-indigo-400 dark:hover:bg-indigo-600 dark:bg-indigo-500 rounded-br px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </div>

                            </div>
                            @foreach($meal as $k => $food)
                                <div class="foodDiv w-full my-2 relative text-gray-500 focus-within:text-indigo-600">
                                    <input class="block w-full  mt-1 text-sm text-black dark:text-gray-300
                    dark:border-gray-600 dark:bg-gray-700 focus:border-indigo-400 focus:outline-none
                    focus:shadow-outline-indigo dark:focus:shadow-outline-gray form-input" value="{{$food}}"/>

                                    <button type="button" class="foodDeleteButton absolute mt-1 inset-y-0 right-0 px-4 text-sm font-medium leading-5
                    text-white transition-colors duration-150 bg-indigo-500 dark:bg-indigo-600 border border-transparent
                    rounded-r-md active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none
                    focus:shadow-outline-indigo">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>

                                    </button>

                                </div>
                            @endforeach

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
        <div class="w-96 my-6 mx-3 py-6 mx-auto text-center bg-indigo-200 hover:bg-indigo-400 dark:hover:bg-indigo-600 dark:bg-indigo-500 rounded" id="print">PRİNT</div>
    </div>
        <input value="" id="methodJson" name="methodJson" type="hidden">
    </form>
</x-app-layout>
