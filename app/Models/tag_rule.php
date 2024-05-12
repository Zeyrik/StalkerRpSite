<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tag_rule extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [

    ];

    public function rules(){
        return $this->hasMany(Rule::class);
    }
}
