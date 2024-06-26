<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tag_rule_id',
        'rule_id',
        'rule'
    ];

    public function tagRule()
    {
        return $this->belongsTo(TagRule::class);
    }
}
