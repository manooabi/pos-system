<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
       protected $fillable = [
        'branch_id', 'category_id', 'sku', 'name',
        'unit_id', 'cost_price', 'selling_price',
        'tax_rate', 'stock_alert_qty', 'status'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
      public function stocks()
    {
        return $this->hasMany(ProductStock::class);
    }
      public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
     public function purchaseItems()
    {
        return $this->hasMany(PurchaseItem::class);
    }
}
