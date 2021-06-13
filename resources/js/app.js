require('./bootstrap');

import 'alpinejs'


import $ from "jquery"

$(document).on('click','.deleteMeal',function (){
   $(this).parent().parent().remove();
});

$(document).on('click','.addFood',function (){
    let food = '<div class="foodDiv w-full my-2 relative text-gray-500 focus-within:text-purple-600">\n' +
        '                                    <input class="block w-full  mt-1 text-sm text-black dark:text-gray-300\n' +
        '                    dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none\n' +
        '                    focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" />\n' +
        '\n' +
        '                                    <button class="foodDeleteButton absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5\n' +
        '                    text-white transition-colors duration-150 bg-purple-500 dark:bg-purple-600 border border-transparent\n' +
        '                    rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none\n' +
        '                    focus:shadow-outline-purple">\n' +
        '\n' +
        '                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">\n' +
        '                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />\n' +
        '                                        </svg>\n' +
        '\n' +
        '                                    </button>\n' +
        '\n' +
        '                                </div>';
    $(this).parent().parent().append(food);
});

$(document).on('click','.addMealButton', function (){
    let meal = '<div class="mealDiv  flex flex-col  w-96 my-2 md:mx-16 pb-3 px-6 md:px-2 bg-indigo-100 dark:bg-indigo-400 rounded">\n' +
        '                            <div class="w-24 h-7 px-6 mb-3 mx-auto  flex justify-center rounded-b">\n' +
        '                                <div class="deleteMeal bg-indigo-200 hover:bg-indigo-400 dark:hover:bg-indigo-600 dark:bg-indigo-500 rounded-bl px-3">\n' +
        '                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">\n' +
        '                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />\n' +
        '                                    </svg>\n' +
        '                                </div>\n' +
        '\n' +
        '                                <div class="addFood bg-indigo-200 hover:bg-indigo-400 dark:hover:bg-indigo-600 dark:bg-indigo-500 rounded-br px-3">\n' +
        '                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">\n' +
        '                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />\n' +
        '                                    </svg>\n' +
        '                                </div>\n' +
        '                            </div>\n';
                                    for(let k=1;k<=5;k++){
                                       meal += '<div class="foodDiv w-full my-2 relative text-gray-500 focus-within:text-purple-600">\n' +
        '                                    <input class="block w-full  mt-1 text-sm text-black dark:text-gray-300\n' +
        '                    dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none\n' +
        '                    focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" />\n' +
        '\n' +
        '                                    <button class="foodDeleteButton absolute mt-1 inset-y-0 right-0 px-4 text-sm font-medium leading-5\n' +
        '                    text-white transition-colors duration-150 bg-indigo-500 dark:bg-indigo-600 border border-transparent\n' +
        '                    rounded-r-md active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none\n' +
        '                    focus:shadow-outline-purple">\n' +
        '\n' +
        '                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">\n' +
        '                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />\n' +
        '                                        </svg>\n' +
        '\n' +
        '                                    </button>\n' +
        '\n' +
        '                                </div>\n';
                                    }
        meal +='                        </div>';
                                    //console.log(meal);
                                    $(this).parent().parent().find('.mealsDiv').append(meal);
});

$(document).on('click','.foodDeleteButton',function (){
    let parent = $(this).parent().parent();
    $(this).parent().remove();
    parent.css('height','auto');
});


$(document).ready(function (){

    let takvim = {
        week: [],
    };
    $("#print").click(function (){




        let meal = [];
        let meals = [];
        let mealsDiv = [];
        let food;
        let foods = [];

        let days = [];
        $(".dayDiv").children().each(function (index,child) {
            days.push($(child));
        });
        days.forEach(function (day,index) {
            //Gün isimlerini alma
            let dayname = day.find(".dayNameInput").val();
            let newday = { name: dayname};
            takvim.week.push(newday);

            //öğünleri alma


            meals = [];
            day.find(".mealsDiv").children().each(function (index,child) {
                meal = $(child);
                //console.log(meal);

                foods = [];
                meal.find(".foodDiv").each(function (inde,chil) {
                    food = $(chil);
                    foods.push(food.find('input').val());

                })
                meals.push(foods);

            });

            //console.log(meals);
            //console.log(takvim[index]);
            takvim.week[index].meals = (meals);


        });

        //console.log(JSON.stringify(takvim));

    });

    $("#print").click(function (){

        $("#methodJson").val(JSON.stringify(takvim));
        console.log($("#methodJson").val());
        $("#methodForm").submit();
    });

    $(".indexDietMethodSelect").change(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $("#tokenDiv").data("token")
            }
        });
        let data = {
            patientId : $(this).data("id"),
            newId : $(this).find("option:selected").val()
        }

        $.ajax({
            type:'POST',
            url:'http://localhost/changeMethod',
            data: data,
            success:function(resp) {
                /*var array = $.map(resp, function(value, index){
                    return [index];
                });
                console.log(array);*/
                console.log(resp);
            }
        });
    });

    $("#jsonOutput").slideUp();

    $("#toggleJsonTrigger").click(function (){
        $("#jsonOutput").slideToggle();
    });
});

