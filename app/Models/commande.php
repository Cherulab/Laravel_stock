<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;
    protected $table = 'commandes';


    protected $fillable = [
        'client_name',
        'client_phone',
        'reservation_date',
        'reservation_time',
        'note',
    ];
}
