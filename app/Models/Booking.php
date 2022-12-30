<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $fillable = ["customerName","customerPhone","metode_pembayaran","status_payment","status","user_id","destination_id","customerAddress","grandTotal"];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
}
