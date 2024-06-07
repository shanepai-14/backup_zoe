<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ZOE</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- font awesome --}}
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <link rel="stylesheet" href="{{ asset('css/print.css') }}">
</head>

<body class="">


    <nav class="bg-white shadow border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ZOE</span>
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/home"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor" id="userdropdown">
                            <img class="rounded-full w-10 h-10 border-2 border-transparent hover:border-blue-400 ignore-body-click" src="{{ asset('images/user.png')}}" alt="avatar">
                          </a>
                            <div id="usermenu" class="absolute lg:mt-14 pt-1 z-40 left-0 lg:left-auto lg:right-12 lg:top-0 invisible lg:w-auto w-full">
                              <div class="bg-white shadow-xl lg:px-8 px-6 lg:py-4 pb-4 pt-0 rounded lg:mr-3 rounded-t-none">
                                {{-- <a href="/settings" class="pb-2 block text-gray-600 hover:text-gray-900 ignore-body-click">Settings</a> --}}
                                <a href="/logout" class="block text-gray-600 hover:text-gray-900 ignore-body-click">Logout</a>
                              </div>
                            </div>
                      
                         
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    {{-- table --}}

    <div class="p-10">
        <h1 class="font-bold tracking-wider">Edit Account</h1>
        {{-- {{ $found }} --}}
        <form class="mx-auto" action="{{ route('update') }}" method="POST">
            @csrf
            <input type="number" value="{{ $found->id }}" name="id" class="hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <div class="mb-5">
                    <label for="cn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contract No.</label>
                    <input type="text" value="{{ $found->contract_no }}" name="contract_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12345-121" required />
                </div>
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Name.</label>
                    <input type="text" value="{{ $found->name }}" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                    <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position.</label>
                    <input type="text" value="{{ $found->position }}" name="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <div class="mb-5">
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company.</label>
                    <input type="text" value="{{ $found->company }}" name="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address.</label>
                    <input type="text" value="{{ $found->address }}" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                    <label for="service_details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service Details</label>
                    <select name="service_details" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        @switch($found->service_details)
                            @case(0)
                                <option value="0">Blocktime Programming</option>
                                <option value="1">Radio Advertisement</option>
                                @break
                            @case(1)
                                <option value="1">Radio Advertisement</option>
                                <option value="0">Blocktime Programming</option>
                                @break
                        
                            @default
                                <option value="">Choose a service</option>
                                <option value="0">Blocktime Programming</option>
                                <option value="1">Radio Advertisement</option>
                                <option value="2">Others</option>
                                @break
                        @endswitch
                        
                        
                        
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <div class="mb-5">
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject.</label>
                    <input type="text" value="{{ $found->subject }}" name="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                    <label for="scheduled_of_broadcast" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scheduled of Broadcast.</label>
                    <input type="text" value="{{ $found->schedule_of_broadcast }}" name="scheduled_of_broadcast" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fridays, 2:00-3:00PM" required />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <div class="mb-5">
                    <label for="start_of_broadcast" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start of Broadcast.</label>
                    <input type="date" value="{{ $found->start_of_broadcast }}" name="start_of_broadcast" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                    <label for="end_of_broadcast" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End of Broadcast.</label>
                    <input type="date" value="{{ $found->end_of_broadcast }}" name="end_of_broadcast" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                    <label for="billing_rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Billing Rate.</label>
                    <input type="number" value="{{ $found->billing_rate }}" name="billing_rate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
            </div>
            
            
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <a href="{{ route('home') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Cancel</a>
        </form>
    </div>


    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
         var userDropDownVisible = false;

document.body.addEventListener("click", function (e) {
   if(e.target.id != "usermenu" && !e.target.classList.contains('ignore-body-click') && userDropDownVisible){
       document.getElementById('usermenu').classList.add('invisible');
       userDropDownVisible = false;
   }
});


document.getElementById('userdropdown').addEventListener('click', function(){
   if(document.getElementById('usermenu').classList.contains('invisible')){
       document.getElementById('usermenu').classList.remove('invisible');
       userDropDownVisible = true;
   } else {
       document.getElementById('usermenu').classList.add('invisible');
       userDropDownVisible = false;
   }
});
    </script>
    
</body>

</html>
