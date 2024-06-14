<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Client extends Model
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
        'cnpj',
        'address', 
        'form_of_payment',  //Forma de pagamento
        'box',   //Tipo de caixa
        'created_at',
        'updated_at'
    ];

}
