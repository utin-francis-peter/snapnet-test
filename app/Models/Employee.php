<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
       "project_id", "name", "email", "position"
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
