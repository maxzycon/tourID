<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    protected $fillable = ["destinationLocation","destinationName","destinationSlug", "district_id"];

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class, 'destination_id');
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function guide(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'detination_user')->withPivot("price");
    }
}
