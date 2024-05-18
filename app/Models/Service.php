<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'service_name',
        'amount',
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
