<!-- Modal Background -->
<div id="modalBackground" class="fixed top-0 left-0 w-full h-full bg-black opacity-50 hidden"></div>

<!-- Modal Container -->
<div id="modalContainer" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-8 rounded shadow-lg w-[800px] hidden">
    <div class="mb-4">
        <h1 class="text-lg font-bold mb-2">Custom Modal</h1>
        <div>
            

            <form class="mx-auto" id="myForm" action="{{ route('store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                    <div class="mb-5">
                        <label for="cn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contract No.</label>
                        <input type="text" name="contract_no" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12345-121" value="{{$contractNumber}}" readonly/>
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Name.</label>
                        <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="mb-5">
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position.</label>
                        <input type="text" name="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                    <div class="mb-5">
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company.</label>
                        <input type="text" name="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="mb-5">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address.</label>
                        <input type="text" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="mb-5">
                        <label for="service_details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service Details</label>
                        <select name="service_details" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="">Choose a Service</option>
                            <option value="0">Blocktime Programming</option>
                            <option value="1">Radio Advertisement</option>
                            <option value="2">Others</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-1 gap-2">
                    <div class="mb-5">
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject.</label>
                        <input type="text" name="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                  
                </div>
                <div  class="grid grid-cols-1 md:grid-cols-1 gap-2">
                    <div class="mb-5 w-full">
                        <label for="scheduled_of_broadcast" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scheduled of Broadcast.</label>
                        <input type="hidden" id="scheduled_of_broadcast" name="scheduled_of_broadcast" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fridays, 2:00PM-3:00PM"  />
                       <div class="flex">
                        <select id="dayOfWeek">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                        <input type="time" name="" id="startTime" class="w-full">  <input type="time" class="w-full" name="" id="endTime">
                       </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                    <div class="mb-5">
                        <label for="start_of_broadcast" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start of Broadcast.</label>
                        <input type="date" name="start_of_broadcast" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="mb-5">
                        <label for="end_of_broadcast" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End of Broadcast.</label>
                        <input type="date" name="end_of_broadcast" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="mb-5">
                        <label for="billing_rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Billing Rate.</label>
                        <input type="number" name="billing_rate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                </div>
                
                
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <button id="closeBtn" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Close</button>
            </form>
  
        </div>
    </div>
</div>