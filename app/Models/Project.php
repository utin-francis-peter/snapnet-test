<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        "id", "name", "description", "status", "start_date", "end_date",
    ];

    public function employees () {
        return $this->hasMany(Employee::class, "project_id");
    }
}
