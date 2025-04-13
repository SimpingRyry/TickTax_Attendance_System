<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemoQueue extends Model
{
    protected $table = 'memo_queue'; // your custom table name

    protected $fillable = [
        'memo_image',
        'memo_no',
        'series',
        'to_for',
        'from_',
        'subject',
        'venue',
        'date',
        'uploaded_at'
    ];

    public $timestamps = false; // <-- Tells Laravel to stop expecting created_at/updated_at
}

