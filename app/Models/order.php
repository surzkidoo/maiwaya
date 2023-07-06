<?php

namespace App\Models;

use Artisan;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    use HasFactory;

   
        /**
         * Get the user that owns the order
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function product()
        {
            return $this->belongsTo(product::class);
        }
    
}
