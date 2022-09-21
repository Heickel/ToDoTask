<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'description',
        'deadline',
        'status',
        'project_id',
    ];

    public function user()
    {
    	return $this->belongsTo(user::class);
    }

    public function project()
    {
    	return $this->belongsTo(project::class);
    }
}
