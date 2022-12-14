<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = ["promoCode","promoDiscount","promoKouta","promoName","promoPath","promoDateEnd","promoDateStart","status"];
}
