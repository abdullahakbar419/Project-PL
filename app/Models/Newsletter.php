<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Newsletter extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $guarded = [
        'id'
    ];

    // protected $cascadeDeletes = [
    //     'newsletterLogs'
    // ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function firstParty()
    {
        return $this->hasOne(FirstParty::class, 'first_party_id');
    }

    public function secondParty()
    {
        return $this->hasOne(SecondParty::class, 'second_party_id');
    }

    public function newsletterLogs()
    {
        return $this->hasMany(NewsletterLog::class);
    }
}