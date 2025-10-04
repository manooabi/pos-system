<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
        protected $fillable = [
        'branch_id', 'user_id', 'customer_id', 'order_number',
        'total_amount', 'discount_amount', 'tax_amount',
        'payable_amount', 'status', 'payment_status'
    ];
       public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
     public function user()
    {
        return $this->belongsTo(User::class);
    }
      public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
       public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
