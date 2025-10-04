<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    Protected $fillable = ['name', 'email', 'phone', 'loyalty_points'];
     public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
