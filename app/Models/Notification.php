<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = ['stock_id', 'message'];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
