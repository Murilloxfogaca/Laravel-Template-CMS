<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use App\Models\Offer;

class Order extends Model
{
    use HasFactory, Uuids;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'qtd',
        'amount',
        'final_amount',
        'finished',
        'created_at',
        'updated_at'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'offer_id');
    }
}
