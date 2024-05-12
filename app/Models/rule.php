<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class rule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [

    ];

    public function tagRule()
{
    return $this->belongsTo(tag_rule::class);
}
}
