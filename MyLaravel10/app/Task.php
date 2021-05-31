<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Task extends Model
{
    protected $fillable = [

        'title',
        'description',
        'employee_id'
    ];

    public function Employee() {

        return $this -> belongsTo(Employee::class);
    } 
}
