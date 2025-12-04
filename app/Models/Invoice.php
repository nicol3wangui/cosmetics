<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table="invoices";

    protected $fillable=[
              'user_id',
              'invoice_no',
             'total_item',
             'total_amount',
            'invoice_status',
    ];
}
