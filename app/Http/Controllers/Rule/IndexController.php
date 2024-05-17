<?php

namespace App\Http\Controllers\Rule;

use App\Http\Controllers\Controller;
use App\Models\TagRule;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getRule(){
        $tagRules = TagRule::with('rules')->get();
        return view('rules', compact('tagRules'));
    }
}
