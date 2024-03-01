<?php

namespace App\Models;

use App\Models\Project;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Info extends Model
{
    use HasFactory;


    protected $fillable = ['project_id', 'employee_id', 'date', 'hours'];

    public function project() :BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function employee() :BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
    
}
