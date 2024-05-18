<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo_title extends Model
{
    use HasFactory;
    protected $table = 'logo_titles';
    protected $fillable = [
        'website_name',
        'logo_image',
        'favicon',
        'address',
        'contact_number',
        'email',
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
