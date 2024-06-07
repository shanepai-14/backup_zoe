<!-- Modal Background -->
<div id="paymentBackground" class="fixed top-0 left-0 w-full h-full bg-black opacity-50 hidden"></div>

<!-- Modal Container -->
<div id="paymentContainer" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-8 rounded shadow-lg w-[800px] hidden">
    <div class="mb-4">
        <h1 class="text-lg font-bold mb-2">Payment</h1>
        <div>
            

            <form class="mx-auto" action="{{ route('payment') }}" method="POST">
                @csrf
                <input type="number" name="id" id="p_id" class="hidden">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                    <div class="mb-5">
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date.</label>
                        <input type="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="mb-5">
                        <label for="ammount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ammount.</label>
                        <input type="number" name="ammount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="mb-5">
                        <label for="payment_method" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service Details</label>
                        <select name="payment_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="">Choose a payment method</option>
                            <option value="gcash">Through GCash</option>
                            <option value="bank transfer">Through BANK TRANSFER</option>
                            <option value="at our Station">Pay at our Station</option>
                        </select>
                    </div>
                </div>
                
                
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <a href="{{ route('home') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Close</a>
            </form>
  
        </div>
    </div>
</div>