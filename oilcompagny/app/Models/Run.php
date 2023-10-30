<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Run extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function sendInterim(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_send');
    }

    public function receiveInterim(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_receive');
    }

    public function interim(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_interim');
    }

    public function items(): BelongsTo
    {
        return $this->belongsTo(Items::class, 'item_id');
    }


/*    public function sendInterim(): HasMany
    {
        return $this->hasMany(User::class, 'id','user_id_send');
    }

    public function receiveInterim(): HasMany
    {
        return $this->hasMany(User::class, 'id','user_id_receive');
    }*/

/*    public function items(): HasMany
    {
        return $this->hasMany(Items::class, 'item_id');
    }*/
}
