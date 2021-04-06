<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'task_details',
        'user_id',
        'comment'
    ];

    public function user()
    {
        $this->hasOne(User::class);
    }
}
