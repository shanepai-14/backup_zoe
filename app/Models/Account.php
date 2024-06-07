<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;
class Account extends Model
{
    use HasFactory;

    protected $fillable = ['contract_no', 'name','position','company','address','service_details','subject','schedule_of_broadcast','start_of_broadcast','end_of_broadcast','billing_rate'];

    public static function generateContractNumber()
    {
        $year = date('Y');
        $dayOfYear = date('z') + 1; // z returns 0-364, add 1 to make it 1-365

        // Get the highest contract number for the current year and day
        $lastContract = DB::table('accounts')
            ->whereYear('created_at', $year)
            ->where(DB::raw('DAYOFYEAR(created_at)'), $dayOfYear)
            ->orderBy('id', 'desc')
            ->first();

        $nextSequence = $lastContract ? intval(substr($lastContract->contract_no, -4)) + 1 : 1;
        $contractNumber = sprintf('RS-%04d-%03d-%04d', $year, $dayOfYear, $nextSequence);

        return $contractNumber;
    }
    public function payment() :HasMany{
        return $this->hasMany(Payment::class);
    }
}
