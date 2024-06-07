<?php

namespace App\Models;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['account_id', 'date', 'ammount', 'method'];

    public function account() :BelongsTo{
        return $this->belongsTo(Account::class);
    }
}
