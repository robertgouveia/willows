<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function menus(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
