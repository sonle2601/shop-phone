<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'ProName',
        'ProImage',
        'ProCate',
        'ProQuantity',
        'ProPrice',
        'ProInfo',
        'ProDes',
        'ProSlug',
      ];
      public function users()
      {
          return $this->belongsToMany(User::class, 'carts', 'UserId', 'ProId');
      }
}