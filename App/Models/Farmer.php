<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use App\Models\Offer;

class Farmer extends Model
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
        'surname',
        'address',
        'razao_social',
        'document',
        'created_at',
        'updated_at'
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
