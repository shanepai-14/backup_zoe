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
    <style>
        #menu-toggle:checked + #menu {
   display: block;
}
    </style>
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
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor" id="userdropdown">
                            <img class="rounded-full w-10 h-10 border-2 border-transparent hover:border-blue-400 ignore-body-click" src="{{ asset('images/user.png')}}" alt="avatar">
                          </a>
                            <div id="usermenu" class="absolute lg:mt-14 pt-1 z-40 left-0 lg:left-auto lg:right-12 lg:top-0 invisible lg:w-auto w-full">
                              <div class="bg-white shadow-xl lg:px-8 px-6 lg:py-4 pb-4 pt-0 rounded lg:mr-3 rounded-t-none">
                                <a href="#" id="company_btn" class="pb-2 block text-gray-600 hover:text-gray-900 ignore-body-click">Company Details</a>
                                <a href="/logout" class="block text-gray-600 hover:text-gray-900 ignore-body-click">Logout</a>
                              </div>
                            </div>
                      
                         
                    </li>
                    {{-- <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dropdown<svg
                                            class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="doubleDropdown"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Overview</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                                                    downloads</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Billing</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Rewards</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('generate') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Generate</a>
                    </li>
                    <li>
                        <a href="#" id="printButton"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Print</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    {{-- table --}}

    <div class="p-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex justify-between items-center px-2">
                <div class="pb-4 bg-white dark:bg-gray-900">
                    {{-- <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div
                            class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for items">
                    </div> --}}
                    <h1 class="font-bold tracking-wider text-slate-800">Available Account</h1>
                </div>
                <div>
                    <a href="#" id="addNew"
                        class="bg-blue-500 hover:bg-blue-700 p-2 rounded-md text-white">+ New</a>
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Contract No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Account Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Position
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Company
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Schedule of Broadcast
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $account)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $account->contract_no }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $account->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $account->position }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $account->company }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $account->address }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $account->schedule_of_broadcast }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="#" data-id="{{ $account->id }}"
                                    class="openPrint font-medium text-blue-600 dark:text-blue-500 hover:underline">Print</a>
                                <a href="{{ route('edit', $account->id) }}"
                                    class="edit font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('delete') }}" method="post">
                                    @csrf
                                    <input type="text" value="{{ $account->id }}" name="id" class="hidden">
                                    <button type="submit"
                                    class="delete font-medium text-red-600 dark:text-red-500 hover:underline hover:cursor-pointer">Delete</button>
                                </form>
                                <a data-id="{{ $account->id }}"
                                    class="openPayment font-medium text-blue-600 dark:text-blue-500 hover:underline hover:cursor-pointer">Payment</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

    @php
        function ordinalSuffix($number)
        {
            if ($number % 100 >= 11 && $number % 100 <= 13) {
                return $number . 'th';
            }
            switch ($number % 10) {
                case 1:
                    return $number . 'st';
                case 2:
                    return $number . 'nd';
                case 3:
                    return $number . 'rd';
                default:
                    return $number . 'th';
            }
        }
    @endphp

    {{-- {{ $accounts }} --}}
    @foreach ($accounts as $item)
    {{-- {{ $item->payment }} --}}
        <div class="hidden content-{{ $item->id }}">
            <div class="wrapper">
                <div class="header">
                    <table>
                        <thead>
                            <tr>
                                <td class="logo">
                                    {{-- <div id="img"> --}}
                                    <img src="{{ asset('images/logo.jpg') }}" alt="">
                                </td>
                                <td class="logo2">
                                    <p class="p1">DZJV 1458</p>
                                    <p class="p2">RADYO</p>
                                    <p class="p3">CALABARZON</p>
                                    <p class="p4">KAAKIBAT NG DIYOS, PARA SA BAYAN</p>
                                </td>
                                <td class="icons">
                                    <p><i class="fa-solid fa-location-dot"></i> {{$companyDetails->company_address}}</p>
                                    <p><i class="fa-solid fa-envelope"></i> {{$companyDetails->company_email}}</p>
                                    <p><i class="fa-solid fa-phone"></i> {{$companyDetails->company_number1}} / {{$companyDetails->company_number2}}</p>
                                </td>
                                <td class="title">
                                    <h1>STATEMENT OF</h1>
                                    <h1>ACCOUNT</h1>
                                </td>
                            </tr>
                        </thead>
                    </table>

                </div>
                <div class="date">
                    <p>Date: <span
                            class="d">{{ \Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y') }}</span>
                    </p>
                </div>

                <div class="section-2">
                    <div class="s-2-a">
                        <h1 class="s-title">ACCOUNT DETAILS</h1>
                        <div class="ad-1" class="ad-content-gray">
                            Contract No.
                        </div>
                        <div class="ad-2" class="ad-content">
                            {{ $item->contract_no }}
                        </div>
                        <div class="ad-3" class="ad-content-gray">
                            Account Holder
                        </div>
                        <div class="ad-4" class="ad-content">
                            <p>{{ $item->name }}</p>
                            <p>{{ $item->position }}</p>
                            <p>{{ $item->company }}</p>
                            <p>{{ $item->address }}</p>
                        </div>
                    </div>
                    <div class="s-2-b">
                        <h1 class="s-title">SERVICE DETAILS</h1>
                        <div class="s2-icons">

                            @if ($item->service_details === 0)
                                <span><i class="fa-solid fa-circle"></i> Blocktime Programming</span>
                            @else
                                <span><i class="fa-regular fa-circle"></i> Blocktime Programming</span>
                            @endif
                            @if ($item->service_details === 1)
                                <span><i class="fa-solid fa-circle"></i> Radio Advertisement</span>
                            @else
                                <span><i class="fa-regular fa-circle"></i> Radio Advertisement</span>
                            @endif
                            @if ($item->service_details === 2)
                                <span><i class="fa-solid fa-circle"></i> Others</span>
                            @else
                                <span><i class="fa-regular fa-circle"></i> Others</span>
                            @endif

                        </div>
                        <div class="s2-content">
                            <span>SUBJECT:</span>
                            <span class="content-right">{{ $item->subject }}</span>
                        </div>
                        <div class="s2-content">
                            <span>SCHEDULED OF BROADCAST:</span>
                            <span class="content-right">{{ $item->schedule_of_broadcast }}</span>
                        </div>
                        <div class="pob">
                            <span>Period of broadcast</span>
                        </div>
                        <div class="s2-content">
                            <span>START OF BROADCAST:</span>
                            <span
                                class="content-right">{{ \Carbon\Carbon::parse($item->start_of_broadcast)->formatLocalized('%d %B %Y') }}</span>
                        </div>
                        <div class="s2-content">
                            <span>END OF BROADCAST:</span>
                            <span
                                class="content-right">{{ \Carbon\Carbon::parse($item->end_of_broadcast)->formatLocalized('%d %B %Y') }}</span>
                        </div>
                        <div class="br">
                            <span>Billing Rate:</span>
                            <span>{{ $item->billing_rate }}.00</span>
                        </div>
                    </div>
                </div>
                {{-- {{ $accounts }} --}}
                <div class="section-3">
                    <div class="s3">
                        <h1>Recent Payments</h1>
                        <div class="payments">
                            @php
                                $rmonthCollection = [];
                            @endphp
                            {{-- {{ count($item->payment) }} --}}
                            @if (count($item->payment) > 0)
                                @foreach ($item->payment as $p)
                                    @php
                                        $rdate = \Carbon\Carbon::parse($p->date)->formatLocalized('%d %B %Y');
                                        $recentDate = explode(' ', $rdate);
                                        $recentMonth = $recentDate[1];
                                        array_push($rmonthCollection, $recentMonth);
                                    @endphp
                                    <p>{{ $rdate }} - {{ $p->ammount }}.00 ({{ $p->method }})</p>
                                @endforeach
                            @else
                                <p style="padding-left: 10px; color:red;">no payment's made.</p>
                            @endif
                            
                        </div>
                    </div>
                    <div class="s3">
                        <h1>Billing and Payment Schedule</h1>
                        <table class="bps">
                            <tbody>
                                @php
                                    $sdate = \Carbon\Carbon::parse($item->start_of_broadcast)->formatLocalized(
                                        '%d %B %Y',
                                    );
                                    $edate = \Carbon\Carbon::parse($item->end_of_broadcast)->formatLocalized(
                                        '%d %B %Y',
                                    );
                                    $tdate = \Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y');
                                    // $billingRate =
                                    $billingDate = explode(' ', $sdate);
                                    $billingEndDate = explode(' ', $edate);
                                    $todayDate = explode(' ', $tdate);
                                    $days = [];
                                    $tempday = 0;
                                    $month = $billingDate[1];
                                    $monthString = [
                                        'January',
                                        'February',
                                        'March',
                                        'April',
                                        'May',
                                        'June',
                                        'July',
                                        'August',
                                        'September',
                                        'October',
                                        'November',
                                        'December',
                                    ];
                                    $monthStringDays = [
                                        '5,12,19,26',
                                        '2,9,16,23',
                                        '1,8,15,22',
                                        '5,12,19,26',
                                        '3,10,17,24,31',
                                        '7,14,21,28',
                                        '5,12,19,26',
                                        '2,9,16,23,30',
                                        '6,13,20,27',
                                        '4,11,18,25',
                                        '1,8,15,22,29',
                                        '6,13,20,27',
                                    ];
                                    $year = $billingDate[2];

                                    $skey = 0;
                                    $ekey = 0;
                                    $tkey = 0;
                                    $rkey = [];

                                    $totalDueDate = 0;
                                    array_push($days, $billingDate[0]);
                                @endphp
                                @for ($i = 0; $i <= 2; $i++)
                                    {{-- // Push data into the array --}}
                                    @php
                                        $tempday = $days[$i] + 7;
                                        // Push data into the array
                                        array_push($days, $tempday);
                                    @endphp
                                @endfor

                                @foreach ($monthString as $key => $val)
                                    @if ($val === $month)
                                        @php
                                            $skey = $key + 1;
                                        @endphp
                                    @endif
                                    @if ($val === $billingEndDate[1])
                                        @php
                                            $ekey = $key + 1;
                                        @endphp
                                    @endif
                                    @if ($val === $todayDate[1])
                                        @php
                                            $tkey = $key + 1;
                                        @endphp
                                    @endif
                                    @if (count($rmonthCollection) && in_array($val, $rmonthCollection))
                                    @php
                                        $rkey[] = $key + 1;
                                        // print_r($rkey);
                                     @endphp
                                    @endif
                                @endforeach



                                {{-- {{ $skey }} {{ $ekey }} --}}
                                @for ($i = $skey; $i <= $ekey; $i++)
                                    @if (in_array($i, $rkey))
                                        <tr class="bpstr completed">
                                            <td class="bpstd">{{ ordinalSuffix($i) }} Billing</td>
                                            <td class="bpstd">{{ $monthString[$i - 1] }} {{ $monthStringDays[$i - 1] }}
                                                {{ $year }}</td>
                                            <td class="bpstd">{{ intval($item->billing_rate) * 4 }}.00</td>
                                        </tr>
                                    @elseif ($i !== 1 && $i <= $tkey)
                                        <tr class="bpstr pending">
                                            <td class="bpstd"><i class="fa-solid fa-play"></i>
                                                {{ ordinalSuffix($i) }} Billing</td>
                                            <td class="bpstd">{{ $monthString[$i - 1] }} {{ $monthStringDays[$i - 1] }}
                                                {{ $year }}</td>
                                            <td class="bpstd">{{ intval($item->billing_rate) * 4 }}.00</td>
                                        </tr>
                                        @php
                                            $totalDueDate += intval($item->billing_rate) * 4;
                                        @endphp
                                    @else
                                        <tr class="bpstr">
                                            <td class="bpstd">{{ ordinalSuffix($i) }} Billing</td>
                                            <td class="bpstd">{{ $monthString[$i - 1] }} {{ $monthStringDays[$i - 1] }}
                                                {{ $year }}</td>
                                            <td class="bpstd">{{ intval($item->billing_rate) * 4 }}.00</td>
                                        </tr>
                                    @endif
                                @endfor

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="section-4">
                    <div class="s4">
                        <h1>Notice</h1>
                        <ul>
                            <li>Please be reminded that we are bounded by a <b>"Pay Before Broadcast"</b> Policy.</li>
                            <li>Please priority to pay the scheduled billing.</li>
                            <li>Please assure that you settle your bill on or before the specified due dates.</li>
                        </ul>
                    </div>
                </div>
                <div class="section-5">
                    <div class="s5">
                        <h1>You can pay your bills at</h1>
                    </div>
                </div>
                <div class="section-6">
                    <div class="s6">
                        <table style="width: 100%" class="s6table">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="background-color: rgb(202, 202, 202);">
                                        <p style="text-decoration: underline;">Through BANK TRANSFER</p>
                                        <div>
                                            <p>Account Number:</p>
                                            <p>{{$companyDetails->account_number}}</p>
                                        </div>
                                        <div>
                                            <p>Bank Name:</p>
                                            <p>{{$companyDetails->bank_name}}</p>
                                        </div>
                                    </th>
                                    <th style="background-color: rgb(202, 202, 202);">
                                        <p style="text-decoration: underline;">Through GCash:</p>
                                        <div>
                                            <p>{{$companyDetails->gcash_number}}</p>
                                            <p>{{$companyDetails->gcash_name}}</p>
                                        </div>
                                    </th>
                                    <th rowspan="2">
                                        <div style="text-align: left; margin-bottom:5px;">
                                            <p
                                                style="color: rgba(0, 162, 255, 0.925); font-weight:700; font-style: italic;">
                                                Due Date</p>
                                            <p style="margin-top: -15px;">on or before <b>{{ $tdate }}</b></p>
                                        </div>
                                        <div style="text-align: left;">
                                            <p style="color: rgba(0, 162, 255, 0.925); font-weight:700;">Please Pay</p>
                                            <p
                                                style="color: rgba(0, 162, 255, 0.925); font-weight:700; font-size:32px;margin-top: -20px;">
                                                ₱{{ $totalDueDate }}.00</p>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th style="background-color: rgb(202, 202, 202);">
                                        <p style="text-decoration: underline;">Pay at our Station:</p>
                                        <p>{{$companyDetails->company_address}}</p>
                                    </th>

                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div id="companyDetails" class="fixed top-0 left-0 w-full h-full bg-black opacity-50 hidden"></div>

    <!-- Modal Container -->
    <div id="companyContainer" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white  rounded shadow-lg w-[800px] hidden">
        <div class="p-4  bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="mb-4 text-xl font-semibold dark:text-white">Company Details</h3>
            <form action="{{ route('storeCompanyDetails')}}" method="POST">
                @csrf
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-2">
                        <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="company_email" id="company_email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="company@gmail.com" value="{{$companyDetails->company_email ?? ''}}" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone #1</label>
                        <input type="number" value="{{ $companyDetails->company_number1 ?? ""}}" name="company_number1" id="company_number1" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. 0912 345 6789" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone #2</label>
                        <input type="number" value="{{ $companyDetails->company_number2?? ""}}" name="company_number2" id="company_number2" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. 0912 345 6789" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
                        <input type="number"value="{{ $companyDetails->account_number?? ""}}" name="account_number" id="account_number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Name</label>
                        <input type="text" value="{{ $companyDetails->account_name?? ""}}" name="account_name" id="account_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank Name</label>
                        <input type="text" value="{{ $companyDetails->bank_name?? ""}}" name="bank_name" id="bank_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gcash Number</label>
                        <input type="number" value="{{ $companyDetails->gcash_number?? ""}}" name="gcash_number" id="gcash_number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. 0912 345 6789" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gcash Name</label>
                        <input type="text" value="{{ $companyDetails->gcash_name?? ""}}" name="gcash_name" id="gcash_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="15/08/1990" required="">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="organization" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Address</label>
                       <textarea name="company_address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" id="" cols="30" rows="5">{{ $companyDetails->company_address?? ""}}
                       </textarea>
                    </div>
                  
                    <div class="col-span-6 sm:col-full">
                        <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Save all</button>
                        <button id="closeCompanyBtn" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('popup.payment')
    @include('popup.form')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
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

// javascript functionality to preview photo file upload

window.loadFile = function(event) {
   var reader = new FileReader();
   reader.onload = function(){
       var output = document.getElementById('photo');
       if (event.target.files[0].type.match('image.*')) {
           output.src = reader.result;
       } else {
           event.target.value = '';
           alert('please select a valid image');   
       }
   };
   reader.readAsDataURL(event.target.files[0]);
 };


 $('#company_btn').click(function(){
                var id = $(this).data('id');
                // alert(id)
                // $('#p_id').val(parseInt(id))
                $('#companyDetails').removeClass('hidden')
                $('#companyContainer').removeClass('hidden')
            })

            $('.openPayment').click(function(){
                var id = $(this).data('id');
                // alert(id)
                $('#p_id').val(parseInt(id))
                $('#paymentBackground').removeClass('hidden')
                $('#paymentContainer').removeClass('hidden')
            })
            $('#closeBtn').click(function() {
                $('#modalBackground').addClass('hidden')
                $('#modalContainer').addClass('hidden')
            })
            $('#closeCompanyBtn').click(function() {
                $('#companyDetails').addClass('hidden')
                $('#companyContainer').addClass('hidden')
            })

            
            $('#addNew').click(function() {
                $('#modalBackground').removeClass('hidden')
                $('#modalContainer').removeClass('hidden')
            })

            $('.openPrint').click(function() {
                var id = $(this).data('id')
                // Clone the content div
                var $printContent = $(`.content-${id}`).clone();

                // Create a new window and append the cloned content
                var $printWindow = window.open('', '_blank');
                $printWindow.document.open();
                $printWindow.document.write(`<head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <title>Print</title>

                    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
                    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
                    <link rel="stylesheet" href="./css/print.css">
                </head>
                <body>`);
                $printWindow.document.write($printContent.html());
                $printWindow.document.write('</body></html>');
                $printWindow.document.close();

                // Print the new window
                setTimeout(() => {
                    $printWindow.print();
                }, 1000);

            })
        })
    </script>
</body>

</html>
