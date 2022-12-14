<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nameProject',
        'description',
        'user_id',
        'start_at',
        'end_at',
        'status'
    ];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function tasks(){
        return $this->hasMany(Task::class,'project_id','id');
    }
}
