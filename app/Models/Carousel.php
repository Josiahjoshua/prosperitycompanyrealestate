<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;
    protected $table = 'carousels';

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
