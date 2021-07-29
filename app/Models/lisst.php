<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lisst extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'quantidade'

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
