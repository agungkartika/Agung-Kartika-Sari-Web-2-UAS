<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = ['stock_id', 'report_date', 'quantity'];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
