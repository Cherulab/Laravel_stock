<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockProduit extends Model
{
    use HasFactory;
    protected $table = 'stock_produit';


    protected $fillable = [
        'num_produit',
        'img',
        'nom_produit',
        'in_stock',
        'qts',
    ];
}
