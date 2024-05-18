<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    use HasFactory;
    protected $table = 'education_levels';
    protected $fillable = [
        'level_name',
        'status',
        'added_by',
        'updated_by',
    ];
    public function created_name(){
        return $this->belongsTo(Admin::class, 'added_by', 'id');
    }
    public function updated_name(){
        return $this->belongsTo(Admin::class, 'updated_by', 'id');
    }
}
