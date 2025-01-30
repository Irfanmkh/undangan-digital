<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class order extends Model
{
    //
    protected $fillable = [
        "nama_customer",
        "email_customer",
        "template_id",
        "total_harga",
        'link_pembayaran',
    ];

    public function template(){

        return $this->belongsTo(template::class);
    }
}
