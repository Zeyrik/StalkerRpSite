<?php

namespace App\Http\Controllers\Rule;

use App\Http\Controllers\Controller;
use App\Models\tag_rule;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getRule(){
        $tagRules = tag_rule::with('rules')->get();
        $data = 'fdfd';
        return view('rules', compact('tagRules', 'data'));
    }
}
