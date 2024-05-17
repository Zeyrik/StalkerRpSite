<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagRule extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'tag_rules',
        'tag_id'
    ];

    public function rules(){
        return $this->hasMany(Rule::class);
    }


}
