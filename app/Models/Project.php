<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'project_name',
        'project_description',
        'service',
        'phone_number',
        'attachment',
        'due_date',
        'project_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //
}
