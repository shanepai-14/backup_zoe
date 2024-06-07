<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyBillingDetail extends Model
{
    use HasFactory;
    protected $table = 'company_billing_details';

    protected $fillable = [
        'account_number',
        'account_name',
        'bank_name',
        'gcash_number',
        'gcash_name',
        'company_email',
        'company_number1',
        'company_number2',
        'company_address',
        'billing_schedule',
        'desc',
        'details',
    ];
}
