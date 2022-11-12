<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorySession extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'last_login'];
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
