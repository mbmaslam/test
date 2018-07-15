<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'dept';
    protected  $primaryKey = 'deptno';

    public $timestamps = false;

    public function employees()
    {
        return $this->hasMany('App\Models\Employee\Employee');
    }
}
