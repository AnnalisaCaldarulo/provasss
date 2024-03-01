<?php

namespace App\Models;

use App\Models\Info;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function info() :HasMany
    {
        return $this->hasMany(Info::class);
    }

}
