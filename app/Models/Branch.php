<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $table = 'branches';

      public function users()
    {
        return $this->hasMany(User::class);
    }
     public function products()
    {
        return $this->hasMany(Product::class);
    }
     public function orders()
    {
        return $this->hasMany(Order::class);
    }
       public function stocks()
    {
        return $this->hasMany(ProductStock::class);
    }

}
