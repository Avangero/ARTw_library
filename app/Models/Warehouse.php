<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouse';
    protected $fillable = ['count_books'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
