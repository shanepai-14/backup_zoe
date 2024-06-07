
@foreach ($accounts as $item)
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
                            <p><i class="fa-solid fa-location-dot"></i> #143 Barangay Parian, Calamba City, Laguna.</p>
                            <p><i class="fa-solid fa-envelope"></i> radyocalabarzon@dzjv.com.ph</p>
                            <p><i class="fa-solid fa-phone"></i> (0906)468-114 / (0906)682-1336</p>
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
            <p>Date: <span class="d">{{ \Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y') }}</span></p>
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
                    <span class="content-right">{{ \Carbon\Carbon::parse($item->start_of_broadcast)->formatLocalized('%d %B %Y') }}</span>
                </div>
                <div class="s2-content">
                    <span>END OF BROADCAST:</span>
                    <span class="content-right">{{ \Carbon\Carbon::parse($item->end_of_broadcast)->formatLocalized('%d %B %Y') }}</span>
                </div>
                <div class="br">
                    <span>Billing Rate:</span>
                    <span>{{ $item->billing_rate }}.00</span>
                </div>
            </div>
        </div>

        <div class="section-3">
            <div class="s3">
                <h1>Recent Payments</h1>
                <div class="payments">
                    <p>26 January 2024 - 4,000.00 (at the station)</p>
                </div>
            </div>
            <div class="s3">
                <h1>Billing and Payment Schedule</h1>
                <table class="bps">
                    <tbody>
                        @php
                            $sdate = \Carbon\Carbon::parse($item->start_of_broadcast)->formatLocalized('%d %B %Y');
                            $edate = \Carbon\Carbon::parse($item->end_of_broadcast)->formatLocalized('%d %B %Y');
                            $tdate = \Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y');
                            // $billingRate = 
                            $billingDate = explode(' ', $sdate);
                            $billingEndDate = explode(' ', $edate);
                            $todayDate = explode(' ', $tdate);
                            $days = [];
                            $tempday = 0;
                            $month = $billingDate[1];
                            $monthString = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                            $monthStringDays = ["5,12,19,26", "2,9,16,23", "1,8,15,22", "5,12,19,26", "3,10,17,24,31", "7,14,21,28", "5,12,19,26", "2,9,16,23,30", "6,13,20,27", "4,11,18,25", "1,8,15,22,29", "6,13,20,27"];
                            $year = $billingDate[2];

                            $skey = 0;
                            $ekey = 0;
                            $tkey = 0;
                            $totalDueDate = 0;
                            array_push($days, $billingDate[0])
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
                                    $skey = $key+1;
                                @endphp
                                
                            @endif
                            @if ($val === $billingEndDate[1])
                                @php
                                    $ekey = $key+1;
                                @endphp
                                
                            @endif
                            @if ($val === $todayDate[1])
                                @php
                                    $tkey = $key+1;
                                @endphp
                                
                            @endif

                        @endforeach

                        @php
                            function ordinalSuffix($number) {
                                if ($number % 100 >= 11 && $number % 100 <= 13) {
                                    return $number . 'th';
                                }
                                switch ($number % 10) {
                                    case 1: return $number . 'st';
                                    case 2: return $number . 'nd';
                                    case 3: return $number . 'rd';
                                    default: return $number . 'th';
                                }
                            }
                        @endphp

                        {{-- {{ $skey }} {{ $ekey }} --}}
                        @for ($i = $skey; $i <= $ekey; $i++)
                            
                            
                            @if ($i === 1)
                            <tr class="bpstr completed">
                                <td class="bpstd">{{ ordinalSuffix($i) }} Billing</td>
                                <td class="bpstd">{{ $monthString[$i-1] }} {{ $monthStringDays[$i-1] }} {{ $year }}</td>
                                <td class="bpstd">{{ intval($item->billing_rate) * 4 }}.00</td>
                            </tr>
                            @elseif ($i !== 1 && $i <= $tkey)
                                <tr class="bpstr pending">
                                    <td class="bpstd"><i class="fa-solid fa-play"></i> {{ ordinalSuffix($i) }} Billing</td>
                                    <td class="bpstd">{{ $monthString[$i-1] }} {{ $monthStringDays[$i-1] }} {{ $year }}</td>
                                    <td class="bpstd">{{ intval($item->billing_rate) * 4 }}.00</td>
                                </tr>
                                @php
                                    $totalDueDate += intval($item->billing_rate) * 4;
                                @endphp
                            @else
                                <tr class="bpstr">
                                    <td class="bpstd">{{ ordinalSuffix($i) }} Billing</td>
                                    <td class="bpstd">{{ $monthString[$i-1] }} {{ $monthStringDays[$i-1] }} {{ $year }}</td>
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
                                    <p>1250681919</p>
                                </div>
                                <div>
                                    <p>Bank Name:</p>
                                    <p>Chinabank Corporation</p>
                                </div>
                            </th>
                            <th style="background-color: rgb(202, 202, 202);">
                                <p style="text-decoration: underline;">Through GCash:</p>
                                <div>
                                    <p>0900-000-000</p>
                                    <p>Juan Dela Cruz</p>
                                </div>
                            </th>
                            <th rowspan="2">
                                <div style="text-align: left; margin-bottom:5px;">
                                    <p style="color: rgba(0, 162, 255, 0.925); font-weight:700; font-style: italic;">Due Date</p>
                                    <p style="margin-top: -15px;">on or before <b>{{ $tdate }}</b></p>
                                </div>
                                <div style="text-align: left;">
                                    <p style="color: rgba(0, 162, 255, 0.925); font-weight:700;">Please Pay</p>
                                    <p style="color: rgba(0, 162, 255, 0.925); font-weight:700; font-size:32px;margin-top: -20px;">₱{{ $totalDueDate }}.00</p>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th style="background-color: rgb(202, 202, 202);">
                                <p style="text-decoration: underline;">Pay at our Station:</p>
                                <p>#140 Barangay Parian, Calamba City,Laguna</p>
                            </th>
                            
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endforeach
