<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'dob',
        'gender',
        'marital_status',
        'religion',
        'address',
        'country_id',
        'image',
        'thum_image',
        'educational_one',
        'educational_two',
        'educational_three',
        'institute_one',
        'institute_two',
        'institute_three',
        'department_one',
        'department_two',
        'department_three',
        'passing_year_one',
        'passing_year_two',
        'passing_year_three',
        'grade_one',
        'grade_two',
        'grade_three',
        'result_one',
        'result_two',
        'result_three',
        'language_id',
        'score',
        'test_date',
        'status',
        'added_by',
        'updated_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function country_data(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    public function edu_one(){
        return $this->belongsTo(EducationLevel::class, 'educational_one', 'id');
    }
    public function edu_two(){
        return $this->belongsTo(EducationLevel::class, 'educational_two', 'id');
    }
    public function edu_three(){
        return $this->belongsTo(EducationLevel::class, 'educational_three', 'id');
    }
    public function res_one(){
        return $this->belongsTo(ResultType::class, 'result_one', 'id');
    }
    public function res_two(){
        return $this->belongsTo(ResultType::class, 'result_two', 'id');
    }
    public function res_three(){
        return $this->belongsTo(ResultType::class, 'result_three', 'id');
    }
    public function language_data(){
        return $this->belongsTo(LanguageTest::class, 'language_id', 'id');
    }

}
