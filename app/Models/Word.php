<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Word extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'word',
        'user_id'
    ];

    //setup relation with definition model
    public function definition(): HasOne
    {
        return $this->hasOne(Definition::class);
    }
    //setup relation with user model
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
