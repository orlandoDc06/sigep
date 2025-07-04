<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    /** @use HasFactory<\Database\Factories\ContractTypeFactory> */
    use HasFactory;

    protected $fillable = ['description', 'base_salary'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
