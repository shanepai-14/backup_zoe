<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Payment;
use App\Models\CompanyBillingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Svg\Tag\Rect;

class AccountController extends Controller
{
    public function index()
    {
        $contractNumber =  Account::generateContractNumber();
        $accounts = Account::with('payment')->get();
        $companyDetails = CompanyBillingDetail::first();
        return view('index', compact('accounts', 'contractNumber','companyDetails'));
    }

    public function store(Request $request)
    {

        Account::create([
            'contract_no' => $request->input('contract_no'),
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'company' => $request->input('company'),
            'address' => $request->input('address'),
            'service_details' => $request->input('service_details'),
            'subject' => $request->input('subject'),
            'schedule_of_broadcast' => $request->input('scheduled_of_broadcast'),
            'start_of_broadcast' => $request->input('start_of_broadcast'),
            'end_of_broadcast' => $request->input('end_of_broadcast'),
            'billing_rate' => $request->input('billing_rate')
        ]);

        return Redirect::route('home')->with('success', 'New Account successfully added');
    }
    public function storeCompanyDetails(Request $request)
    {
          
        $first = CompanyBillingDetail::first();
        if($first){
            $first->update([
                'account_number' => request('account_number'),
                'account_name' => request('account_name'),
                'bank_name' => request('bank_name'),
                'gcash_number' => request('gcash_number'),
                'gcash_name' => request('gcash_name'),
                'company_email' => request('company_email'),
                'company_number1' => request('company_number1'),
                'company_number2' => request('company_number2'),
                'company_address' => request('company_address'),
            ]);
            return Redirect::route('home')->with('success', 'Updated Company Details'); 
        }

        $detail = CompanyBillingDetail::create([
            'account_number' => request('account_number'),
            'account_name' => request('account_name'),
            'bank_name' => request('bank_name'),
            'gcash_number' => request('gcash_number'),
            'gcash_name' => request('gcash_name'),
            'company_email' => request('company_email'),
            'company_number1' => request('company_number1'),
            'company_number2' => request('company_number2'),
            'company_address' => request('company_address'),
        ]);
        return Redirect::route('home')->with('success', 'Updated Company Details');
    }
    public function delete(Request $request)
    {
        $id = $request->input('id');

        // Find the record by its ID
        $record = Account::find($id);

        if ($record) {
            // Delete the record if found
            $record->delete();
            return Redirect::route('home')->with('success', 'New Account successfully added');
        } else {
            return Redirect::route('home')->with('success', 'New Account successfully added');
        }
    }

    public function edit(Request $request)
    {
        // dd($request->id);
        $found = Account::find($request->id);
        // dd($found);
        return view('edit', compact('found'));
    }

    public function update(Request $request)
    {
        // dd($request);
        $id = $request->input('id');
        // Find the record by its ID
        $record = Account::find($id);
        if ($record) {
            // Update the record with the request data
            $record->update([
                'contract_no' => $request->input('contract_no'),
                'name' => $request->input('name'),
                'position' => $request->input('position'),
                'company' => $request->input('company'),
                'address' => $request->input('address'),
                'service_details' => $request->input('service_details'),
                'subject' => $request->input('subject'),
                'schedule_of_broadcast' => $request->input('scheduled_of_broadcast'),
                'start_of_broadcast' => $request->input('start_of_broadcast'),
                'end_of_broadcast' => $request->input('end_of_broadcast'),
                'billing_rate' => $request->input('billing_rate')
            ]);

            return Redirect::route('home')->with('success', 'New Account successfully added');
        } else {
            return Redirect::route('home')->with('success', 'New Account successfully added');
        }
    }

    public function payment(Request $request)
    {
        // dd($request);
        Payment::create(['account_id' => $request->input('id'), 'date' => $request->input('date'), 'ammount' => $request->input('ammount'), 'method' => $request->input('payment_method')]);
        return Redirect::route('home')->with('success', 'New Account successfully added');
    }
}
