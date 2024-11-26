<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    public function projectToEmployeesRelationship () {
        return $this->hasMany(Employee::class, "project_id");
    }
}
