<?php

namespace App\Http\Controllers\Fraction;

use App\Http\Controllers\Controller;
use App\Models\Fraction;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $fractions = Fraction::all();
        return view('fraction', compact('fractions'));
    }
}
