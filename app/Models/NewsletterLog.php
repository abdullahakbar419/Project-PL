<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsletterLog extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [
        'id'
    ];

    public function newsletter()
    {
        return $this->belongsTo(Newsletter::class, 'news_id');
    }
}