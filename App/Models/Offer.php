<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use App\Models\Farmer;
use App\Models\Order;

class Offer extends Model
{
    use HasFactory, Uuids;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'value',
        'cost',
        'type',
        'created_at',
        'updated_at'
    ];

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
